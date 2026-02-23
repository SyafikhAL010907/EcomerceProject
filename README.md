# EcomerceProject (ROG Indonesia)

Ini adalah platform E-Commerce profesional yang dibangun untuk ROG Indonesia, menyediakan katalog produk seperti Laptop PC/Komputer, dan Handphone Gaming.

## Tech Stack

- **Framework:** Laravel 11
- **Language:** PHP 8.2
- **Database:** MySQL
- **Frontend Tooling:** Vite (Tailwind / Bootstrap css assets)
- **Deployment:** Ready for Vercel

## Panduan Instalasi Lokal

Ikuti langkah-langkah di bawah ini untuk menjalankan proyek ini di mesin lokal Anda:

### 1. Kloning Repositori
```bash
git clone https://github.com/SyafikhAL010907/EcomerceProject.git
cd EcomerceProject
```

### 2. Instal Dependensi PHP dan Node.js
```bash
composer install
npm install
```

### 3. Konfigurasi Environment Setup
Salin file `.env.example` menjadi `.env`.
```bash
cp .env.example .env
```
Buka file `.env` kamu dan pastikan konfigurasi database sudah sesuai, contoh:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=uskecomerce1
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Generate Application Key
```bash
php artisan key:generate
```

### 5. Bangun Aset Frontend (Vite)
```bash
npm run build
```
*(Atau gunakan `npm run dev` jika ingin mode hot-reload saat masa development)*

### 6. Jalankan Server Lokal
```bash
php artisan serve
```

Aplikasi bisa diakses melalui browser di alamat: `http://127.0.0.1:8000`
