## About Project

The project was developed using the following stacks:

- Backend [Php 8.1](https://www.php.net/)/[Laravel 10](https://laravel.com/)/[MySql](https://www.mysql.com/)
- Frontend [LiveWire](https://laravel-livewire.com/)/[Tailwindcss](https://tailwindcss.com/)

## Description

- For the generation of the QR code, the name must be informed obligatorily.
- Linkedin and gihub are optional.
- All fields have validation
- When clicking on generate image if there are no errors, a QR code will be generated.

## Instalation Projet

### Local

- Note: Before running ```php artisan migrate``` Use the mysql credentials of your machine, replacing the variables DB_HOST, DB_PORT, in the env file
DB_DATABASE, DB_USERNAME, DB_PASSWORD

```bash
composer install
cp .env.example.local .env
php artisan migrate
php artisan key:generate
```

### Sail
- [Laravel Sail](https://laravel.com/docs/10.x/sail)

```bash
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs

cp .env.example.sail .env
./vendor/bin/sail up -d
./vendor/bin/sail artisan migrate
./vendor/bin/sail artisan artisan key:generate
```

## Access

### Local

```bash
php artisan serve
```

- http://localhost:8000

### Sail

- http://localhost

### Web
- https://app.desdiogo.com.br
