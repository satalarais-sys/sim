# Hostinger Deploy Instructions

Langkah singkat untuk deploy ke Hostinger (shared hosting) bila Anda tidak memiliki SSH/Composer di server:

1. Siapkan database MySQL di Hostinger (Panel -> MySQL Databases). Catat nama DB, username, password.
2. Di lokal: jalankan `composer install --no-dev --optimize-autoloader` dan `npm ci && npm run build`.
3. Jalankan `php artisan key:generate` dan `php artisan migrate --seed` di lokal.
4. Export database lokal ke file `database_dump.sql`:
   `mysqldump -u root -p sim > database_dump.sql`
5. Buat ZIP dari project (termasuk `vendor/` dan build assets di `public/`). Unggah ZIP ke Hostinger File Manager.
6. Extract ZIP di server, dan atur document root domain ke folder project/public (Hostinger -> Domains -> Setup -> Public folder).
7. Jika tidak bisa atur document root, pindahkan isi folder `public/` ke `public_html/` dan sesuaikan `index.php` path require/../vendor/autoload.php jika perlu.
8. Import `database_dump.sql` via phpMyAdmin di panel Hostinger.
9. Atur `.env` pada server (DB credentials, APP_URL=https://sim.wiquha.online).
10. Pastikan folder storage dan bootstrap/cache dapat ditulis.
11. Setup cron untuk scheduler Laravel (Hostinger -> Cron Jobs):
    * * * * * /usr/bin/php /home/username/path-to-project/artisan schedule:run >> /dev/null 2>&1
12. Aktifkan SSL via Hostinger panel (Let's Encrypt).

Jika Anda mau, saya bisa membuat ZIP yang sudah berisi `vendor/` dan build assets — beri tahu saya jika Anda ingin saya upload file ZIP di repo sebagai release.
