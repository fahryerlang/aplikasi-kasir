# 🛒 Aplikasi Kasir (POS System)

Aplikasi Point of Sale (Kasir) modern berbasis Laravel dengan fitur lengkap untuk mengelola transaksi, produk, dan kategori.

## ✨ Fitur Utama

- 🔐 **Multi-role Authentication** (Admin, Kasir, Pembeli)
- 👤 **Login dengan Email/Password**
- 🔑 **Google OAuth Login** (Opsional)
- 📦 **Manajemen Produk & Kategori**
- 🛍️ **Sistem Order/Transaksi**
- 💳 **Dashboard Analytics**
- 🎨 **Modern UI dengan Tailwind CSS**
- 📱 **Responsive Design**

## 🚀 Quick Start

### 1. Clone Repository

```bash
git clone https://github.com/fahryerlang/aplikasi-kasir.git
cd aplikasi-kasir
```

### 2. Install Dependencies

```bash
composer install
npm install
```

### 3. Environment Setup

```bash
cp .env.example .env
php artisan key:generate
```

Update `.env` dengan konfigurasi database Anda:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_kasir
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Database Setup

```bash
php artisan migrate --seed
```

### 5. Run Application

```bash
# Terminal 1: Laravel Server
php artisan serve

# Terminal 2: Vite Dev Server (opsional untuk development)
npm run dev
```

Buka browser: **http://localhost:8000**

## 👥 Akun Testing

Setelah menjalankan seeder, gunakan akun berikut untuk login:

| Role | Email | Password |
|------|-------|----------|
| **Admin** | admin@test.com | password |
| **Kasir** | kasir@test.com | password |
| **Pembeli** | pembeli@test.com | password |

## 📚 Dokumentasi

- **[Cara Aktifkan Google Login](CARA_AKTIFKAN_GOOGLE_LOGIN.md)** - Panduan setup Google OAuth (opsional)
- **[Perbaikan Error Google](PERBAIKAN_ERROR_GOOGLE.md)** - Troubleshooting error 400
- **[Google OAuth Setup Guide](GOOGLE_OAUTH_SETUP.md)** - Panduan lengkap OAuth

**Visual Guide:** http://localhost:8000/google-setup

## 🔧 Teknologi

- **Backend:** Laravel 10.x
- **Frontend:** Blade Templates + Tailwind CSS
- **Database:** MySQL
- **Authentication:** Laravel Breeze + Socialite
- **Package Manager:** Composer + NPM

## 📂 Struktur Database

### Tables:
- `users` - Data pengguna (admin, kasir, pembeli)
- `categories` - Kategori produk
- `products` - Data produk
- `orders` - Transaksi/pesanan
- `order_product` - Detail item per order (pivot table)

### Roles:
- `admin` - Full access ke semua fitur
- `petugas_kasir` - Akses kasir dan transaksi
- `pembeli` - Akses sebagai customer

## 🎨 Fitur UI

- ✅ Modern gradient design (Blue → Purple → Pink)
- ✅ Split-screen login/register pages
- ✅ Glassmorphism effects
- ✅ Floating animations
- ✅ Responsive layout
- ✅ Error handling dengan UI yang jelas

## 🔐 Google OAuth Setup (Opsional)

Untuk mengaktifkan login dengan Google:

1. Buat project di [Google Cloud Console](https://console.cloud.google.com/)
2. Setup OAuth consent screen
3. Buat OAuth 2.0 credentials
4. Update file `.env`:
   ```env
   GOOGLE_CLIENT_ID=your_client_id
   GOOGLE_CLIENT_SECRET=your_client_secret
   GOOGLE_REDIRECT_URL=http://localhost:8000/auth/google/callback
   ```
5. Clear cache: `php artisan config:clear`

**Detail lengkap:** Lihat file `CARA_AKTIFKAN_GOOGLE_LOGIN.md`

## 🐛 Troubleshooting

### Error 400 dari Google OAuth
**Penyebab:** Kredensial belum dikonfigurasi atau salah

**Solusi:** 
- Login menggunakan email/password (sudah berfungsi 100%)
- Atau setup Google OAuth mengikuti panduan di `CARA_AKTIFKAN_GOOGLE_LOGIN.md`

### Migration Error
```bash
php artisan migrate:fresh --seed
```

### Cache Issues
```bash
php artisan config:clear
php artisan cache:clear
php artisan route:clear
```

## 📝 Development

### Run Tests
```bash
php artisan test
```

### Build for Production
```bash
npm run build
php artisan optimize
```

## 🤝 Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

## 📄 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## 👨‍💻 Developer

**Fahry Erlangga**
- GitHub: [@fahryerlang](https://github.com/fahryerlang)

---

**Version:** 1.0.1  
**Last Updated:** October 16, 2025
