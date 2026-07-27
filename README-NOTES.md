## Next steps (pushed changes)

Saya sudah menambahkan fitur berikut ke repo:

- Role & permission support (spatie migration files + RoleSeeder + AdminSeeder)
- Modified User model to use `HasRoles` trait
- Resource controllers: MemberController and LoanController (basic CRUD)
- Blade views for members and loans (index/create/edit/show) and a minimal `layouts.app`
- Vite config and minimal resources (already added earlier)

Penting: beberapa paket masih perlu diinstall lokal agar aplikasi berjalan baku (Breeze, Spatie, Livewire). Ikuti instruksi di README untuk menyelesaikan:

1. Jalankan di lokal (atau server yang punya composer & npm):

```bash
composer install
composer require laravel/breeze --dev
php artisan breeze:install blade
composer require spatie/laravel-permission
php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"
composer require livewire/livewire
npm ci
npm run build
php artisan migrate
php artisan db:seed --class=RoleSeeder
php artisan db:seed --class=AdminSeeder
```

2. Jika Anda mau saya buat ZIP build-lokal (termasuk vendor/ dan assets), beri tahu saya dan saya akan buat release.

3. Periksa `.env` dan sesuaikan DB credentials, APP_URL, dan variabel `SIM_ADMIN_EMAIL`/`SIM_ADMIN_PASSWORD` jika Anda ingin mengganti kredensial admin default.
