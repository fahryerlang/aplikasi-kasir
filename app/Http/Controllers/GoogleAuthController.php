<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Exception;

class GoogleAuthController extends Controller
{
    /**
     * Redirect to Google authentication page
     */
    public function redirectToGoogle()
    {
        // Cek apakah kredensial Google sudah dikonfigurasi
        $clientId = config('services.google.client_id');
        $clientSecret = config('services.google.client_secret');
        
        if (empty($clientId) || $clientId === 'your_google_client_id_here' || 
            empty($clientSecret) || $clientSecret === 'your_google_client_secret_here') {
            return redirect('/login')->withErrors([
                'error' => 'Fitur Google OAuth belum dikonfigurasi. Silakan login dengan email dan password, atau hubungi administrator untuk mengaktifkan login dengan Google.'
            ]);
        }
        
        try {
            return Socialite::driver('google')
                ->scopes(['openid', 'profile', 'email'])
                ->redirect();
        } catch (Exception $e) {
            return redirect('/login')->withErrors([
                'error' => 'Konfigurasi Google OAuth tidak valid. Error: ' . $e->getMessage()
            ]);
        }
    }

    /**
     * Handle Google callback
     */
    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->stateless()->user();
            
            // Cek apakah user sudah ada berdasarkan google_id
            $user = User::where('google_id', $googleUser->id)->first();
            
            if ($user) {
                // User sudah ada, langsung login
                Auth::login($user);
                return redirect()->intended('/dashboard');
            } else {
                // Cek apakah email sudah terdaftar
                $existingUser = User::where('email', $googleUser->email)->first();
                
                if ($existingUser) {
                    // Jika email sudah ada, update google_id
                    $existingUser->update([
                        'google_id' => $googleUser->id,
                    ]);
                    
                    Auth::login($existingUser);
                    return redirect()->intended('/dashboard');
                } else {
                    // Buat user baru sebagai pembeli
                    $newUser = User::create([
                        'name' => $googleUser->name,
                        'email' => $googleUser->email,
                        'google_id' => $googleUser->id,
                        'role' => 'pembeli', // Default role pembeli
                        'password' => null, // Password tidak diperlukan untuk Google login
                    ]);
                    
                    Auth::login($newUser);
                    return redirect()->intended('/dashboard');
                }
            }
            
        } catch (\Laravel\Socialite\Two\InvalidStateException $e) {
            return redirect('/login')->withErrors([
                'error' => 'Sesi login Google expired. Silakan coba lagi.'
            ]);
        } catch (Exception $e) {
            return redirect('/login')->withErrors([
                'error' => 'Gagal login dengan Google: ' . $e->getMessage()
            ]);
        }
    }
}
