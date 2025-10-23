<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Login - {{ config('app.name', 'Kasir App') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        .float-animation {
            animation: float 6s ease-in-out infinite;
        }
        @keyframes gradient-shift {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }
        .gradient-animate {
            background-size: 200% 200%;
            animation: gradient-shift 15s ease infinite;
        }
    </style>
</head>
<body class="antialiased bg-white" style="font-family: 'Figtree', sans-serif;">
    <div class="min-h-screen flex">
        <!-- Left Side - Login Form -->
        <div class="w-full lg:w-1/2 flex items-center justify-center p-8 lg:p-16">
            <div class="w-full max-w-md">
                <!-- Logo & Title -->
                <div class="mb-10">
                    <a href="/" class="inline-flex items-center gap-3 mb-8 group">
                        <div class="h-12 w-12 flex items-center justify-center rounded-xl bg-gradient-to-br from-[#08C2FF] to-[#026B95] text-white shadow-lg group-hover:shadow-xl transition-all duration-300 group-hover:scale-110">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="h-7 w-7">
                                <path d="M8.25 4.75h7.5v3.5h-7.5z" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M6 8.75h12a1.5 1.5 0 011.5 1.5V18H4.5v-7.75a1.5 1.5 0 011.5-1.5z" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M8.75 13h4m-4 3h6.5M15.5 13h1.5" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <span class="text-2xl font-bold text-gray-900">Kasir App</span>
                    </a>
                    <h1 class="text-4xl font-bold text-gray-900 mb-3">Welcome Back!</h1>
                    <p class="text-lg text-gray-600">Silakan login untuk melanjutkan ke dashboard</p>
                </div>

                <!-- Role Tabs -->
                <div class="mb-8">
                    <div class="flex gap-2 p-1.5 bg-[#E7F8FF] rounded-2xl">
                        <button type="button" onclick="selectRole('admin')" id="tab-admin" class="role-tab flex-1 px-4 py-3 rounded-xl font-semibold text-sm transition-all duration-300 focus:outline-none">
                            <div class="flex items-center justify-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span>Admin</span>
                            </div>
                        </button>
                        <button type="button" onclick="selectRole('kasir')" id="tab-kasir" class="role-tab flex-1 px-4 py-3 rounded-xl font-semibold text-sm transition-all duration-300 focus:outline-none">
                            <div class="flex items-center justify-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                </svg>
                                <span>Kasir</span>
                            </div>
                        </button>
                        <button type="button" onclick="selectRole('pembeli')" id="tab-pembeli" class="role-tab flex-1 px-4 py-3 rounded-xl font-semibold text-sm transition-all duration-300 focus:outline-none">
                            <div class="flex items-center justify-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                </svg>
                                <span>Pembeli</span>
                            </div>
                        </button>
                    </div>
                </div>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Validation Errors -->
                @if ($errors->any())
                    <div class="mb-4 p-4 bg-red-50 border-l-4 border-red-500 rounded-lg">
                        <div class="flex items-start">
                            <svg class="w-5 h-5 text-red-500 mt-0.5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                            </svg>
                            <div>
                                <p class="font-semibold text-red-800 text-sm">Error</p>
                                <ul class="mt-1 text-sm text-red-700">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                @endif

                <!-- Login Form -->
                <form method="POST" action="{{ route('login') }}" class="space-y-5">
                    @csrf

                    <!-- Hidden Role Input -->
                    <input type="hidden" name="role" id="selected-role" value="admin">

                    <!-- Email -->
                    <div class="space-y-2">
                        <label for="email" class="block text-sm font-semibold text-gray-700">Email Address</label>
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 group-focus-within:text-[#08C2FF] transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" 
                                   class="block w-full pl-12 pr-4 py-3.5 bg-gray-50 border-2 border-gray-200 rounded-xl text-gray-900 placeholder-gray-400 focus:bg-white focus:border-[#08C2FF] focus:ring-4 focus:ring-[#08C2FF]/20 transition-all duration-300"
                                   placeholder="your@email.com">
                        </div>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="space-y-2">
                        <label for="password" class="block text-sm font-semibold text-gray-700">Password</label>
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 group-focus-within:text-[#08C2FF] transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                            </div>
                            <input id="password" type="password" name="password" required autocomplete="current-password"
                                   class="block w-full pl-12 pr-12 py-3.5 bg-gray-50 border-2 border-gray-200 rounded-xl text-gray-900 placeholder-gray-400 focus:bg-white focus:border-[#08C2FF] focus:ring-4 focus:ring-[#08C2FF]/20 transition-all duration-300"
                                   placeholder="••••••••">
                            <button type="button" onclick="togglePassword()" class="absolute inset-y-0 right-0 pr-4 flex items-center">
                                <svg id="eye-open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 hover:text-gray-600 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                                <svg id="eye-closed" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 hover:text-gray-600 hidden transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                                </svg>
                            </button>
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Remember & Forgot -->
                    <div class="flex items-center justify-between">
                        <label for="remember_me" class="inline-flex items-center cursor-pointer group">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-[#08C2FF] shadow-sm focus:ring-[#08C2FF] focus:ring-offset-0 cursor-pointer" name="remember">
                            <span class="ml-2.5 text-sm font-medium text-gray-700 group-hover:text-gray-900">Remember me</span>
                        </label>

                        @if (Route::has('password.request'))
                            <a class="text-sm font-semibold text-[#08C2FF] hover:text-[#026B95] transition-colors" href="{{ route('password.request') }}">
                                Forgot password?
                            </a>
                        @endif
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="group relative w-full py-4 px-6 rounded-xl font-semibold text-white bg-gradient-to-r from-[#08C2FF] to-[#026B95] hover:from-[#07A7E0] hover:to-[#024665] shadow-lg shadow-[0_20px_40px_-15px_rgba(8,194,255,0.6)] hover:shadow-xl hover:shadow-[0_25px_45px_-18px_rgba(2,107,149,0.65)] focus:outline-none focus:ring-4 focus:ring-[#08C2FF]/40 transition-all duration-300 hover:scale-[1.02]">
                        <span class="flex items-center justify-center gap-2">
                            Sign In
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg>
                        </span>
                    </button>
                </form>

                <!-- Register Link -->
                <div class="mt-8 text-center">
                    <p class="text-sm text-gray-600">
                        Don't have an account?
                        <a href="{{ route('register') }}" class="font-semibold text-[#08C2FF] hover:text-[#026B95] transition-colors">
                            Create account
                        </a>
                    </p>
                </div>

                <!-- Demo Credentials -->
                <div class="mt-6 p-4 bg-gradient-to-r from-[#DFF6FF] to-[#EBFAFF] rounded-2xl border border-[#B8E9FF]">
                    <p class="text-xs font-semibold text-gray-700 mb-2 flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-[#08C2FF]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        Demo Credentials
                    </p>
                    <div class="grid grid-cols-3 gap-2 text-xs">
                        <div class="p-2 bg-white rounded-lg shadow-sm">
                            <p class="font-bold text-[#026B95] mb-0.5">Admin</p>
                            <p class="text-gray-600 break-all">admin@test.com</p>
                        </div>
                        <div class="p-2 bg-white rounded-lg shadow-sm">
                            <p class="font-bold text-[#0794D6] mb-0.5">Kasir</p>
                            <p class="text-gray-600 break-all">kasir@test.com</p>
                        </div>
                        <div class="p-2 bg-white rounded-lg shadow-sm">
                            <p class="font-bold text-[#08C2FF] mb-0.5">Pembeli</p>
                            <p class="text-gray-600 break-all">user@test.com</p>
                        </div>
                    </div>
                    <p class="text-xs text-gray-600 mt-2 text-center">Password: <code class="px-2 py-0.5 bg-white rounded font-mono">password</code></p>
                </div>
            </div>
        </div>

        <!-- Right Side - Illustration -->
    <div class="hidden lg:flex lg:w-1/2 bg-gradient-to-br from-[#08C2FF] via-[#0794D6] to-[#026B95] gradient-animate items-center justify-center p-16 relative overflow-hidden">
            <!-- Decorative Elements -->
            <div class="absolute top-20 right-20 w-72 h-72 bg-white/10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-20 left-20 w-96 h-96 bg-white/10 rounded-full blur-3xl"></div>
            
            <div class="relative z-10 max-w-lg text-white">
                <div>
                    <div class="mb-12">
                        <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/20 backdrop-blur-sm rounded-full text-sm font-semibold mb-6">
                            <span class="inline-flex h-2 w-2 rounded-full bg-white"></span>
                            Trusted by 1000+ Businesses
                        </div>
                        <h2 class="text-5xl font-bold mb-6 leading-tight">
                            Manage Your Business
                            <span class="block text-white/90">Smarter & Faster</span>
                        </h2>
                        <p class="text-xl text-white/80 leading-relaxed mb-8">
                            All-in-one platform untuk mengelola kasir, inventori, dan laporan penjualan dengan mudah
                        </p>
                    </div>

                    <!-- Features -->
                    <div class="space-y-4">
                        <div class="flex items-start gap-4 p-4 bg-white/10 backdrop-blur-sm rounded-2xl">
                            <div class="flex-shrink-0 w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg mb-1">Lightning Fast</h3>
                                <p class="text-white/70 text-sm">Proses transaksi dalam hitungan detik</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 p-4 bg-white/10 backdrop-blur-sm rounded-2xl">
                            <div class="flex-shrink-0 w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg mb-1">Secure & Reliable</h3>
                                <p class="text-white/70 text-sm">Data terenkripsi dengan standar bank</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 p-4 bg-white/10 backdrop-blur-sm rounded-2xl">
                            <div class="flex-shrink-0 w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg mb-1">Real-time Analytics</h3>
                                <p class="text-white/70 text-sm">Dashboard lengkap dengan insights mendalam</p>
                            </div>
                        </div>
                    </div>

                    <!-- Stats -->
                    <div class="grid grid-cols-3 gap-6 mt-12 pt-8 border-t border-white/20">
                        <div>
                            <p class="text-4xl font-bold mb-1">1K+</p>
                            <p class="text-white/70 text-sm">Active Users</p>
                        </div>
                        <div>
                            <p class="text-4xl font-bold mb-1">99.9%</p>
                            <p class="text-white/70 text-sm">Uptime</p>
                        </div>
                        <div>
                            <p class="text-4xl font-bold mb-1">4.9/5</p>
                            <p class="text-white/70 text-sm">User Rating</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function selectRole(role) {
            // Remove active from all tabs
            document.querySelectorAll('.role-tab').forEach(tab => {
                tab.classList.remove('bg-white', 'text-gray-900', 'shadow-md');
                tab.classList.add('text-gray-600', 'hover:text-gray-900');
            });

            // Add active to selected tab
            const selectedTab = document.getElementById(`tab-${role}`);
            selectedTab.classList.remove('text-gray-600', 'hover:text-gray-900');
            selectedTab.classList.add('bg-white', 'text-gray-900', 'shadow-md');

            // Update hidden input
            document.getElementById('selected-role').value = role;
        }

        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const eyeOpen = document.getElementById('eye-open');
            const eyeClosed = document.getElementById('eye-closed');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeOpen.classList.add('hidden');
                eyeClosed.classList.remove('hidden');
            } else {
                passwordInput.type = 'password';
                eyeOpen.classList.remove('hidden');
                eyeClosed.classList.add('hidden');
            }
        }

        // Set default role on load
        window.addEventListener('DOMContentLoaded', () => {
            selectRole('admin');
        });
    </script>
</body>
</html>
