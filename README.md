# CodeIgniter 4 JWT REST API

Ini adalah project REST API menggunakan CodeIgniter 4 dengan implementasi autentikasi menggunakan JWT Token.

## Fitur:
- Login dengan JWT
- CRUD data Mahasiswa
- Proteksi route dengan JWT
- Migrasi database
- Struktur project rapi

## Cara Menjalankan
1. Clone repo ini.
2. Jalankan `composer install`.
3. Copy file `.env` dan sesuaikan konfigurasi database.
4. Jalankan `php spark migrate`.
5. Jalankan server: `php spark serve`.

## Endpoint Utama
- `POST /login`
- `GET /api/mahasiswa`
- `POST /api/mahasiswa`
- `PUT /api/mahasiswa/{id}`
- `DELETE /api/mahasiswa/{id}`

## Author
Jose Yohany V.
