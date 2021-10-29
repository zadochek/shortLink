<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Start project

<p>1. Clone this repository</p>
<p>2. Run "composer install" for install dependencies</p>
<p>3. Run "cp .env.example .env"</p>
<p>4. Configure database in .env or <a href="https://github.com/zadochek/shortLink/blob/master/config/database.php">/config/database.php</a></p>
<p>5. Run "php artisan migrate"</p>
<p>6. Run "php artisan key:generate"</p>
<p>7. For Linux: Run "chmod -R a+rwx storage"</p>
<p>You can use php development server for run this project "php artisan serve"</p>

## Main files

<p><a href="https://github.com/zadochek/shortLink/blob/master/app/Http/Controllers/ShortLinkController.php">ShortLink Controller</a></p>
<p><a href="https://github.com/zadochek/shortLink/blob/master/resources/js/app.js">App js</a></p>
<p><a href="https://github.com/zadochek/shortLink/blob/master/database/migrations/2021_10_29_151309_create_short_links_table.php">ShortLink migration</a></p>