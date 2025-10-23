<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'POS App') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased bg-white text-gray-900" style="font-family: 'Figtree', sans-serif;">
        <div class="relative overflow-hidden min-h-screen">
            <div class="absolute top-0 right-0 w-1/2 h-screen bg-gradient-to-bl from-[#E0F7FF] via-[#F3FCFF] to-transparent opacity-40"></div>
            <div class="absolute bottom-0 left-0 w-1/3 h-96 bg-gradient-to-tr from-[#BAEEFF] via-[#E6FAFF] to-transparent opacity-30"></div>

            <header class="relative z-10 max-w-7xl mx-auto px-6 py-6">
                <nav class="flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <div class="h-10 w-10 flex items-center justify-center rounded-xl bg-gradient-to-br from-[#08C2FF] to-[#026B95] text-white shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="h-6 w-6">
                                <path d="M8.25 4.75h7.5v3.5h-7.5z" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M6 8.75h12a1.5 1.5 0 011.5 1.5V18H4.5v-7.75a1.5 1.5 0 011.5-1.5z" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M8.75 13h4m-4 3h6.5M15.5 13h1.5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <span class="text-xl font-bold text-gray-900">POS App</span>
                    </div>
                    <div class="hidden md:flex items-center gap-8 text-sm font-medium text-gray-600">
                        <a href="#features" class="relative transition text-gray-600 hover:text-[#026B95] after:absolute after:left-0 after:bottom-0 after:h-[2px] after:w-full after:scale-x-0 after:bg-gradient-to-r from-[#08C2FF] to-[#026B95] after:origin-center after:transition-transform after:duration-300 hover:after:scale-x-100">Features</a>
                        <a href="#pricing" class="relative transition text-gray-600 hover:text-[#026B95] after:absolute after:left-0 after:bottom-0 after:h-[2px] after:w-full after:scale-x-0 after:bg-gradient-to-r from-[#08C2FF] to-[#026B95] after:origin-center after:transition-transform after:duration-300 hover:after:scale-x-100">Pricing</a>
                        <a href="#about" class="relative transition text-gray-600 hover:text-[#026B95] after:absolute after:left-0 after:bottom-0 after:h-[2px] after:w-full after:scale-x-0 after:bg-gradient-to-r from-[#08C2FF] to-[#026B95] after:origin-center after:transition-transform after:duration-300 hover:after:scale-x-100">About</a>
                        <a href="#contact" class="relative transition text-gray-600 hover:text-[#026B95] after:absolute after:left-0 after:bottom-0 after:h-[2px] after:w-full after:scale-x-0 after:bg-gradient-to-r from-[#08C2FF] to-[#026B95] after:origin-center after:transition-transform after:duration-300 hover:after:scale-x-100">Contact</a>
                    </div>
                    <div class="flex items-center gap-4">
                        <a href="{{ route('login') }}" class="relative text-sm font-medium text-gray-600 transition hover:text-[#026B95] after:absolute after:left-0 after:bottom-0 after:h-[2px] after:w-full after:scale-x-0 after:bg-gradient-to-r from-[#08C2FF] to-[#026B95] after:origin-center after:transition-transform after:duration-300 hover:after:scale-x-100">Login</a>
                        <a href="{{ route('register') }}" class="px-6 py-2.5 rounded-full bg-gradient-to-r from-[#08C2FF] to-[#026B95] text-white text-sm font-semibold shadow-lg hover:shadow-xl transition-all duration-300">
                            Get Started
                        </a>
                    </div>
                </nav>
            </header>

            <main class="relative z-10 max-w-7xl mx-auto px-6 pb-24">
                <!-- Hero Section -->
                <section class="grid gap-16 lg:grid-cols-2 items-center py-20">
                    <div class="space-y-8">
                        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-gradient-to-r from-[#DFF6FF] to-[#F4FCFF] text-sm font-medium text-[#026B95]">
                            <span class="inline-block h-2 w-2 rounded-full bg-[#08C2FF]"></span>
                            Aplikasi Point of Sale (POS) Modern 2025
                        </div>
                        <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold text-gray-900 leading-tight">
                            Kelola Bisnis
                            <span class="bg-gradient-to-r from-[#08C2FF] to-[#026B95] bg-clip-text text-transparent">Lebih Mudah</span>
                        </h1>
                        <p class="text-xl text-gray-600 leading-relaxed">
                            Sistem Point of Sale (POS) digital terlengkap untuk membantu UMKM berkembang. Kelola stok, transaksi, dan laporan dalam satu platform yang mudah digunakan.
                        </p>
                        <div class="flex flex-wrap gap-4">
                            <a href="{{ route('register') }}" class="inline-flex items-center gap-3 px-8 py-4 rounded-full bg-gradient-to-r from-[#08C2FF] to-[#026B95] text-white font-semibold shadow-2xl shadow-[0_20px_45px_-12px_rgba(8,194,255,0.55)] hover:shadow-[0_25px_55px_-15px_rgba(2,107,149,0.6)] transition-all duration-300 hover:scale-105">
                                Mulai Gratis
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                </svg>
                            </a>
                            <a href="#features" class="inline-flex items-center gap-3 px-8 py-4 rounded-full border-2 border-[#08C2FF]/40 text-[#024665] font-semibold hover:border-[#08C2FF]/60 hover:bg-[#E3F7FF] transition-all duration-300">
                                Lihat Demo
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </a>
                        </div>
                        <div class="grid grid-cols-3 gap-8 pt-8 border-t border-gray-200">
                            <div>
                                <p class="text-3xl font-bold text-gray-900">1000+</p>
                                <p class="text-sm text-gray-600 mt-1">Pengguna Aktif</p>
                            </div>
                            <div>
                                <p class="text-3xl font-bold text-gray-900">99.9%</p>
                                <p class="text-sm text-gray-600 mt-1">Uptime</p>
                            </div>
                            <div>
                                <p class="text-3xl font-bold text-gray-900">4.9/5</p>
                                <p class="text-sm text-gray-600 mt-1">Rating</p>
                            </div>
                        </div>
                    </div>

                    <div class="relative">
                        <div class="absolute inset-0 bg-gradient-to-br from-[#08C2FF] to-[#026B95] rounded-3xl blur-3xl opacity-20"></div>
                        <div class="relative bg-white rounded-3xl shadow-2xl p-8 border border-gray-100">
                            <div class="space-y-6">
                                <!-- Mock Dashboard -->
                                <div class="flex items-center justify-between pb-4 border-b border-gray-200">
                                    <h3 class="text-lg font-semibold text-gray-900">Dashboard</h3>
                                    <div class="flex gap-2">
                                        <div class="w-3 h-3 rounded-full bg-red-400"></div>
                                        <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                                        <div class="w-3 h-3 rounded-full bg-green-400"></div>
                                    </div>
                                </div>
                                <div class="grid grid-cols-2 gap-4">
                                    <div class="p-4 rounded-2xl bg-gradient-to-br from-[#D6F3FF] to-[#EAF9FF]">
                                        <p class="text-sm text-[#026B95] font-medium">Penjualan Hari Ini</p>
                                        <p class="text-2xl font-bold text-[#024665] mt-2">Rp 2.5M</p>
                                        <p class="text-xs text-[#026B95] mt-1">+12.5% dari kemarin</p>
                                    </div>
                                    <div class="p-4 rounded-2xl bg-gradient-to-br from-[#C9EEFF] to-[#E6F7FF]">
                                        <p class="text-sm text-[#0892C8] font-medium">Total Transaksi</p>
                                        <p class="text-2xl font-bold text-[#024665] mt-2">145</p>
                                        <p class="text-xs text-[#0892C8] mt-1">+8.2% dari kemarin</p>
                                    </div>
                                </div>
                                <div class="p-5 rounded-2xl bg-gray-50">
                                    <p class="text-sm font-medium text-gray-700 mb-3">Produk Terlaris</p>
                                    <div class="space-y-3">
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center gap-3">
                                                <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-[#4AD8FF] to-[#08C2FF]"></div>
                                                <div>
                                                    <p class="text-sm font-medium text-gray-900">Scanner Barcode</p>
                                                    <p class="text-xs text-gray-500">120 unit terjual</p>
                                                </div>
                                            </div>
                                            <p class="text-sm font-semibold text-gray-900">Rp 450K</p>
                                        </div>
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center gap-3">
                                                <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-[#0277A5] to-[#024665]"></div>
                                                <div>
                                                    <p class="text-sm font-medium text-gray-900">Voucher Digital</p>
                                                    <p class="text-xs text-gray-500">310 transaksi</p>
                                                </div>
                                            </div>
                                            <p class="text-sm font-semibold text-gray-900">Rp 50K</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Features Section -->
                <section id="features" class="py-20">
                    <div class="text-center mb-16">
                        <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Fitur Lengkap untuk Bisnis Anda</h2>
                        <p class="text-xl text-gray-600 max-w-2xl mx-auto">Semua yang Anda butuhkan untuk mengelola bisnis dalam satu aplikasi</p>
                    </div>
                    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                        <div class="group p-8 rounded-3xl bg-white border border-gray-200 hover:border-[#08C2FF]/60 hover:shadow-2xl transition-all duration-300">
                            <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-[#08C2FF] to-[#026B95] flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Manajemen Produk</h3>
                            <p class="text-gray-600 leading-relaxed">Kelola produk dan stok dengan mudah. Update harga, kategori, dan varian produk secara real-time.</p>
                        </div>
                        <div class="group p-8 rounded-3xl bg-white border border-gray-200 hover:border-[#08C2FF]/60 hover:shadow-2xl transition-all duration-300">
                            <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-[#08C2FF] to-[#026B95] flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">POS Digital</h3>
                            <p class="text-gray-600 leading-relaxed">Proses transaksi lebih cepat dengan antarmuka Point of Sale (POS) yang intuitif dan responsif.</p>
                        </div>
                        <div class="group p-8 rounded-3xl bg-white border border-gray-200 hover:border-[#08C2FF]/60 hover:shadow-2xl transition-all duration-300">
                            <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-[#08C2FF] to-[#026B95] flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Laporan Penjualan</h3>
                            <p class="text-gray-600 leading-relaxed">Analisis performa bisnis dengan laporan lengkap dan visualisasi data yang jelas.</p>
                        </div>
                        <div class="group p-8 rounded-3xl bg-white border border-gray-200 hover:border-[#08C2FF]/60 hover:shadow-2xl transition-all duration-300">
                            <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-[#08C2FF] to-[#026B95] flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Multi Pembayaran</h3>
                            <p class="text-gray-600 leading-relaxed">Terima berbagai metode pembayaran: cash, transfer, e-wallet, dan QRIS.</p>
                        </div>
                        <div class="group p-8 rounded-3xl bg-white border border-gray-200 hover:border-[#08C2FF]/60 hover:shadow-2xl transition-all duration-300">
                            <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-[#08C2FF] to-[#026B95] flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Manajemen Staff</h3>
                            <p class="text-gray-600 leading-relaxed">Kelola tim dengan sistem role dan permission. Pantau kinerja setiap staff.</p>
                        </div>
                        <div class="group p-8 rounded-3xl bg-white border border-gray-200 hover:border-[#08C2FF]/60 hover:shadow-2xl transition-all duration-300">
                            <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-[#08C2FF] to-[#026B95] flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Cloud Storage</h3>
                            <p class="text-gray-600 leading-relaxed">Data tersimpan aman di cloud. Akses dari mana saja, kapan saja.</p>
                        </div>
                    </div>
                </section>

                <!-- Pricing Section -->
                <section id="pricing" class="py-20">
                    <div class="text-center mb-16">
                        <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Harga Transparan & Terjangkau</h2>
                        <p class="text-xl text-gray-600 max-w-2xl mx-auto">Pilih paket yang sesuai dengan kebutuhan bisnis Anda</p>
                    </div>
                    <div class="grid gap-8 md:grid-cols-3">
                        <div class="p-8 rounded-3xl bg-white border-2 border-gray-200 hover:border-blue-300 transition-all duration-300">
                            <h3 class="text-2xl font-bold text-gray-900 mb-2">Starter</h3>
                            <p class="text-gray-600 mb-6">Untuk bisnis yang baru mulai</p>
                            <div class="mb-6">
                                <span class="text-5xl font-bold text-gray-900">Gratis</span>
                            </div>
                            <ul class="space-y-4 mb-8">
                                <li class="flex items-start gap-3">
                                    <svg class="h-6 w-6 text-green-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="text-gray-600">50 Produk</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="h-6 w-6 text-green-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="text-gray-600">100 Transaksi/bulan</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="h-6 w-6 text-green-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="text-gray-600">1 User</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="h-6 w-6 text-green-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="text-gray-600">Laporan Basic</span>
                                </li>
                            </ul>
                            <a href="{{ route('register') }}" class="block w-full text-center px-6 py-3 rounded-full border-2 border-gray-300 text-gray-700 font-semibold hover:border-gray-400 hover:bg-gray-50 transition">
                                Mulai Gratis
                            </a>
                        </div>
                        <div class="p-8 rounded-3xl bg-gradient-to-br from-[#08C2FF] via-[#0794D6] to-[#026B95] text-white relative transform hover:scale-105 transition-all duration-300 shadow-2xl">
                            <div class="absolute -top-4 left-1/2 transform -translate-x-1/2 px-4 py-1 rounded-full bg-yellow-400 text-yellow-900 text-sm font-bold">
                                POPULER
                            </div>
                            <h3 class="text-2xl font-bold mb-2">Professional</h3>
                            <p class="text-blue-100 mb-6">Untuk bisnis yang berkembang</p>
                            <div class="mb-6">
                                <span class="text-5xl font-bold">Rp 199K</span>
                                <span class="text-blue-100">/bulan</span>
                            </div>
                            <ul class="space-y-4 mb-8">
                                <li class="flex items-start gap-3">
                                    <svg class="h-6 w-6 text-white flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Unlimited Produk</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="h-6 w-6 text-white flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Unlimited Transaksi</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="h-6 w-6 text-white flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>5 User</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="h-6 w-6 text-white flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Laporan Lengkap</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="h-6 w-6 text-white flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Priority Support</span>
                                </li>
                            </ul>
                            <a href="{{ route('register') }}" class="block w-full text-center px-6 py-3 rounded-full bg-white text-[#026B95] font-semibold hover:bg-[#E3F7FF] transition">
                                Pilih Paket Ini
                            </a>
                        </div>
                        <div class="p-8 rounded-3xl bg-white border-2 border-gray-200 hover:border-blue-300 transition-all duration-300">
                            <h3 class="text-2xl font-bold text-gray-900 mb-2">Enterprise</h3>
                            <p class="text-gray-600 mb-6">Untuk bisnis skala besar</p>
                            <div class="mb-6">
                                <span class="text-5xl font-bold text-gray-900">Custom</span>
                            </div>
                            <ul class="space-y-4 mb-8">
                                <li class="flex items-start gap-3">
                                    <svg class="h-6 w-6 text-green-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="text-gray-600">Semua Fitur Pro</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="h-6 w-6 text-green-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="text-gray-600">Unlimited User</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="h-6 w-6 text-green-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="text-gray-600">Custom Integration</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="h-6 w-6 text-green-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="text-gray-600">Dedicated Support</span>
                                </li>
                            </ul>
                            <a href="#contact" class="block w-full text-center px-6 py-3 rounded-full border-2 border-gray-300 text-gray-700 font-semibold hover:border-gray-400 hover:bg-gray-50 transition">
                                Hubungi Kami
                            </a>
                        </div>
                    </div>
                </section>

                <!-- CTA Section -->
                <section id="contact" class="py-20">
                    <div class="rounded-3xl bg-gradient-to-br from-[#08C2FF] via-[#0B9FD6] to-[#026B95] p-12 md:p-16 text-center text-white relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-br from-white/10 via-transparent to-[#012B3C]/20 backdrop-blur-sm"></div>
                        <div class="relative z-10">
                            <h2 class="text-4xl md:text-5xl font-bold mb-6">Siap Tingkatkan Bisnis Anda?</h2>
                            <p class="text-xl text-blue-100 max-w-2xl mx-auto mb-10">
                                Bergabunglah dengan ribuan pemilik bisnis yang sudah mempercayai POS App untuk mengelola toko mereka
                            </p>
                            <div class="flex flex-wrap gap-4 justify-center">
                                <a href="{{ route('register') }}" class="inline-flex items-center gap-3 px-8 py-4 rounded-full bg-white text-[#026B95] font-semibold shadow-2xl hover:shadow-[0_20px_45px_-12px_rgba(8,194,255,0.55)] transition-all duration-300 hover:scale-105">
                                    Coba Gratis Sekarang
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                    </svg>
                                </a>
                                <a href="https://wa.me/6281234567890" class="inline-flex items-center gap-3 px-8 py-4 rounded-full border-2 border-white text-white font-semibold hover:bg-white hover:text-[#026B95] transition-all duration-300">
                                    Hubungi Sales
                                </a>
                            </div>
                            <div class="mt-12 grid gap-4 sm:grid-cols-3">
                                <div class="rounded-2xl bg-white/10 p-4 backdrop-blur-sm">
                                    <div class="flex items-center gap-3">
                                        <span class="inline-flex h-10 w-10 items-center justify-center rounded-2xl bg-white/20">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="h-5 w-5 text-white">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 13l4 4L19 7" />
                                            </svg>
                                        </span>
                                        <div class="text-left">
                                            <p class="text-sm font-semibold text-white">Onboarding Gratis</p>
                                            <p class="text-xs text-blue-100">Pelatihan lengkap untuk tim Anda tanpa biaya tambahan.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="rounded-2xl bg-white/10 p-4 backdrop-blur-sm">
                                    <div class="flex items-center gap-3">
                                        <span class="inline-flex h-10 w-10 items-center justify-center rounded-2xl bg-white/20">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="h-5 w-5 text-white">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                            </svg>
                                        </span>
                                        <div class="text-left">
                                            <p class="text-sm font-semibold text-white">Integrasi Marketplace</p>
                                            <p class="text-xs text-blue-100">Sinkronkan stok dengan toko online dan POS secara instan.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="rounded-2xl bg-white/10 p-4 backdrop-blur-sm">
                                    <div class="flex items-center gap-3">
                                        <span class="inline-flex h-10 w-10 items-center justify-center rounded-2xl bg-white/20">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="h-5 w-5 text-white">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6v6l3 3" />
                                                <circle cx="12" cy="12" r="9" stroke-width="1.5" />
                                            </svg>
                                        </span>
                                        <div class="text-left">
                                            <p class="text-sm font-semibold text-white">Support 24/7</p>
                                            <p class="text-xs text-blue-100">Tim ahli siap membantu kapan saja melalui chat & telepon.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>

            <footer class="relative z-10 mt-10">
                <div class="absolute inset-0 bg-gradient-to-br from-[#011F2F] via-[#013550] to-[#021827]"></div>
                <div class="absolute -top-20 left-1/2 h-40 w-40 -translate-x-1/2 rounded-full bg-[#08C2FF] opacity-30 blur-3xl"></div>
                <div class="relative max-w-7xl mx-auto px-6 py-16 text-white">
                    <div class="grid gap-12 md:grid-cols-2 lg:grid-cols-4">
                        <div class="space-y-4">
                            <div class="flex items-center gap-3">
                                <div class="h-12 w-12 flex items-center justify-center rounded-2xl bg-gradient-to-br from-[#08C2FF] to-[#024665] text-white shadow-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="h-7 w-7">
                                        <path d="M8.25 4.75h7.5v3.5h-7.5z" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M6 8.75h12a1.5 1.5 0 011.5 1.5V18H4.5v-7.75a1.5 1.5 0 011.5-1.5z" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M8.75 13h4m-4 3h6.5M15.5 13h1.5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <span class="text-2xl font-semibold">POS App</span>
                            </div>
                            <p class="text-blue-100 leading-relaxed">Platform Point of Sale (POS) modern yang membantu UMKM mengelola stok, transaksi, dan laporan dalam satu dashboard terpadu.</p>
                            <div class="flex gap-4">
                                <a href="https://www.instagram.com" class="inline-flex h-10 w-10 items-center justify-center rounded-full border border-white/30 bg-white/10 hover:bg-white/20 transition" aria-label="Instagram">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="h-5 w-5"><rect x="3" y="3" width="18" height="18" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
                                </a>
                                <a href="https://www.facebook.com" class="inline-flex h-10 w-10 items-center justify-center rounded-full border border-white/30 bg-white/10 hover:bg-white/20 transition" aria-label="Facebook">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5"><path d="M13.5 10.5H15V8h-1.5c-1.24 0-2.25 1-2.25 2.25V12H9v2.5h2.25V21H13.5v-6.5H15l.5-2.5h-2z"/></svg>
                                </a>
                                <a href="https://www.linkedin.com" class="inline-flex h-10 w-10 items-center justify-center rounded-full border border-white/30 bg-white/10 hover:bg-white/20 transition" aria-label="LinkedIn">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5"><path d="M4.98 3.5C4.98 4.88 3.9 6 2.5 6S0 4.88 0 3.5 1.08 1 2.48 1 4.98 2.12 4.98 3.5zM.5 8h4V21h-4zM8.5 8h3.8v1.78h.05c.53-1 1.83-2.05 3.77-2.05 4.03 0 4.77 2.65 4.77 6.08V21h-4v-5.8c0-1.38-.03-3.16-1.93-3.16-1.94 0-2.24 1.51-2.24 3.05V21h-4z"/></svg>
                                </a>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold mb-4">Produk</h3>
                            <ul class="space-y-3 text-blue-100">
                                <li><a href="#features" class="hover:text-white transition">Fitur Unggulan</a></li>
                                <li><a href="#pricing" class="hover:text-white transition">Paket Harga</a></li>
                                <li><a href="#contact" class="hover:text-white transition">Demo Langsung</a></li>
                                <li><a href="{{ route('login') }}" class="hover:text-white transition">Masuk Dashboard</a></li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold mb-4">Perusahaan</h3>
                            <ul class="space-y-3 text-blue-100">
                                <li><a href="#about" class="hover:text-white transition">Tentang Kami</a></li>
                                <li><a href="mailto:halo@posapp.id" class="hover:text-white transition">Karier</a></li>
                                <li><a href="https://wa.me/6281234567890" class="hover:text-white transition">Hubungi Sales</a></li>
                                <li><a href="#" class="hover:text-white transition">Kebijakan Privasi</a></li>
                            </ul>
                        </div>
                        <div class="space-y-4">
                            <h3 class="text-lg font-semibold">Dapatkan Update</h3>
                            <p class="text-blue-100">Tips, insight, dan info fitur baru langsung ke email Anda.</p>
                            <form class="flex flex-col sm:flex-row gap-3">
                                <label for="footer-email" class="sr-only">Email</label>
                                <input id="footer-email" type="email" placeholder="Email Anda" class="w-full rounded-full border-0 bg-white/10 px-5 py-3 text-white placeholder:text-blue-200 focus:outline-none focus:ring-2 focus:ring-[#08C2FF]/60" required>
                                <button type="submit" class="inline-flex items-center justify-center rounded-full bg-gradient-to-r from-[#08C2FF] to-[#026B95] px-6 py-3 text-sm font-semibold text-white shadow-lg hover:shadow-[0_20px_35px_-15px_rgba(8,194,255,0.6)] transition">Langganan</button>
                            </form>
                            <div class="space-y-2 text-sm text-blue-200">
                                <p class="font-semibold">Kontak</p>
                                <p>halo@posapp.id</p>
                                <p>+62 812-3456-7890</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-12 border-t border-white/10 pt-8 text-sm text-blue-200 flex flex-col md:flex-row items-center justify-between gap-4">
                        <p>© {{ date('Y') }} POS App.</p>
                        <div class="flex items-center gap-6">
                            <a href="#" class="hover:text-white transition">Ketentuan Layanan</a>
                            <a href="#" class="hover:text-white transition">Kebijakan Data</a>
                            <a href="mailto:support@posapp.id" class="inline-flex items-center gap-2 hover:text-white transition">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="h-4 w-4"><path d="M22 12h-2"/><path d="M2 12h2"/><path d="M12 2v2"/><path d="M12 20v2"/><path d="M4.93 4.93l1.41 1.41"/><path d="M17.66 17.66l1.41 1.41"/><path d="M19.07 4.93l-1.41 1.41"/><path d="M6.34 17.66l-1.41 1.41"/><circle cx="12" cy="12" r="5"/></svg>
                                Dukungan</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>
