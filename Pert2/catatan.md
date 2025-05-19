# Laporan Tugas Website Profil Pribadi

## Mata Kuliah: Pemrograman Web
**Hari/Tanggal:** Senin, 14 April 2025  
**Waktu:** 09.07 - 11.50 WIB

---

## Deskripsi Kegiatan
Pada sesi pembelajaran mata kuliah Pemrograman Web hari ini, kami mempelajari cara membuat tampilan halaman web menggunakan **HTML tanpa CSS atau JavaScript tambahan**. Fokus pembelajaran adalah memahami struktur HTML dasar serta bagaimana menyusun konten dan elemen-elemen web agar tetap terorganisir dan menarik secara visual dengan bantuan framework **Bootstrap 5**.

Kami kemudian diberikan tugas untuk membuat sebuah **website profil pribadi**. Tugas ini mencakup menampilkan foto pribadi, biodata singkat, deskripsi tentang diri sendiri, serta mencantumkan akun media sosial yang dimiliki. Website ini dibuat dengan struktur HTML yang baik dan didukung oleh komponen-komponen visual dari Bootstrap.

---

## Analisis Website

### 1. Struktur Halaman
Website terdiri dari:
- Navbar (navigasi atas)
- Kartu profil pribadi (foto, nama, fakultas, jurusan, lokasi, tanggal lahir)
- Bagian "About Me" berisi penjelasan latar belakang dan motivasi
- Bagian "My Skill" yang menunjukkan kemampuan teknis
- Footer dengan ikon dan link ke media sosial

Semua elemen tersebut ditata menggunakan sistem grid dan komponen dari Bootstrap, sehingga tampil responsif dan rapi meskipun tidak menggunakan CSS tambahan.

### 2. Navigasi
Bagian navbar berfungsi sebagai bagian navigasi utama, menampilkan logo Universitas Esa Unggul serta beberapa menu seperti Home, Link, Dropdown, dan Search bar. Navbar ini sudah disusun agar **responsif**, menggunakan elemen `navbar-toggler` yang memunculkan menu dalam bentuk collapsible pada ukuran layar kecil.

### 3. Profil Diri
Bagian profil menampilkan informasi pribadi berupa:
- Foto (berbentuk lingkaran dengan class `rounded-circle`)
- Nama lengkap
- Fakultas dan Program Studi
- Lokasi domisili
- Tanggal lahir

Profil ini dikemas dalam `card` Bootstrap yang simpel dan elegan. Penyusunan elemen dilakukan dalam kolom agar tampil rapi di berbagai perangkat.

### 4. About Me
Bagian ini menjelaskan latar belakang saya sebagai mahasiswa Teknik Informatika. Saya menceritakan bahwa saya berasal dari jurusan **Rekayasa Perangkat Lunak (RPL)** saat SMK, dan telah mengenal dasar-dasar pemrograman seperti HTML, CSS, JavaScript, dan PHP. Saya juga menyampaikan motivasi saya untuk mendalami web development lebih jauh melalui mata kuliah ini.

Penulisan dilakukan dalam paragraf-paragraf informatif, dibungkus dalam `card` dengan warna latar lembut menggunakan `bg-body-tertiary`.

### 5. Skill
Untuk menggambarkan kemampuan teknis, saya menggunakan **progress bar** dari Bootstrap:
- HTML: 30%
- CSS: 15%

Meskipun level skill masih dasar, bagian ini menjadi bentuk visualisasi progres belajar saya yang sedang berkembang.

### 6. Footer dan Media Sosial
Footer menampilkan logo universitas dan beberapa link media sosial:
- Instagram
- LinkedIn
- YouTube
- Facebook
- GitHub

Setiap ikon menggunakan **Bootstrap Icons** dan diarahkan ke akun asli saya. Semua link dibuka di tab baru agar tidak mengganggu halaman utama.


---

# Sesi Lanjutan (Pukul 12.00 - 17.00 WIB)

## Materi: Instalasi dan Penggunaan Laravel dengan Composer

Pada sesi kedua di hari yang sama, kami melanjutkan pembelajaran dengan topik yang lebih teknis yaitu **membuat project Laravel menggunakan Composer**. Laravel merupakan salah satu framework PHP terpopuler yang digunakan dalam pengembangan aplikasi web modern. Untuk membangun project Laravel, kami menggunakan perintah berikut:

```bash
composer create-project laravel/laravel nama-proyek
```

Namun dalam pembelajaran ini, kami juga diperkenalkan dengan starter pack Laravel dari pihak ketiga, yaitu **raugadh/fila-starter**, yang dapat diinstal melalui perintah:

```bash
composer create-project --prefer-dist raugadh/fila-starter .
```

Starter ini mempermudah pembuatan project karena sudah dilengkapi dengan berbagai fitur dasar seperti autentikasi, layout dasar, dan konfigurasi bawaan lainnya.

## Integrasi dengan Docker

Kami juga menjalankan Laravel di dalam **container Docker**, yang membuat pengelolaan lingkungan pengembangan menjadi lebih konsisten dan portabel. Untuk masuk ke dalam container, digunakan perintah:

```bash
docker exec -it pemweb bash
```

Setelah berhasil masuk ke dalam container, kami menjalankan berbagai konfigurasi tambahan untuk menyesuaikan project Laravel yang telah dibuat:

### Konfigurasi Project Laravel

1. Menghapus file dan folder yang tidak dibutuhkan:
```bash
rm -rf *
```

2. Memberi akses permission pada direktori storage:
```bash
chmod -R www-data:www-data storage/*
```

3. Mengatur file `.env` untuk konfigurasi nama aplikasi, zona waktu, dan koneksi database:
```env
APP_NAME="Pemweb"
APP_TIMEZONE='Asia/Jakarta'
APP_URL=http://localhost
ASSET_URL=http://localhost
DB_CONNECTION=mysql
DB_HOST=db_pemweb
DB_PORT=3306
DB_DATABASE=db_pemweb
DB_USERNAME=root
DB_PASSWORD=p455w0rd
```

4. Menjalankan beberapa perintah Artisan:
```bash
php artisan migrate
php artisan migrate:fresh
php artisan db:seed --force
php artisan shield:generate --all
php artisan project:init
```

5. Memberikan permission akses ke folder Laravel:
```bash
chmod 777 -R storage/* && chmod 777 bootstrap/*
```

## Tujuan dan Manfaat
Dengan memahami cara membuat project Laravel menggunakan Composer dan mengintegrasikannya dengan Docker, saya mendapatkan wawasan tentang workflow modern dalam pengembangan web. Proses ini tidak hanya meningkatkan efisiensi dalam setup project, tetapi juga melatih saya untuk terbiasa menggunakan **command line tools dan dependency manager**, yang merupakan bagian penting dari dunia pengembangan software saat ini.

