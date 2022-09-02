<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and
creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in
many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache)
  storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## LiveCX SAAS

### Getting Started On macOS

If you're developing on a Mac and [Docker Desktop](https://www.docker.com/products/docker-desktop) is already installed,
you can use simple terminal command to run LiveCX project.

### Getting Started On Windows

Before we can run LiveCX project on your Windows machine, make sure to
install [Docker Desktop](https://www.docker.com/products/docker-desktop). Next, you should ensure that Windows Subsystem
for Linux 2 [WSL2](https://docs.microsoft.com/en-us/windows/wsl/install-win10) is installed and enabled. After
installing and enabling WSL2, you should ensure that Docker Desktop is configured to use
the [WSL2 backend](https://docs.docker.com/docker-for-windows/wsl/).

### Getting Started On Linux

If you're developing on Linux and [Docker](https://www.docker.com/) is already installed, you can use simple terminal
command to create LiveCX project.

> Before starting Laravel [Sail](https://laravel.com/docs/sail), you should ensure that no other web servers or databases are running on your local computer.

After the project has been cloned, navigate to the application directory and install composer dependencies.

```bash
cd livecx-api

docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php80-composer:latest \
    composer install --ignore-platform-reqs
```

After composer dependencies has been installed, copy `.env.example` to `.env` and you may start Laravel Sail. Laravel
Sail provides a simple command-line interface for interacting with Laravel's default Docker configuration:

```bash
cp .env.example .env

./vendor/bin/sail up
```

Once the application's Docker containers have been started, you can access the application in your web browser
at: http://localhost

> You may configure a Bash Alias for sail command.

```bash
alias sail='bash vendor/bin/sail'
```

### Configurations

Generate app key, storage link

```bash
sail artisan key:generate

sail artisan storage:link
```

Migrate databases

```bash
# Migrate common databases
sail artisan migrate
```

Seed databases

```bash
sail artisan db:seed
```

### Tenants

To create a Tenant after db seeded, open terminal to run Artisan command

```bash
sail tinker
```

Then create a Tenant by running bellow command in Tinker terminal
> App\Models\LiveCX\Company::create(['user_id' => 1, 'status' => 'active', 'subdomain' => 'livecx', 'name' => 'LiveCx', 'email' => 'livecx@livecx.com']);

Now the Tenant API base url will be `http://localhost/tenant/livecx`

You may seed `users` table with fake users.
```bash
sail artisan db:seed --class=UserSeeder --tenant=livecx
```
#### Migrations

Every new *migration* file should place in the `database/migrations/tenancy` folder.

```base
# Migrate livecx databases
sail artisan migrate:tenants
```

#### Artisan commands
To run any artisan command related to tenant, use `--tenant=subdomain` suffix.
```base
# Artisan command
sail artisan route:list --tenant=livecx
```

### PhpMyAdmin

Access phpmyadmin at: http://localhost:8080

- Username: `DB_USERNAME`
- Password: `DB_PASSWORD`

#### Starting & Stopping Sail

```bash
# start every services
sail up -d

# stop everything
sail down
```

#### Executing Commands

```bash
# Running Artisan commands locally...
php artisan migrate

# Running Artisan commands within Laravel Sail...
sail artisan migrate
```

#### Executing Composer Commands

```bash
sail composer require laravel/sanctum
```

#### Executing Artisan Commands

```bash
sail artisan queue:work
```

#### Executing Node / NPM Commands

```bash
sail node --version

sail npm run prod
```

