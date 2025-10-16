<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setup Google OAuth - Aplikasi Kasir</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen py-12">
    <div class="max-w-4xl mx-auto px-4">
        <div class="bg-white rounded-2xl shadow-xl p-8">
            <!-- Header -->
            <div class="text-center mb-8">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-blue-100 rounded-full mb-4">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                </div>
                <h1 class="text-3xl font-bold text-gray-900 mb-2">Setup Google OAuth</h1>
                <p class="text-gray-600">Panduan lengkap mengaktifkan fitur Login dengan Google</p>
            </div>

            <!-- Status Alert -->
            <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 mb-6 rounded-lg">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <div class="ml-3">
                        <h3 class="text-sm font-medium text-yellow-800">Fitur Google OAuth Belum Aktif</h3>
                        <div class="mt-2 text-sm text-yellow-700">
                            <p>Saat ini fitur login dengan Google belum dikonfigurasi. Anda masih bisa login menggunakan <strong>email dan password</strong>.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Login Info -->
            <div class="bg-green-50 border-l-4 border-green-400 p-4 mb-8 rounded-lg">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <div class="ml-3">
                        <h3 class="text-sm font-medium text-green-800">Akun Testing Tersedia</h3>
                        <div class="mt-2 text-sm text-green-700">
                            <p class="mb-2">Gunakan akun berikut untuk testing:</p>
                            <ul class="list-disc list-inside space-y-1 ml-4">
                                <li><strong>Admin:</strong> admin@test.com / password</li>
                                <li><strong>Kasir:</strong> kasir@test.com / password</li>
                                <li><strong>Pembeli:</strong> pembeli@test.com / password</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Setup Steps -->
            <div class="space-y-6">
                <h2 class="text-xl font-bold text-gray-900 mb-4">Langkah-langkah Setup (Opsional)</h2>

                <!-- Step 1 -->
                <div class="flex gap-4">
                    <div class="flex-shrink-0 w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold">1</div>
                    <div class="flex-1">
                        <h3 class="font-bold text-gray-900 mb-2">Buat Project Google Cloud</h3>
                        <p class="text-gray-600 mb-2">Buka <a href="https://console.cloud.google.com/" target="_blank" class="text-blue-600 hover:underline">Google Cloud Console</a> dan buat project baru.</p>
                        <div class="bg-gray-100 p-3 rounded-lg text-sm">
                            <p>• Klik "New Project"</p>
                            <p>• Nama: "Aplikasi Kasir"</p>
                            <p>• Klik CREATE</p>
                        </div>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="flex gap-4">
                    <div class="flex-shrink-0 w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold">2</div>
                    <div class="flex-1">
                        <h3 class="font-bold text-gray-900 mb-2">Setup OAuth Consent Screen</h3>
                        <p class="text-gray-600 mb-2">Konfigurasi halaman persetujuan OAuth.</p>
                        <div class="bg-gray-100 p-3 rounded-lg text-sm">
                            <p>• Menu: APIs & Services → OAuth consent screen</p>
                            <p>• Pilih: External</p>
                            <p>• Isi: App name, support email, developer email</p>
                            <p>• SAVE AND CONTINUE sampai selesai</p>
                        </div>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="flex gap-4">
                    <div class="flex-shrink-0 w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold">3</div>
                    <div class="flex-1">
                        <h3 class="font-bold text-gray-900 mb-2">Buat OAuth Credentials</h3>
                        <p class="text-gray-600 mb-2">Dapatkan Client ID dan Client Secret.</p>
                        <div class="bg-gray-100 p-3 rounded-lg text-sm">
                            <p>• Menu: APIs & Services → Credentials</p>
                            <p>• CREATE CREDENTIALS → OAuth client ID</p>
                            <p>• Application type: Web application</p>
                            <p>• Authorized redirect URIs:</p>
                            <code class="block bg-white p-2 mt-1 rounded">http://localhost:8000/auth/google/callback</code>
                        </div>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="flex gap-4">
                    <div class="flex-shrink-0 w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold">4</div>
                    <div class="flex-1">
                        <h3 class="font-bold text-gray-900 mb-2">Update File .env</h3>
                        <p class="text-gray-600 mb-2">Masukkan kredensial ke file .env</p>
                        <div class="bg-gray-900 text-green-400 p-4 rounded-lg text-sm font-mono">
                            <p>GOOGLE_CLIENT_ID=paste_your_client_id_here</p>
                            <p>GOOGLE_CLIENT_SECRET=paste_your_client_secret_here</p>
                            <p>GOOGLE_REDIRECT_URL=http://localhost:8000/auth/google/callback</p>
                        </div>
                    </div>
                </div>

                <!-- Step 5 -->
                <div class="flex gap-4">
                    <div class="flex-shrink-0 w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold">5</div>
                    <div class="flex-1">
                        <h3 class="font-bold text-gray-900 mb-2">Clear Cache & Test</h3>
                        <p class="text-gray-600 mb-2">Jalankan command untuk clear cache.</p>
                        <div class="bg-gray-900 text-green-400 p-4 rounded-lg text-sm font-mono">
                            <p>php artisan config:clear</p>
                        </div>
                        <p class="text-gray-600 mt-2">Kemudian coba klik tombol "Google" di halaman login.</p>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="mt-8 flex gap-4 justify-center">
                <a href="/login" class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors font-semibold">
                    Login Sekarang
                </a>
                <a href="https://console.cloud.google.com/" target="_blank" class="px-6 py-3 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition-colors font-semibold">
                    Google Cloud Console
                </a>
            </div>

            <!-- Footer Note -->
            <div class="mt-8 text-center text-sm text-gray-500">
                <p>Dokumentasi lengkap tersedia di file <code class="bg-gray-100 px-2 py-1 rounded">CARA_AKTIFKAN_GOOGLE_LOGIN.md</code></p>
            </div>
        </div>
    </div>
</body>
</html>
