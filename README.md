## About Project

The project was developed using the following stacks:

- Backend Php 8.1/Laravel 10/MySql
- Frontend LiveWire/Tailwindcss

## Description

- For the generation of the QR code, the name must be informed obligatorily.
- Linkedin and gihub are optional.
- All fields have validation
- I didn't use tests because I hardly studied the subject
- When clicking on generate image if there are no errors, a QR code will be generated.

## Instalation Projet

### Local

```bash
composer install
php artisan migrate
cp .env.example.local .env
php artisan key:generate
```

### Sail

```bash
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs

./vendor/bin/sail up -d
./vendor/bin/sail artisan migrate
cp .env.example.sail .env
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
