# 🚀 Panduan Setup Laravel & Livewire (Docker)

## 1. Docker Setup

**docker-compose.yml**

```yml
version: "3.8"

services:
  pemweb:
    build: ./php
    image: pemweb_php:latest
    container_name: pemweb
    hostname: "pemweb"
    volumes:
      - ./src:/var/www/html
      - ./php/www.conf:/usr/local/etc/php-fpm.d/www.conf
    working_dir: /var/www/html
    depends_on:
      - db_pemweb

  db_pemweb:
    image: mariadb:10.2
    container_name: db_pemweb
    restart: unless-stopped
    tty: true
    ports:
      - "13306:3306"
    volumes:
      - ./db/data:/var/lib/mysql
      - ./db/conf.d:/etc/mysql/conf.d:ro
    environment:
      MYSQL_USER: djambred
      MYSQL_PASSWORD: p455w0rd1!.
      MYSQL_ROOT_PASSWORD: p455w0rd
      TZ: Asia/Jakarta
      SERVICE_TAGS: dev
      SERVICE_NAME: mysql_pemweb

  nginx_pemweb:
    build: ./nginx
    image: nginx_pemweb:latest
    container_name: nginx_pemweb
    hostname: "nginx_pemweb"
    ports:
      - "80:80"
    volumes:
      - ./src:/var/www/html
      - ./nginx/nginx.conf:/etc/nginx/conf.d/default.conf
    depends_on:
      - pemweb
```

**Build container:**

```bash
docker compose up -d --build
```

## 2. Inisialisasi Proyek Laravel

1. Masuk ke container:

```bash
docker exec -it pemweb bash
```

2. Buat proyek Laravel:

```bash
composer create-project --prefer-dist raugadh/fila-starter .
```

3. Konfigurasi `.env`:

```ini
APP_NAME="PemWeb"
APP_URL=http://localhost
ASSET_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=db_pemweb
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=p455w0rd
```

4. Generate key dan setup storage:

```bash
php artisan key:generate
php artisan storage:link
```

5. Database setup:

```bash
php artisan migrate --seed --force
php artisan shield:generate --all
php artisan project:init
```

6. Set permission:

```bash
chmod 777 -R storage/* bootstrap/*
```

## 3. Struktur Direktori

```
public/
└── front/
    ├── css/
    ├── images/
    ├── js/
    └── plugins/

resources/
├── views/
│   ├── components/
│   │   └── layouts/
│   │       └── app.blade.php
│   └── livewire/
│       └── show-home-page.blade.php
└── welcome.blade.php

app/
└── Livewire/
    └── ShowHomePage.php
```

## 4. Konfigurasi Livewire

**resources/views/components/layouts/app.blade.php** (Extract penting):

```html
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    @livewireStyles
    <!-- CSS Assets -->
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}" />
  </head>
  <body>
    <header>
      <!-- Navigation -->
      <a wire:navigate href="{{ route('home') }}">Home</a>
      <a wire:navigate href="{{ route('profile') }}">Profile</a>
    </header>

    {{ $slot }}

    <footer>
      <!-- Footer Content -->
    </footer>

    @livewireScripts
    <!-- JS Assets -->
    <script src="{{ asset('front/js/script.js') }}"></script>
  </body>
</html>
```

**app/Livewire/ShowHomePage.php**

```php
<?php

namespace App\Livewire;

use Livewire\Component;

class ShowHomePage extends Component
{
    public function render()
    {
        return view('livewire.show-home-page');
    }
}
```

**routes/web.php**

```php
<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\ShowHomePage;

Route::get('/', ShowHomePage::class)->name('home');
```

## 5. Catatan Penting

1. Untuk asset frontend:

- Letakkan file CSS/JS di `public/front/`
- Gunakan `asset()` helper untuk mengakses file:

```html
<link rel="stylesheet" href="{{ asset('front/css/style.css') }}" />
```

2. Fitur Livewire:

- Gunakan `wire:navigate` untuk navigasi SPA
- Komponen Livewire disimpan di `app/Livewire`
- View Livewire disimpan di `resources/views/livewire`

3. Database:

- Pastikan konfigurasi database di `.env` sesuai dengan service docker
- Port database di-expose di `13306` untuk akses eksternal

4. Permission:

- Pastikan menjalankan `chmod` setelah setup selesai
- Jika ada error permission, ulangi perintah:

```bash
chmod 777 -R storage/* bootstrap/*
```

Perubahan utama yang saya lakukan:

1. Reorganisasi struktur panduan menjadi lebih modular
2. Menghapus duplikasi migrasi (hanya gunakan `migrate --seed`)
3. Menyesuaikan sintaks dengan standar Laravel/Livewire
4. Memperbaiki struktur direktori yang tidak konsisten
5. Menambahkan penjelasan penting untuk tiap bagian
6. Menyederhanakan contoh kode yang berulang

Pastikan semua file konfigurasi Docker (www.conf, nginx.conf) sudah dibuat sebelum menjalankan `docker-compose up`.
