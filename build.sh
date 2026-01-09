#!/usr/bin/env bash

echo "Running composer install..."
composer install --no-dev --optimize-autoloader

echo "Caching config..."
php artisan config:cache

echo "Caching routes..."
php artisan route:cache

echo "Running migrations..."
php artisan migrate --force

echo "Clearing and caching views..."
php artisan view:cache