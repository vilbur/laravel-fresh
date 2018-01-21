## Kickstart configuration for new Laravel project
- composer.json contains main packages

#### Install Laravel
``` bash
composer create-project laravel/laravel project_name
```

#### Fetch this repository
Run this command in project folder
``` bash
git init &&git remote add origin https://github.com/vilbur/laravel-start.git &&git fetch --all &&git reset --hard origin/master &&git pull origin master
```

#### Update Laravel
``` bash
composer update
php artisan voyager:install
yarn
```
