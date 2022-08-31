#!/bin/sh

cd /var/www/cinema

php artisan key:generate
php artisan optimize
php artisan view:cache


