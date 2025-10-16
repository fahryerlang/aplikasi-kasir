<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ClerkAuthController extends Controller
{
    /**
     * Sync user from Clerk to Laravel
     */
    public function syncUser(Request $request)
    {
        $request->validate([
            'clerk_id' => 'required|string',
            'email' => 'required|email',
            'name' => 'required|string',
        ]);

        try {
            // Check if user already exists by clerk_id
            $user = User::where('clerk_id', $request->clerk_id)->first();

            if (!$user) {
                // Check if email already exists
                $user = User::where('email', $request->email)->first();

                if ($user) {
                    // Update existing user with clerk_id
                    $user->update([
                        'clerk_id' => $request->clerk_id,
                    ]);
                } else {
                    // Create new user
                    $user = User::create([
                        'name' => $request->name,
                        'email' => $request->email,
                        'clerk_id' => $request->clerk_id,
                        'role' => 'pembeli', // Default role
                        'password' => null, // No password needed for Clerk users
                    ]);
                }
            } else {
                // Update user info
                $user->update([
                    'name' => $request->name,
                    'email' => $request->email,
                ]);
            }

            // Login the user
            Auth::login($user);

            return response()->json([
                'success' => true,
                'user' => $user,
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to sync user: ' . $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Show Clerk callback page
     */
    public function callback()
    {
        return view('auth.clerk-callback');
    }

    /**
     * Verify Clerk session token
     */
    public function verifySession(Request $request)
    {
        $clerkSecretKey = config('services.clerk.secret_key');

        if (empty($clerkSecretKey) || $clerkSecretKey === 'your_clerk_secret_key_here') {
            return response()->json([
                'success' => false,
                'message' => 'Clerk not configured',
            ], 400);
        }

        // Verify Clerk session token
        $sessionToken = $request->header('Authorization');

        if (!$sessionToken) {
            return response()->json([
                'success' => false,
                'message' => 'No session token provided',
            ], 401);
        }

        // Here you would verify the token with Clerk's API
        // For simplicity, we'll just check if user exists
        return response()->json([
            'success' => true,
            'authenticated' => Auth::check(),
            'user' => Auth::user(),
        ]);
    }
}
