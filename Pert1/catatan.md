# Docker: Analisis dan Penggunaan

## Apa itu Docker?

Docker adalah platform yang memungkinkan pengembang untuk membuat, menjalankan, dan mengelola aplikasi dalam **container**. Container adalah lingkungan yang ringan, portabel, dan terisolasi yang berisi semua dependensi dan konfigurasi yang diperlukan untuk menjalankan aplikasi.



## Mengapa Harus Menggunakan Docker?

Docker digunakan karena memberikan beberapa keuntungan utama:

- **Konsistensi**: Memastikan aplikasi berjalan sama di semua lingkungan (development, testing, production).
- **Portabilitas**: Aplikasi dalam container dapat dijalankan di mana saja, baik di lokal, cloud, atau server fisik.
- **Efisiensi Sumber Daya**: Container lebih ringan daripada virtual machine (VM) karena berbagi kernel sistem host.
- **Kecepatan Pengembangan**: Mempercepat proses development, testing, dan deployment aplikasi.
- **Isolasi**: Aplikasi dalam container terisolasi dari sistem host dan container lainnya.



## Analisis SWOT Docker (5W1H)

1. **What (Apa)**
    
    Docker adalah platform yang digunakan untuk membuat, mengemas, dan menjalankan aplikasi dalam **container** yang terisolasi. Container ini berisi semua dependensi dan konfigurasi yang dibutuhkan aplikasi untuk berjalan.
    
2. **Why (Mengapa)**
    
    Docker digunakan untuk:
    
    - Meningkatkan **portabilitas** aplikasi.
    - Memastikan **konsistensi** di berbagai lingkungan.
    - Meningkatkan **efisiensi** penggunaan sumber daya.
    - Mempercepat proses **development** dan **deployment**.
3. **Who (Siapa)**
    
    Docker digunakan oleh:
    
    - **Developer**: Untuk memastikan aplikasi berjalan konsisten di semua lingkungan.
    - **Sysadmin**: Untuk mengelola infrastruktur dan aplikasi dengan lebih efisien.
    - **DevOps Engineer**: Untuk mengotomatisasi deployment dan scaling aplikasi.
    - **Tim IT**: Untuk memudahkan pengelolaan aplikasi di berbagai lingkungan.
4. **When (Kapan)**
    
    Docker digunakan ketika:
    
    - Mengembangkan aplikasi yang perlu berjalan di berbagai lingkungan.
    - Membangun aplikasi berbasis **microservices**.
    - Membutuhkan isolasi antara aplikasi dan sistem host.
    - Ingin memastikan konsistensi antara lingkungan development dan production.
    - Membutuhkan deployment yang cepat dan efisien.
5. **Where (Di Mana)**
    
    Docker dapat dijalankan di:
    
    - **Lokal**: Di komputer pengembang untuk development dan testing.
    - **Server Fisik**: Di data center atau server on-premise.
    - **Cloud**: Di platform cloud seperti AWS, Google Cloud, Azure, dll.
    - **Hybrid Environment**: Kombinasi antara lokal, cloud, dan server fisik.
6. **How (Bagaimana)**
    
    Docker bekerja dengan menggunakan konsep **containerization**:
    
    - **Docker Image**: Template yang berisi aplikasi, dependensi, dan konfigurasi.
    - **Docker Container**: Instance dari Docker image yang sedang berjalan.
    - **Docker Hub**: Repositori publik untuk menyimpan dan berbagi Docker image.
    - **Docker Network**: Jaringan virtual untuk menghubungkan container.
    - **Docker Volume**: Penyimpanan data persisten yang dapat dibagikan antar container.



## Contoh Penggunaan Docker

Berikut adalah contoh sederhana penggunaan Docker untuk menjalankan aplikasi web:

1. Buat file `Dockerfile`:
    
    ```
    FROM nginx:alpine
    COPY index.html /usr/share/nginx/html
    ```
    
2. Build image:
    
    ```bash
    docker build -t my-web-app .
    ```
    
3. Jalankan container:
    
    ```bash
    docker run -d -p 8080:80 --name my-web-container my-web-app
    ```
    
4. Buka browser dan akses `http://localhost:8080`.

# Pengertian Web

**Web** (World Wide Web) adalah sistem yang memungkinkan pengguna untuk mengakses dan berbagi informasi melalui internet menggunakan **browser**. Web terdiri dari kumpulan **halaman web** yang saling terhubung melalui **hyperlink** dan dihosting di **server web**.



## Contoh-Contoh Web

Berikut adalah beberapa contoh web yang umum digunakan:

1. **Website Informasi**:
    - Contoh: Wikipedia ([www.wikipedia.org](http://www.wikipedia.org/)), BBC News ([www.bbc.com](http://www.bbc.com/)).
    - Fungsi: Menyediakan informasi atau berita.
2. **Website E-commerce**:
    - Contoh: Amazon ([www.amazon.com](http://www.amazon.com/)), Tokopedia ([www.tokopedia.com](http://www.tokopedia.com/)).
    - Fungsi: Menjual produk atau jasa secara online.
3. **Website Media Sosial**:
    - Contoh: Facebook ([www.facebook.com](http://www.facebook.com/)), Instagram ([www.instagram.com](http://www.instagram.com/)).
    - Fungsi: Memungkinkan pengguna berinteraksi dan berbagi konten.
4. **Website Pencarian**:
    - Contoh: Google ([www.google.com](http://www.google.com/)), Bing ([www.bing.com](http://www.bing.com/)).
    - Fungsi: Membantu pengguna mencari informasi di internet.
5. **Website Pendidikan**:
    - Contoh: Coursera ([www.coursera.org](http://www.coursera.org/)), Ruangguru ([www.ruangguru.com](http://www.ruangguru.com/)).
    - Fungsi: Menyediakan materi pembelajaran online.
6. **Website Pemerintah**:
    - Contoh: Kementerian Keuangan ([www.kemenkeu.go.id](http://www.kemenkeu.go.id/)), [Gov.uk](http://gov.uk/) ([www.gov.uk](http://www.gov.uk/)).
    - Fungsi: Menyediakan layanan dan informasi resmi dari pemerintah.
7. **Website Blog**:
    - Contoh: WordPress ([www.wordpress.com](http://www.wordpress.com/)), Medium ([www.medium.com](http://www.medium.com/)).
    - Fungsi: Platform untuk menulis dan berbagi artikel atau opini.
8. **Website Portofolio**:
    - Contoh: Behance ([www.behance.net](http://www.behance.net/)), Dribbble ([www.dribbble.com](http://www.dribbble.com/)).
    - Fungsi: Menampilkan karya atau proyek pribadi.
9. **Website Streaming**:
    - Contoh: YouTube ([www.youtube.com](http://www.youtube.com/)), Netflix ([www.netflix.com](http://www.netflix.com/)).
    - Fungsi: Menyediakan konten video atau musik yang dapat ditonton atau didengarkan secara online.
10. **Website Forum**:
    - Contoh: Reddit ([www.reddit.com](http://www.reddit.com/)), Kaskus ([www.kaskus.co.id](http://www.kaskus.co.id/)).
    - Fungsi: Platform diskusi

# Pengenalan HTML Dasar
HTML (HyperText Markup Language) adalah bahasa markup yang digunakan untuk membuat dan menyusun halaman web. HTML terdiri dari serangkaian elemen yang digunakan untuk mengelilingi atau membungkus bagian-bagian konten untuk membuatnya tampil atau berperilaku dengan cara tertentu.

## Struktur Dasar HTML
Setiap dokumen HTML memiliki struktur dasar yang terdiri dari beberapa elemen utama:

```html
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Judul Halaman</title>
</head>
<body>
    <h1>Ini adalah Heading 1</h1>
    <p>Ini adalah paragraf.</p>
    <a href="https://www.example.com">Ini adalah tautan</a>
</body>
</html>
```

### Penjelasan Struktur Dasar
1. **`<!DOCTYPE html>`**: Deklarasi tipe dokumen yang memberitahu browser bahwa dokumen ini adalah dokumen HTML5.
2. **`<html>`**: Elemen root yang membungkus semua konten di halaman web. Atribut `lang` digunakan untuk menentukan bahasa utama dari dokumen.
3. **`<head>`**: Bagian ini berisi meta-informasi tentang dokumen, seperti judul halaman, set karakter, dan metadata lainnya.
4. **`<meta charset="UTF-8">`**: Menentukan set karakter yang digunakan dalam dokumen, biasanya UTF-8 untuk mendukung berbagai karakter.
5. **`<meta name="viewport" content="width=device-width, initial-scale=1.0">`**: Mengontrol tampilan halaman pada perangkat mobile.
6. **`<title>`**: Menentukan judul halaman yang akan ditampilkan di tab browser.
7. **`<body>`**: Berisi konten utama yang akan ditampilkan di halaman web, seperti teks, gambar, tautan, dll.
8. **`<h1>`**: Heading level 1, digunakan untuk judul utama.
9. **`<p>`**: Paragraf, digunakan untuk menampilkan teks.
10. **`<a>`**: Tautan, digunakan untuk menghubungkan ke halaman atau sumber lain.

## Elemen HTML Dasar
Berikut adalah beberapa elemen HTML dasar yang sering digunakan:

### 1. Heading (`<h1>` hingga `<h6>`)
Heading digunakan untuk membuat judul atau subjudul. `<h1>` adalah heading terbesar dan `<h6>` adalah yang terkecil.

```html
<h1>Heading 1</h1>
<h2>Heading 2</h2>
<h3>Heading 3</h3>
<h4>Heading 4</h4>
<h5>Heading 5</h5>
<h6>Heading 6</h6>
```

### 2. Paragraf (`<p>`)
Paragraf digunakan untuk menampilkan teks.
```html
<p>Ini adalah sebuah paragraf.</p>
<p>Ini adalah paragraf lainnya.</p>
```

### 3. Tautan (`<a>`)
Tautan digunakan untuk menghubungkan ke halaman lain atau sumber lain.
```html
<a href="https://www.example.com">Kunjungi Example.com</a>
```

### 4. Gambar (`<img>`)
Gambar digunakan untuk menampilkan gambar di halaman web.
```html
<img src="gambar.jpg" alt="Deskripsi Gambar">
```

### 5. Daftar (`<ul>`, `<ol>`, `<li>`)
Daftar digunakan untuk membuat daftar item.
- **Daftar Tidak Berurutan (Unordered List)**:
  ```html
  <ul>
      <li>Item 1</li>
      <li>Item 2</li>
      <li>Item 3</li>
  </ul>
  ```
- **Daftar Berurutan (Ordered List)**:
  ```html
  <ol>
      <li>Item 1</li>
      <li>Item 2</li>
      <li>Item 3</li>
  </ol>
  ```
### 6. Tabel (`<table>`, `<tr>`, `<th>`, `<td>`)
Tabel digunakan untuk menampilkan data dalam bentuk tabel.
```html
<table>
    <tr>
        <th>Nama</th>
        <th>Usia</th>
    </tr>
    <tr>
        <td>Andi</td>
        <td>25</td>
    </tr>
    <tr>
        <td>Budi</td>
        <td>30</td>
    </tr>
</table>
```

### 7. Formulir (`<form>`, `<input>`, `<button>`)
Formulir digunakan untuk mengumpulkan input dari pengguna.
```html
<form action="/submit" method="post">
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama">
    <br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email">
    <br>
    <button type="submit">Kirim</button>
</form>
```
## Kesimpulan

>HTML adalah bahasa dasar yang digunakan untuk membuat halaman web. Dengan memahami elemen-elemen dasar HTML, Anda dapat mulai membuat halaman web sederhana. Selanjutnya, Anda dapat mempelajari CSS untuk memperindah tampilan dan JavaScript untuk menambahkan interaktivitas.
