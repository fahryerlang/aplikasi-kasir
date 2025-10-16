# 🔧 Cara Mengaktifkan Login dengan Google

Saat ini fitur **Login dengan Google** belum aktif karena memerlukan konfigurasi API dari Google Cloud Console.

## ⚠️ Status Saat Ini
- ❌ Login Google: **BELUM AKTIF** (perlu konfigurasi)
- ✅ Login Email/Password: **AKTIF**
- ✅ Register Manual: **AKTIF**

## 📋 Cara Mengaktifkan (Opsional)

### Langkah 1: Buat Project Google Cloud

1. Buka https://console.cloud.google.com/
2. Klik **"New Project"**
3. Nama project: `Aplikasi Kasir` → **CREATE**

### Langkah 2: Setup OAuth Consent Screen

1. Menu **APIs & Services** → **OAuth consent screen**
2. Pilih **External** → **CREATE**
3. Isi data:
   - App name: `Aplikasi Kasir`
   - User support email: (email Anda)
   - Developer contact: (email Anda)
4. Klik **SAVE AND CONTINUE** terus sampai selesai

### Langkah 3: Buat Credentials

1. Menu **APIs & Services** → **Credentials**
2. Klik **+ CREATE CREDENTIALS** → **OAuth client ID**
3. Pilih **Web application**
4. Nama: `Aplikasi Kasir Web`
5. **Authorized redirect URIs**, klik **+ ADD URI**:
   ```
   http://localhost:8000/auth/google/callback
   http://127.0.0.1:8000/auth/google/callback
   ```
6. Klik **CREATE**
7. **COPY** Client ID dan Client Secret yang muncul

### Langkah 4: Update File .env

Buka file `.env` di folder project, lalu ubah:

```env
GOOGLE_CLIENT_ID=paste_client_id_disini
GOOGLE_CLIENT_SECRET=paste_client_secret_disini
GOOGLE_REDIRECT_URL=http://localhost:8000/auth/google/callback
```

### Langkah 5: Clear Cache

Jalankan di terminal:
```bash
php artisan config:clear
```

### Langkah 6: Test

1. Buka http://localhost:8000/login
2. Klik tombol **Google**
3. Pilih akun Google
4. Selesai!

---

## 🎯 Untuk Development (Tanpa Google OAuth)

Anda bisa langsung menggunakan akun default yang sudah dibuat:

### Login Sebagai Admin:
- Email: `admin@test.com`
- Password: `password`

### Login Sebagai Kasir:
- Email: `kasir@test.com`
- Password: `password`

### Login Sebagai Pembeli:
- Email: `pembeli@test.com`
- Password: `password`

**ATAU** buat akun baru via halaman Register!

---

## 💡 Catatan Penting

- **Tidak wajib** mengaktifkan Google OAuth untuk development
- Login dengan email/password **sudah berfungsi penuh**
- Google OAuth hanya untuk kemudahan user (opsional)
- Untuk production, sebaiknya aktifkan Google OAuth

---

## ❓ Troubleshooting

**Q: Error 400 dari Google?**
A: Kredensial belum dikonfigurasi atau salah. Ikuti langkah di atas dengan teliti.

**Q: Redirect URI mismatch?**
A: Pastikan URI di Google Console sama persis dengan di .env (termasuk http/https)

**Q: Tidak mau ribet setup Google?**
A: Tidak masalah! Gunakan login email/password saja. Fitur aplikasi tetap jalan 100%.

---

**Dibuat untuk Aplikasi Kasir v1.0**
