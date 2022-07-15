@echo off
npm install
composer require barryvdh/laravel-debugbar --dev
composer remove fzaninotto/faker
composer require fakerphp/faker
exit /b