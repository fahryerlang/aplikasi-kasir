# Google OAuth Setup Guide

Panduan lengkap untuk mengaktifkan fitur Login & Register dengan Google.

## 📋 Langkah-langkah Setup

### 1. Buat Project di Google Cloud Console

1. Buka [Google Cloud Console](https://console.cloud.google.com/)
2. Klik **Select a project** → **New Project**
3. Masukkan nama project (contoh: "Aplikasi Kasir")
4. Klik **Create**

### 2. Aktifkan Google+ API

1. Di sidebar, pilih **APIs & Services** → **Library**
2. Cari "Google+ API"
3. Klik **Enable**

### 3. Buat OAuth 2.0 Credentials

1. Di sidebar, pilih **APIs & Services** → **Credentials**
2. Klik **+ CREATE CREDENTIALS** → **OAuth client ID**
3. Jika diminta, konfigurasi OAuth consent screen terlebih dahulu:
   - User Type: **External**
   - App name: Nama aplikasi Anda
   - User support email: Email Anda
   - Developer contact: Email Anda
   - Klik **Save and Continue**
   - Pada Scopes, klik **Add or Remove Scopes**
   - Pilih: `userinfo.email`, `userinfo.profile`, `openid`
   - Klik **Save and Continue**
   - Tambahkan test users jika perlu
   - Klik **Save and Continue**

4. Kembali ke Credentials → **+ CREATE CREDENTIALS** → **OAuth client ID**
   - Application type: **Web application**
   - Name: "Aplikasi Kasir Web Client"
   - Authorized JavaScript origins:
     ```
     http://localhost:8000
     http://127.0.0.1:8000
     ```
   - Authorized redirect URIs:
     ```
     http://localhost:8000/auth/google/callback
     http://127.0.0.1:8000/auth/google/callback
     ```
   - Klik **Create**

5. Copy **Client ID** dan **Client Secret** yang muncul

### 4. Update File .env

Buka file `.env` di project Laravel Anda dan update nilai berikut:

```env
GOOGLE_CLIENT_ID=paste_your_client_id_here
GOOGLE_CLIENT_SECRET=paste_your_client_secret_here
GOOGLE_REDIRECT_URL=http://localhost:8000/auth/google/callback
```

### 5. Clear Cache Laravel

Jalankan command berikut di terminal:

```bash
php artisan config:clear
php artisan cache:clear
```

### 6. Testing

1. Akses halaman login: `http://localhost:8000/login`
2. Klik tombol **Google**
3. Pilih akun Google Anda
4. Izinkan aplikasi mengakses data
5. Anda akan diarahkan ke dashboard

## ✅ Fitur yang Sudah Terimplementasi

- ✅ Login dengan Google (semua user)
- ✅ Register otomatis jika email belum terdaftar
- ✅ User baru otomatis mendapat role "pembeli"
- ✅ Link Google account ke email yang sudah ada
- ✅ Password tidak diperlukan untuk Google login

## 🔒 Keamanan

- Password dibuat nullable untuk user yang login via Google
- google_id disimpan untuk identifikasi user Google
- Role "pembeli" otomatis diberikan untuk keamanan
- Validasi email dan token dilakukan oleh Google

## 📝 Catatan Penting

1. **Development Mode**: Saat development, Anda perlu menambahkan test users di Google Cloud Console
2. **Production**: Untuk production, submit aplikasi untuk verification di Google
3. **HTTPS**: Untuk production, gunakan HTTPS redirect URL
4. **Multiple Domains**: Tambahkan semua domain Anda di Authorized redirect URIs

## 🐛 Troubleshooting

### Error: "redirect_uri_mismatch"
- Pastikan redirect URI di .env sama persis dengan yang di Google Console
- Jangan lupa trailing slash atau protokol (http/https)

### Error: "Access blocked: This app's request is invalid"
- Cek apakah Google+ API sudah diaktifkan
- Pastikan OAuth consent screen sudah dikonfigurasi

### Error: "Invalid credentials"
- Cek kembali Client ID dan Client Secret
- Jalankan `php artisan config:clear`

## 📚 Resources

- [Google OAuth Documentation](https://developers.google.com/identity/protocols/oauth2)
- [Laravel Socialite Documentation](https://laravel.com/docs/socialite)
- [Google Cloud Console](https://console.cloud.google.com/)

## 🎯 Next Steps

Setelah Google OAuth berhasil, Anda bisa:
1. Tambahkan provider lain (Facebook, GitHub, dll)
2. Customize halaman callback
3. Tambahkan avatar user dari Google
4. Implementasi email verification

---

**Dibuat untuk Aplikasi Kasir**
Versi: 1.0.0
