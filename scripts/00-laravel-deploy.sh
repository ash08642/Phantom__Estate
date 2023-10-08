#!/usr/bin/env bash
echo "Running composer"
composer install --no-dev --working-dir=/var/www/html

echo "Caching config..."
php artisan config:cache

echo "Caching routes..."
php artisan route:cache

echo "Linking Storage"
php artisan storage:link

echo "Running vite..."
npm install
npm run build

echo "Running migrations..."
php artisan migrate --force
