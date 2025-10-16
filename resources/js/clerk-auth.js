// Clerk Authentication Integration
import { Clerk } from '@clerk/clerk-js';

// Initialize Clerk
const clerkPublishableKey = import.meta.env.VITE_CLERK_PUBLISHABLE_KEY || process.env.CLERK_PUBLISHABLE_KEY;

if (!clerkPublishableKey) {
    console.warn('⚠️ Clerk Publishable Key not found. Social login will not work.');
    console.warn('📝 Add CLERK_PUBLISHABLE_KEY to your .env file to enable Clerk authentication.');
}

let clerk = null;

// Initialize Clerk only if key is available
async function initializeClerk() {
    if (!clerkPublishableKey || clerkPublishableKey === 'your_clerk_publishable_key_here') {
        return null;
    }

    try {
        clerk = new Clerk(clerkPublishableKey);
        await clerk.load();
        return clerk;
    } catch (error) {
        console.error('Failed to initialize Clerk:', error);
        return null;
    }
}

// Sign in with Google
export async function signInWithGoogle() {
    if (!clerk) {
        clerk = await initializeClerk();
    }

    if (!clerk) {
        alert('Clerk belum dikonfigurasi. Silakan gunakan login email/password atau setup Clerk terlebih dahulu.');
        window.location.href = '/google-setup';
        return;
    }

    try {
        await clerk.authenticateWithRedirect({
            strategy: 'oauth_google',
            redirectUrl: window.location.origin + '/auth/clerk/callback',
            redirectUrlComplete: window.location.origin + '/dashboard',
        });
    } catch (error) {
        console.error('Google sign-in error:', error);
        alert('Gagal login dengan Google. Silakan coba lagi.');
    }
}

// Sign in with GitHub
export async function signInWithGitHub() {
    if (!clerk) {
        clerk = await initializeClerk();
    }

    if (!clerk) {
        alert('Clerk belum dikonfigurasi. Silakan gunakan login email/password atau setup Clerk terlebih dahulu.');
        return;
    }

    try {
        await clerk.authenticateWithRedirect({
            strategy: 'oauth_github',
            redirectUrl: window.location.origin + '/auth/clerk/callback',
            redirectUrlComplete: window.location.origin + '/dashboard',
        });
    } catch (error) {
        console.error('GitHub sign-in error:', error);
        alert('Gagal login dengan GitHub. Silakan coba lagi.');
    }
}

// Handle Clerk callback
export async function handleClerkCallback() {
    if (!clerk) {
        clerk = await initializeClerk();
    }

    if (!clerk) {
        console.error('Clerk not initialized');
        return;
    }

    try {
        const { user } = await clerk.handleRedirectCallback();
        
        if (user) {
            // Send user data to Laravel backend
            const response = await fetch('/api/clerk/sync-user', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                },
                body: JSON.stringify({
                    clerk_id: user.id,
                    email: user.primaryEmailAddress?.emailAddress,
                    name: user.fullName || user.firstName + ' ' + user.lastName,
                    avatar: user.imageUrl,
                }),
            });

            if (response.ok) {
                window.location.href = '/dashboard';
            } else {
                console.error('Failed to sync user with backend');
            }
        }
    } catch (error) {
        console.error('Callback handling error:', error);
    }
}

// Get current user
export async function getCurrentUser() {
    if (!clerk) {
        clerk = await initializeClerk();
    }

    if (!clerk) {
        return null;
    }

    return clerk.user;
}

// Sign out
export async function signOut() {
    if (!clerk) {
        clerk = await initializeClerk();
    }

    if (clerk) {
        await clerk.signOut();
    }
    
    // Also logout from Laravel
    window.location.href = '/logout';
}

// Check if Clerk is configured
export function isClerkConfigured() {
    return clerkPublishableKey && clerkPublishableKey !== 'your_clerk_publishable_key_here';
}

// Export clerk instance
export { clerk };

// Auto-initialize on page load
if (typeof window !== 'undefined') {
    initializeClerk().then(instance => {
        if (instance) {
            console.log('✅ Clerk initialized successfully');
        } else {
            console.log('ℹ️ Clerk not configured. Using standard authentication.');
        }
    });
}
