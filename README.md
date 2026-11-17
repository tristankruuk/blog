# Cloning the Project

Clone the project into a new directory and navigate to it:

```powershell
git clone https://github.com/tristankruuk/blog.git <directory-name>
cd <directory-name>
```

# Installing Required Tools

Install the required tools using Windows Package Manager (Winget):

```powershell
winget install -e --id Git.Git
winget install -e --id Microsoft.VisualStudioCode
winget install -e --id PHP.PHP.8.5
```

Verify the installations:

```powershell
git --version
code --version
php --version
```

# Configuring PHP Extensions

Find the PHP executable location using:

```powershell
where.exe php
```

Open the PHP installation directory in File Explorer and locate the `php.ini` configuration file.

In `php.ini`, enable the following extensions by removing the leading semicolon (`;`). Do not add duplicate entries if a line is already enabled:

```ini
extension_dir = "ext"
extension=curl
extension=fileinfo
extension=mbstring
extension=openssl
extension=pdo_sqlite
extension=sqlite3
extension=zip
```

Save the file and verify that the extensions are enabled:

```powershell
php -m
```

Check that all the extensions listed above appear in the output.

You can also verify individual extensions using:

```powershell
php -r "foreach (['curl', 'fileinfo', 'mbstring', 'openssl', 'pdo_sqlite', 'sqlite3', 'zip'] as $ext) { echo $ext . ': ' . (extension_loaded($ext) ? 'enabled' : 'missing') . PHP_EOL; }"
```

Restart any running PHP server after changing `php.ini`.

# External Installations

## Installing Bun

Follow the official [Bun installation instructions](https://bun.com/get) or copy this link:

https://bun.com/get

Verify the installation:

```powershell
bun --version
```

## Installing Composer

Download and run the official [Composer Windows installer](https://getcomposer.org/download/) or copy this link:

https://getcomposer.org/download/

Verify the installation:

```powershell
composer --version
```

# Installing Project Dependencies

Install the PHP dependencies using Composer:

```powershell
composer install
```

Verify that the dependencies are installed:

```powershell
composer check-platform-reqs
```

Install the JavaScript dependencies using Bun:

```powershell
bun install
```

Verify the Bun installation and project dependencies:

```powershell
bun --version
bun pm ls
```

# Creating the `.env` File

Copy the `.env.example` file and rename it to `.env` using the following command:

```powershell
cp .env.example .env
```

Verify that the `.env` file exists:

```powershell
Test-Path .env
```

The command should return `True`.

Generate the Laravel application key. This only needs to be done once during the initial setup:

```powershell
php artisan key:generate
```

Verify that the application key is configured:

```powershell
php artisan key:show
```

# Database Migration

Run the database migrations during the initial setup:

```powershell
php artisan migrate
```

Confirm the migration if prompted.

Verify the database connection and configuration:

```powershell
php artisan migrate:status
```

# Creating the Storage Link

Create a symbolic link to make publicly accessible storage files available:

```powershell
php artisan storage:link
```

Verify that the storage link exists:

```powershell
Test-Path public/storage
```

The command should return `True`.

# Running Laravel

Start the Laravel development environment using:

```powershell
composer run dev
```

Keep the terminal running while using the application.

Open the local development URL displayed in the terminal to access the application.