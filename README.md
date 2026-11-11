
# LAPORAN PRAKTIKUM 7 — PEMROGRAMAN WEB PHP

**Nama:** Bagus Rigen Hermanta  
**NIM:** 312510145  
**Mata Kuliah:** Pemrograman Web  
**Pertemuan:** 7  
**Tanggal Praktikum:** 11 November 2026  

## A. Tujuan Praktikum

Praktikum ini bertujuan untuk memahami dasar pemrograman PHP sebagai bahasa pemrograman server-side. Materi yang dipelajari meliputi penggunaan variabel, operator, percabangan, perulangan, array, function, pemrosesan form menggunakan metode GET dan POST, serta pengolahan data sederhana.

Selain itu, praktikum ini juga bertujuan agar mahasiswa mampu membuat aplikasi formulir data mahasiswa menggunakan PHP dan melakukan validasi terhadap data yang dimasukkan pengguna.

## B. Perangkat yang Digunakan

Perangkat lunak yang digunakan dalam praktikum ini adalah:

1. Visual Studio Code sebagai editor untuk menulis kode PHP.
2. XAMPP atau Laragon sebagai server lokal.
3. PHP untuk menjalankan program server-side.
4. Google Chrome sebagai browser untuk melihat hasil program.
5. GitHub sebagai tempat menyimpan repository praktikum.

## C. Cara Menjalankan Server Lokal

Berikut langkah-langkah menjalankan program PHP menggunakan XAMPP:

1. Pastikan XAMPP sudah terinstal pada komputer.
2. Buka aplikasi XAMPP Control Panel.
3. Jalankan Apache dengan menekan tombol Start.
4. Buka folder instalasi XAMPP, kemudian masuk ke folder `htdocs`.
5. Simpan folder proyek `Lab7Web_PHP` di dalam folder `htdocs`.
6. Buka Visual Studio Code dan pilih folder proyek tersebut.
7. Buka browser Google Chrome.
8. Ketik alamat berikut pada browser:

```text
http://localhost/Lab7Web_PHP/
```

9. Pilih file PHP yang ingin dijalankan.
10. Periksa hasil program pada browser.

**Alternatif menggunakan PHP Built-in Server:**

Jika PHP sudah terpasang dan dapat dijalankan melalui terminal, buka terminal pada folder proyek kemudian jalankan:

```bash
php -S localhost:8000
```

Setelah itu, buka browser dan akses:

```text
http://localhost:8000
```

## D. Struktur Folder dan File

Struktur folder proyek yang digunakan adalah sebagai berikut:

```text
Lab7Web_PHP/
│
├── latihan1.php
├── latihan2.php
├── latihan3.php
├── latihan4.php
├── latihan5.php
├── latihan6.php
├── latihan7.php
│
├── mini_project.php
│
├── README.md
│
└── screenshots/
    ├── 01-menjalankan-php.png
    ├── 02-variabel-operator-percabangan.png
    ├── 03-perulangan-array.png
    ├── 04-membuat-function.png
    ├── 05-form-get.png
    ├── 06-form-post.png
    ├── 07-pengolahan-data.png
    ├── 08-form-mahasiswa.png
    ├── 09-form-mahasiswa-valid.png
    ├── 10-form-mahasiswa-tidak-valid.png
    ├── 11-pengujian-valid-2.png
    └── 12-pengujian-tidak-valid-2.png
```

*Catatan: Nama file di atas merupakan contoh penamaan agar folder lebih rapi. Jika nama file PHP yang sudah dibuat berbeda, sesuaikan dengan file yang ada di repository.*

---

# E. Langkah Kerja Praktikum

## 1. Latihan 1 — Menjalankan PHP

Pada latihan pertama, dilakukan pengenalan dasar PHP dengan membuat file PHP dan menjalankannya melalui server lokal. Latihan ini bertujuan untuk memastikan PHP dapat diproses oleh server dan hasilnya dapat ditampilkan melalui browser.

**Langkah kerja:**

1. Membuat file dengan nama `latihan1.php`.
2. Menuliskan kode PHP pada file tersebut.
3. Menambahkan struktur dasar PHP menggunakan tag `<?php` dan `?>`.
4. Menjalankan Apache melalui XAMPP.
5. Membuka file melalui browser menggunakan alamat localhost.
6. Memastikan hasil tulisan PHP berhasil ditampilkan pada halaman browser.

**Hasil praktikum:**

<img width="649" height="290" alt="image" src="https://github.com/user-attachments/assets/468dc274-8fe0-4efd-ba26-7b93a9f104fd" />
<img width="628" height="305" alt="image" src="https://github.com/user-attachments/assets/e801644e-6a36-4c70-812e-ed93c720cdd6" />

## 2. Latihan 2 — Variabel, Operator, dan Percabangan

Pada latihan kedua, dipelajari penggunaan variabel, operator, dan percabangan dalam PHP. Variabel digunakan untuk menyimpan data, operator digunakan untuk melakukan perhitungan, sedangkan percabangan digunakan untuk menentukan hasil berdasarkan kondisi tertentu.

**Langkah kerja:**

1. Membuat file `latihan2.php`.
2. Membuat beberapa variabel untuk menyimpan data.
3. Menggunakan operator aritmatika untuk melakukan perhitungan.
4. Menggunakan percabangan `if`, `else if`, dan `else`.
5. Menampilkan hasil variabel dan proses perhitungan.
6. Menjalankan program melalui browser.
7. Memeriksa apakah hasil yang ditampilkan sesuai dengan perintah program.

**Hasil praktikum:**

<img width="547" height="639" alt="image" src="https://github.com/user-attachments/assets/1c41c816-9614-4768-80b6-0721e8a2f20a" />
<img width="613" height="291" alt="image" src="https://github.com/user-attachments/assets/85383964-a435-446d-b2fd-603c2d9d7668" />

## 3. Latihan 3 — Perulangan dan Array

Latihan ketiga membahas penggunaan perulangan dan array dalam PHP. Array digunakan untuk menyimpan beberapa data dalam satu variabel, sedangkan perulangan digunakan untuk menampilkan atau memproses data secara berulang.

**Langkah kerja:**

1. Membuat file `latihan3.php`.
2. Membuat sebuah array yang berisi beberapa data.
3. Menggunakan perulangan `foreach` untuk membaca setiap isi array.
4. Menampilkan data satu per satu pada halaman browser.
5. Menjalankan program dan memastikan seluruh data berhasil ditampilkan.

**Hasil praktikum:**





## 4. Latihan 4 — Membuat Function

Pada latihan keempat, dipelajari cara membuat dan menggunakan function pada PHP. Function digunakan untuk mengelompokkan perintah tertentu agar dapat digunakan kembali tanpa harus menulis kode yang sama secara berulang.

**Langkah kerja:**

1. Membuat file `latihan4.php`.
2. Membuat function untuk melakukan perhitungan.
3. Menentukan parameter yang dibutuhkan oleh function.
4. Menggunakan `return` untuk mengembalikan hasil perhitungan.
5. Memanggil function dengan memberikan nilai parameter.
6. Menampilkan hasil function pada browser.

**Hasil praktikum:**

![Latihan 4 - Membuat Function](screenshots/04-membuat-function.png)

## 5. Latihan 5 — Memproses Form dengan GET

Latihan kelima membahas cara menerima dan memproses data dari form menggunakan metode GET. Data yang dikirim melalui metode GET akan ditampilkan sebagai parameter pada alamat URL browser.

**Langkah kerja:**

1. Membuat file `latihan5.php`.
2. Membuat form HTML untuk menerima data pengguna.
3. Mengatur atribut `method` menjadi `GET`.
4. Menentukan atribut `name` pada setiap input.
5. Mengambil data yang dikirim menggunakan variabel `$_GET`.
6. Menampilkan hasil data yang diterima.
7. Menguji form dengan memasukkan data melalui browser.

**Hasil praktikum:**

![Latihan 5 - Form GET](screenshots/05-form-get.png)

## 6. Latihan 6 — Memproses Form dengan POST

Latihan keenam mempelajari pemrosesan data form menggunakan metode POST. Berbeda dengan GET, data yang dikirim menggunakan POST berada pada bagian body permintaan dan tidak ditampilkan sebagai parameter pada URL.

**Langkah kerja:**

1. Membuat file `latihan6.php`.
2. Membuat form HTML untuk menerima input pengguna.
3. Mengatur atribut `method` menjadi `POST`.
4. Menentukan nama pada setiap kolom input.
5. Mengambil data menggunakan variabel `$_POST`.
6. Memeriksa data yang dikirim sebelum ditampilkan.
7. Menjalankan program melalui browser.
8. Memastikan data berhasil diterima dan ditampilkan.

**Hasil praktikum:**

![Latihan 6 - Form POST](screenshots/06-form-post.png)

## 7. Latihan 7 — Pengolahan Data Sederhana

Pada latihan ketujuh, dilakukan pengolahan data sederhana menggunakan PHP. Pengguna memasukkan data melalui form, kemudian PHP menerima dan memproses data tersebut untuk menampilkan hasilnya.

**Langkah kerja:**

1. Membuat file `latihan7.php`.
2. Membuat form untuk memasukkan data.
3. Menentukan nama setiap input.
4. Mengambil data yang dikirim oleh pengguna.
5. Melakukan pemeriksaan terhadap data yang diterima.
6. Mengolah data sesuai perintah program.
7. Menampilkan hasil pengolahan pada halaman browser.
8. Menguji program menggunakan beberapa data masukan.

**Hasil praktikum:**

![Latihan 7 - Pengolahan Data Sederhana](screenshots/07-pengolahan-data.png)

---

# F. Mini Project — Aplikasi Formulir Data Mahasiswa

Mini project ini merupakan penerapan materi PHP yang telah dipelajari sebelumnya. Program dibuat untuk menerima data mahasiswa melalui formulir, kemudian memproses dan menampilkan data yang telah dimasukkan.

Formulir terdiri dari beberapa kolom, yaitu:

1. Nama.
2. NIM.
3. Program Studi.
4. Semester.
5. Email.

## Langkah Kerja

1. Membuat file `mini_project.php`.
2. Membuat struktur HTML untuk formulir data mahasiswa.
3. Menambahkan kolom input Nama, NIM, Program Studi, Semester, dan Email.
4. Membuat tombol untuk mengirim data.
5. Menggunakan PHP untuk menerima data dari formulir.
6. Melakukan pemeriksaan terhadap data yang dimasukkan.
7. Menggunakan `htmlspecialchars()` ketika menampilkan kembali data pengguna agar karakter khusus HTML tidak diproses sebagai kode HTML.
8. Menampilkan hasil data mahasiswa apabila data telah memenuhi ketentuan.
9. Menguji formulir menggunakan data yang benar dan data yang tidak sesuai.

## Hasil Mini Project

**1. Tampilan formulir data mahasiswa**

![Mini Project - Formulir Data Mahasiswa](screenshots/08-form-mahasiswa.png)

**2. Pengujian data valid**

Formulir diisi menggunakan data mahasiswa yang sesuai dengan ketentuan. Setelah tombol simpan data ditekan, program memproses dan menampilkan data yang dimasukkan.

![Mini Project - Data Valid](screenshots/09-form-mahasiswa-valid.png)

**3. Pengujian data tidak valid**

Formulir diuji dengan memasukkan data yang tidak sesuai atau membiarkan kolom wajib kosong. Program diharapkan menampilkan pesan kesalahan dan tidak memproses data yang belum memenuhi ketentuan.

![Mini Project - Data Tidak Valid](screenshots/10-form-mahasiswa-tidak-valid.png)

---

# G. Pengujian Input Valid dan Tidak Valid

Pengujian dilakukan untuk memastikan program dapat menerima data yang benar dan menolak data yang tidak sesuai dengan ketentuan.

## 1. Kasus Input Valid

**Kasus 1 — Seluruh data mahasiswa diisi dengan benar**

- Nama: Bagus Rigen Hermanta
- NIM: 312510145
- Program Studi: Teknik Informatika
- Semester: 5
- Email: bagus@example.com

Hasil yang diharapkan: Data diterima dan ditampilkan oleh program.

**Kasus 2 — Mengisi data mahasiswa dengan email yang sesuai**

- Nama: Andi
- NIM: 312510146
- Program Studi: Teknik Informatika
- Semester: 3
- Email: andi@example.com

Hasil yang diharapkan: Data dapat diproses apabila seluruh kolom memenuhi aturan validasi.

## 2. Kasus Input Tidak Valid

**Kasus 1 — Formulir dikirim dalam keadaan kosong**

Seluruh kolom tidak diisi, kemudian tombol simpan data ditekan.

Hasil yang diharapkan: Program menampilkan pesan bahwa data wajib diisi dan tidak memproses formulir.

**Kasus 2 — Memasukkan format email yang salah**

- Nama: Bagus
- NIM: 312510145
- Program Studi: Teknik Informatika
- Semester: 5
- Email: bagus123

Hasil yang diharapkan: Program menolak data karena format email tidak sesuai.

## 3. Dokumentasi Pengujian

**Pengujian valid kedua:**

![Pengujian Input Valid](screenshots/11-pengujian-valid-2.png)

**Pengujian tidak valid kedua:**

![Pengujian Input Tidak Valid](screenshots/12-pengujian-tidak-valid-2.png)

*Catatan: Data di atas merupakan contoh skenario pengujian. Hasil yang diharapkan harus dibuktikan dengan menjalankan program. Jika aturan validasi pada kode berbeda,
