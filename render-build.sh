#!/usr/bin/env bash
set -o errexit

composer install --no-dev --optimize-autoloader --no-interaction

if [ -z "$APP_KEY" ]; then
    php artisan key:generate --force
fi

php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear

php artisan migrate --force --no-interaction

php artisan config:cache
php artisan route:cache
php artisan view:cache

php artisan storage:link || true

echo "Build completed!"