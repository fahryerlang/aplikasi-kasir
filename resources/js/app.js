import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// Import Clerk authentication
import { signInWithGoogle, signInWithGitHub, isClerkConfigured } from './clerk-auth';

// Make functions available globally
window.clerkAuth = {
    signInWithGoogle,
    signInWithGitHub,
    isConfigured: isClerkConfigured,
};
