# Sistem Perpustakaan (UTS IS63)

Aplikasi web manajemen perpustakaan berbasis **Laravel 13** dengan fitur CRUD kategori, buku, dan peminjaman.

## Fitur

- Login & logout admin
- Dashboard statistik (total buku, kategori, stok, peminjaman)
- Manajemen kategori buku
- Manajemen data buku (judul, penulis, penerbit, stok)
- Pencatatan peminjaman dengan pengurangan stok otomatis
- Pengembalian buku dengan penambahan stok otomatis
- Filter & pencarian data

## Persyaratan

- PHP 8.3+
- Composer
- SQLite (default) atau MySQL

## Instalasi

```bash
# 1. Install dependensi
composer install

# 2. Buat file environment
copy .env.example .env

# 3. Generate application key
php artisan key:generate

# 4. Buat database SQLite (jika pakai SQLite)
type nul > database\database.sqlite

# 5. Jalankan migrasi & seeder
php artisan migrate --seed
```

## Menjalankan Aplikasi

```bash
php artisan serve
```

Buka browser: **http://127.0.0.1:8000**

### Akun Login Default

| Email | Password |
|-------|----------|
| admin@perpustakaan.com | password |

## Struktur Halaman

| Route | Keterangan |
|-------|------------|
| `/login` | Halaman login |
| `/dashboard` | Dashboard statistik |
| `/kategoris` | CRUD kategori buku |
| `/bukus` | CRUD data buku |
| `/peminjamans` | CRUD peminjaman |

## Konfigurasi MySQL (Laragon)

Ubah file `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=perpustakaan
DB_USERNAME=root
DB_PASSWORD=
```

Buat database `perpustakaan` di phpMyAdmin, lalu jalankan:

```bash
php artisan migrate --seed
```
