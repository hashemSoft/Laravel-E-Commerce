<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## كيفية تشغيل المشروع 

لتشغيل هذا المشروع، اتبع الخطوات التالية:

### 1. استنساخ المستودع

استنسخ المستودع إلى جهازك باستخدام الأمر التالي:

```CMD
git clone https://github.com/hashemSoft/Laravel-E-Commerce.git
cd Laravel-E-Commerce
```

### 2. إعداد البيئة

```CMD
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```
