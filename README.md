# Sistem Informasi Management - Starter

Repositori ini berisi starter project untuk Sistem Informasi Management (Koperasi Desa) berbasis Laravel.

Tujuan: menyediakan scaffold migrations, models, routes, dan instruksi deploy ke Hostinger.

Catatan cepat:
- Ini adalah starter minimal: Anda perlu menjalankan `composer install`, `npm install`, `php artisan migrate` dan setup .env di environment Anda.
- Untuk shared hosting (Hostinger) Anda bisa mengunggah zip yang sudah berisi vendor dan build assets. Lihat README-DEPLOY-HOSTINGER.md untuk instruksi.

Apa yang ada di repo ini:
- Migrations untuk members, loans, loan_installments, categories, employees, employee_salaries, incomes/outcomes/debts
- Model dasar: Member, Loan, Employee, Income
- Routes dasar (routes/web.php)
- README-DEPLOY-HOSTINGER.md: langkah deploy ke Hostinger
- tools/package_for_hostinger.sh: script bantuan (jalankan lokal sebelum zip)
