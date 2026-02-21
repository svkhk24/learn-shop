<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Installation
**Package**: node_modules
```shell
npm install
npm run dev
```
**Package**: vendor
```shell
composer install
```
## Enviroment Setup
```shell
cp .env.example .env
php artisan key:generate
```
Open the .env file and set your database
```shell
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=pgsql
DB_DATABASE=shop
DB_USERNAME=postgres
DB_PASSWORD=
```
**Run Migrations & Seeders**
```shell
php artisan migrate --seed
```
**Start server**
```shell
php artisan serve
```
