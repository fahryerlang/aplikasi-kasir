<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Processing Login...</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        @keyframes spin {
            to { transform: rotate(360deg); }
        }
        .spinner {
            animation: spin 1s linear infinite;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-blue-50 to-purple-50 min-h-screen flex items-center justify-center">
    <div class="text-center">
        <div class="inline-block w-16 h-16 border-4 border-blue-600 border-t-transparent rounded-full spinner mb-4"></div>
        <h2 class="text-2xl font-bold text-gray-800 mb-2">Processing your login...</h2>
        <p class="text-gray-600">Please wait while we complete your authentication.</p>
    </div>

    <script type="module">
        import { handleClerkCallback } from '../../resources/js/clerk-auth.js';
        
        // Handle callback when page loads
        window.addEventListener('DOMContentLoaded', async () => {
            try {
                await handleClerkCallback();
            } catch (error) {
                console.error('Callback error:', error);
                // Redirect to login on error
                window.location.href = '/login?error=clerk_callback_failed';
            }
        });
    </script>
</body>
</html>
