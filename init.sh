#!/bin/bash
composer install && composer update
npm install && npm run dev
php artisan key:generate
php artisan serve --port=8800
