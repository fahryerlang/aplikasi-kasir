# 🔐 Setup Clerk Authentication

Panduan lengkap mengintegrasikan Clerk untuk authentication dengan Google, GitHub, dan social login lainnya.

## 🎯 Kenapa Clerk?

- ✅ Setup lebih mudah dari Google OAuth langsung
- ✅ Support multiple providers (Google, GitHub, Facebook, dll)
- ✅ UI components yang sudah jadi
- ✅ Session management otomatis
- ✅ Dashboard admin yang powerful
- ✅ Free tier yang generous

## 📋 Langkah Setup

### 1. Buat Akun Clerk

1. Buka https://clerk.com/
2. Klik **"Sign Up"** atau **"Get Started Free"**
3. Daftar dengan email atau GitHub
4. Verifikasi email Anda

### 2. Buat Application Baru

1. Setelah login, klik **"Create Application"**
2. Nama application: `Aplikasi Kasir`
3. Pilih **sign-in options** yang Anda inginkan:
   - ✅ Email
   - ✅ Google
   - ✅ GitHub (opsional)
4. Klik **"Create Application"**

### 3. Dapatkan API Keys

Setelah application dibuat, Anda akan melihat dashboard. 

1. Copy **Publishable Key** (dimulai dengan `pk_test_...`)
2. Copy **Secret Key** (dimulai dengan `sk_test_...`)

### 4. Update File .env

Tambahkan ke file `.env`:

```env
# Clerk Authentication
CLERK_PUBLISHABLE_KEY=pk_test_your_publishable_key_here
CLERK_SECRET_KEY=sk_test_your_secret_key_here
```

### 5. Update vite.config.js

Buka `vite.config.js` dan tambahkan environment variables:

```javascript
import { defineConfig, loadEnv } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig(({ mode }) => {
    const env = loadEnv(mode, process.cwd(), '');
    
    return {
        plugins: [
            laravel({
                input: [
                    'resources/css/app.css',
                    'resources/js/app.js',
                ],
                refresh: true,
            }),
        ],
        define: {
            'process.env.CLERK_PUBLISHABLE_KEY': JSON.stringify(env.CLERK_PUBLISHABLE_KEY),
        },
    };
});
```

### 6. Build Assets

Jalankan command berikut:

```bash
npm run build
```

Atau untuk development:

```bash
npm run dev
```

### 7. Clear Cache Laravel

```bash
php artisan config:clear
php artisan cache:clear
```

### 8. Test Login

1. Buka http://localhost:8000/login
2. Klik tombol **"Sign in with Google"** atau provider lain
3. Login dengan akun Google/GitHub Anda
4. Selesai! 🎉

## 🎨 Kustomisasi Clerk

### Tampilan & Theme

1. Di Clerk Dashboard, buka **Customization**
2. Ubah theme, logo, warna sesuai brand Anda
3. Preview langsung di dashboard

### Social Providers Tambahan

1. Di dashboard, klik **User & Authentication** → **Social Connections**
2. Enable provider yang Anda mau (Facebook, Twitter, LinkedIn, dll)
3. Follow instruksi untuk setiap provider

### Email Templates

1. Klik **Emails & SMS**
2. Customize template email verification, password reset, dll

## 🔒 Security Settings

Di Clerk Dashboard → **Settings** → **Security**:

- ✅ Enable **Two-factor authentication** (recommended)
- ✅ Set **Session lifetime**
- ✅ Configure **allowed redirect URLs**

## 📱 Development vs Production

### Development (localhost)
- Gunakan test keys: `pk_test_...` dan `sk_test_...`
- Allowed redirect: `http://localhost:8000/*`

### Production
- Switch ke production keys: `pk_live_...` dan `sk_live_...`
- Set production domain di allowed redirects
- Enable additional security features

## 💰 Pricing

**Free Tier includes:**
- Up to 10,000 monthly active users
- Unlimited social connections
- Email support
- All essential features

**Pro Tier:**
- Custom pricing for larger apps
- Advanced features
- Priority support

## 🎯 Kelebihan Clerk vs Manual OAuth

| Fitur | Clerk | Manual OAuth |
|-------|-------|--------------|
| Setup Time | 5-10 menit | 30-60 menit |
| UI Components | ✅ Built-in | ❌ Build sendiri |
| Multiple Providers | ✅ Easy | ❌ Setup per provider |
| Session Management | ✅ Automatic | ❌ Manual |
| User Management | ✅ Dashboard | ❌ Build sendiri |
| Security | ✅ Enterprise-grade | ⚠️ Tergantung implementasi |

## 🐛 Troubleshooting

### Error: "Publishable key not found"
- Pastikan `.env` sudah diupdate dengan key yang benar
- Run `npm run build` atau `npm run dev`
- Refresh browser

### Error: "Invalid domain"
- Di Clerk Dashboard → Settings → Domains
- Tambahkan `localhost:8000` ke allowed domains

### Social login tidak muncul
- Cek di Clerk Dashboard apakah provider sudah enabled
- Beberapa provider butuh approval (mis: Facebook)

## 📚 Resources

- **Clerk Documentation:** https://clerk.com/docs
- **React/Next.js Guide:** https://clerk.com/docs/quickstarts/nextjs
- **Dashboard:** https://dashboard.clerk.com/
- **Community:** https://discord.com/invite/clerk

## ✨ Next Steps

Setelah Clerk tersetup:

1. ✅ Customize user profile fields
2. ✅ Setup webhooks untuk sync ke database Laravel
3. ✅ Add user roles & permissions
4. ✅ Configure email notifications
5. ✅ Setup organization/team features (jika perlu)

---

**Catatan:** Clerk sangat cocok untuk aplikasi modern dengan setup cepat. Untuk aplikasi yang butuh kontrol penuh atas auth flow, pertimbangkan manual OAuth atau Laravel Passport.

---

**Dibuat untuk Aplikasi Kasir**
**Terakhir diupdate:** 16 Oktober 2025
