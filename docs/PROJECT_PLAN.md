# NotesApp

## Deskripsi Project 

NotesApp adalah aplikasi catatan sederhana berbasis Laravel. User bisa membuat, melihat, mengedit, dan menghapus catatan.

Fokus belajar:

- Laravel dasar (routing, controller, view)
- CRUD
- Database MySQL
- UI sederhana dengan Bootstrap

---

# Fitur Utama (Wajib)

## Authentication

- Register
- Login
- Logout

## CRUD Notes

- Create Note
- Read Note
- Update Note
- Delete Note

## Search (Opsional)

- Search berdasarkan judul dan isi catatan

## Like System (Opsional)

- User dapat memberikan like pada catatan

## Dark Mode (Opsional)

- Toggle dark/light mode

---

# Teknologi yang Digunakan

- Laravel
- MySQL
- Bootstrap
- Laravel Breeze (auth)
- Vite

---

# Struktur Database (Minimal)

## users

Default table Laravel untuk authentication.

## notes

- id
- user_id
- title
- content
- timestamps

## likes (Opsional)

- id
- user_id
- note_id

---

# Tujuan Project

Membuat aplikasi CRUD sederhana dengan UI rapi untuk belajar Laravel dan konsep web development dasar.

---

# Style UI

- Minimalis
- Rapi dan jelas
- Responsive
- Bootstrap + sedikit custom CSS

---

# Roadmap Development (Pemula)

## Phase 1 - Setup

- Buat project Laravel
- Setup database
- Install Breeze
- Test register/login

## Phase 2 - CRUD Notes

- Buat migration dan model `Note`
- Buat controller resource
- Buat halaman index, create, edit, show
- Validasi form sederhana
- Pastikan user hanya melihat catatannya sendiri

## Phase 3 - UI Improvement

- Rapikan layout dengan Bootstrap
- Tambahkan navbar sederhana
- Tambahkan pesan sukses/error

## Phase 4 - Search (Opsional)

- Form search di halaman index
- Filter berdasarkan judul/isi

## Phase 5 - Like System (Opsional)

- Tambah tabel likes
- Tombol like/unlike

## Phase 6 - Dark Mode (Opsional)

- Tambah toggle tema

---

# Output Minimal (Checklist)

- User bisa register/login
- User bisa membuat, melihat, mengedit, dan menghapus note
- Data tersimpan di database
- UI rapi dan mudah digunakan

# Catatan untuk Pemula

- Kerjakan fitur wajib dulu, baru fitur opsional
- Gunakan route resource untuk CRUD
- Simpan semua view di folder `notes`
