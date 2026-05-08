# Bl#gLite

Aplikasi mini blog sederhana CRUD dengan framwork Laravel.

## Fitur

- Register, login, logout
- CRUD 
- Tampilkan daftar post + author
- Search berdasarkan judul

## Teknologi

- Laravel
- MySQL
- Vite

## Cara Menjalankan (Local)

1. Install dependency PHP

```bash
composer install
```

2. Install dependency frontend

```bash
npm install
```

3. Copy file env

```bash
copy .env.example .env
```

4. Generate app key

```bash
php artisan key:generate
```

5. Atur database di .env

```
DB_DATABASE=notesapp
DB_USERNAME=root
DB_PASSWORD=
```

6. Migrasi database

```bash
php artisan migrate
```

7. Jalankan Vite

```bash
npm run dev
```

8. Jalankan server Laravel

```bash
php artisan serve
```

Buka di browser: http://127.0.0.1:8000

## Catatan Tambahan
1. Pastikan sudah membuat database MySQL terlebih dahulu sebelum menjalankan migration.
2. Sesuaikan nama database pada file .env dengan database lokal yang dibuat.
3. Disarankan menggunakan terminal Command Prompt (CMD) atau terminal bawaan Laragon saat menjalankan command seperti:
   -npm install
   -npm run dev
   Hindari menggunakan PowerShell apabila muncul error execution policy pada npm.


