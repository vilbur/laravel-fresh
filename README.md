# Kickstart configuration for new Laravel project
- composer.json contains main packages



#### How to install project
1. [Install Laravel.](#install-laravel)<br>
2. [Fetch this repository.](#fetch-this-repository)<br>
3. [Update Laravel.](#update-laravel)<br>

#### Install Laravel
__USE cmd.exe TO PREVENT CYGWIN ERRORS__
``` bash
composer create-project laravel/laravel laravel-fresh &&cd laravel-fresh
```

#### Fetch this repository
Run this command in project folder
``` bash
git init &&git remote add origin https://github.com/vilbur/laravel-fresh.git &&git fetch --all &&git reset --hard origin/master &&git pull origin master
```

#### Update Laravel
``` bash
composer update &&php artisan voyager:install &&yarn &&npm install
```
