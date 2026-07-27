#!/usr/bin/env bash
set -e

# SCRIPT: package_for_hostinger.sh
# Jalankan ini secara lokal setelah Anda siap untuk membuat ZIP yang bisa diupload ke shared hosting

echo "Installing composer dependencies (no dev)..."
composer install --no-dev --optimize-autoloader

echo "Building frontend assets..."
npm ci
npm run build

echo "Generating app key..."
php artisan key:generate --ansi

echo "Running migrations..."
php artisan migrate --force

# Optional: export database (requires mysqldump creds configured locally)
# mysqldump -u root -p sim > database_dump.sql

echo "Creating ZIP archive..."
zip -r ../sim-hostinger.zip . -x "node_modules/*" ".git/*" "storage/*" "vendor/*/tests/*"

echo "Done. sim-hostinger.zip created in parent directory."
