
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

<img width="638" height="502" alt="image" src="https://github.com/user-attachments/assets/c2ecb24c-dcd4-4d04-b50f-559d9972b1f9" />
<img width="636" height="379" alt="image" src="https://github.com/user-attachments/assets/ee5b3bbb-fc3c-411e-b040-23a8ce032318" />

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

<img width="680" height="753" alt="image" src="https://github.com/user-attachments/assets/1f900de4-631b-47c6-a7a6-eaa3dcf2e9d3" />
<img width="676" height="472" alt="image" src="https://github.com/user-attachments/assets/a29f9e8b-02c3-435d-b6b9-4034ccc141c9" />

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

<img width="719" height="581" alt="image" src="https://github.com/user-attachments/assets/9fde1a9b-28c6-44e8-a392-0cc8d09d157d" />
<img width="618" height="165" alt="image" src="https://github.com/user-attachments/assets/c9a55145-b405-44da-a098-3df9e22c4783" />

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

<img width="427" height="626" alt="image" src="https://github.com/user-attachments/assets/805489c1-e2f4-4980-9f01-2d5b7e468966" />
<img width="425" height="145" alt="image" src="https://github.com/user-attachments/assets/66cd7d3e-96c0-4733-9d12-4240fb067962" />

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

<img width="413" height="1075" alt="image" src="https://github.com/user-attachments/assets/a183dff7-abc9-45d3-9857-ba8a43dd4e46" />
<img width="434" height="191" alt="image" src="https://github.com/user-attachments/assets/cd79436e-cb4a-4a00-9114-73d2fa16d431" />

---

# F. Mini Project — Aplikasi Formulir Data Mahasiswa

Mini project ini membuat aplikasi formulir data mahasiswa menggunakan PHP dan HTML. Formulir digunakan untuk memasukkan data mahasiswa, kemudian data diperiksa terlebih dahulu di server sebelum ditampilkan pada halaman web.

## 1. Membuat Formulir Data Mahasiswa

Langkah kerja:

1. Membuat bagian formulir menggunakan HTML.
2. Menggunakan metode POST untuk mengirim data.
3. Membuat input Nama.
4. Membuat input NIM.
5. Membuat input Program Studi.
6. Membuat input Semester dengan tipe number, nilai minimum 1 dan maksimum 14.
7. Membuat input Email.
8. Menambahkan atribut required pada setiap input.
9. Membuat tombol Simpan Data untuk mengirim formulir.

**Screenshot kode PHP:**

<img width="462" height="647" alt="image" src="https://github.com/user-attachments/assets/80fadd37-e69e-4043-a3ba-d3aba2cd8b29" />
<img width="458" height="650" alt="image" src="https://github.com/user-attachments/assets/a137318d-f8ea-4e26-8664-38a907407b64" />
<img width="489" height="660" alt="image" src="https://github.com/user-attachments/assets/c581e048-96ca-4098-93b9-31281129f220" />

## 2. Memproses dan Menampilkan Data Mahasiswa

Langkah kerja:

1. Mengambil data formulir menggunakan variabel `$_POST`.
2. Memeriksa data mahasiswa menggunakan PHP.
3. Jika terdapat kesalahan, program menampilkan pesan Data belum bisa disimpan beserta daftar kesalahannya.
4. Jika data berhasil diproses, program menampilkan bagian Data Mahasiswa.
5. Menggunakan `htmlspecialchars()` untuk mengamankan data ketika ditampilkan kembali ke halaman.

**Screenshot hasil program:**
<img width="940" height="530" alt="image" src="https://github.com/user-attachments/assets/81282087-c2eb-4b30-8fe0-6cd2b5b06bd5" />

# H. Pertanyaan Evaluasi

## 1. Apa perbedaan pemrosesan client-side dan server-side?

Client-side adalah proses yang dijalankan di browser pengguna, contohnya HTML, CSS, dan JavaScript. Sedangkan server-side adalah proses yang dijalankan di server, seperti PHP. PHP memproses data di server kemudian hasilnya dikirim kembali ke browser.

## 2. Mengapa file PHP harus dijalankan melalui web server?

Karena PHP merupakan bahasa pemrograman server-side, sehingga kodenya harus diproses oleh server terlebih dahulu. Jika file PHP hanya dibuka langsung dari folder komputer, kode PHP tidak akan diproses seperti ketika dijalankan melalui XAMPP atau Laragon.

## 3. Apa fungsi tanda $ pada variabel PHP?

Tanda `$` digunakan untuk menandai sebuah variabel dalam PHP. Contohnya `$nama`, `$umur`, dan `$nilai`. Dengan tanda tersebut, PHP dapat mengetahui bahwa data tersebut merupakan sebuah variabel.

## 4. Apa perbedaan metode GET dan POST?

GET mengirim data melalui parameter URL sehingga data yang dikirim bisa terlihat pada alamat browser. Sedangkan POST mengirim data melalui body permintaan sehingga datanya tidak ditampilkan pada URL. POST biasanya digunakan untuk mengirim data dari form.

## 5. Mengapa input pengguna perlu divalidasi di sisi server?

Karena data yang dikirim pengguna belum tentu sesuai dengan yang dibutuhkan program. Validasi di server digunakan untuk memastikan data yang diterima benar dan sesuai aturan. Jadi, walaupun validasi sudah dilakukan pada form, server tetap harus melakukan pengecekan.

## 6. Apa fungsi htmlspecialchars() ketika menampilkan data dari form?

`htmlspecialchars()` digunakan untuk mengubah karakter khusus HTML menjadi bentuk yang aman ketika data pengguna ditampilkan kembali ke halaman. Hal ini membantu mengurangi risiko input pengguna dianggap sebagai kode HTML atau script.

## 7. Apa manfaat penggunaan function dalam program PHP?

Function membuat kode lebih teratur dan bisa digunakan kembali. Jadi, jika ada proses yang sama, kita tidak perlu menulis kode tersebut berulang kali. Contohnya function untuk menghitung diskon atau luas persegi panjang.

---

# I. Kesimpulan

Berdasarkan praktikum yang telah dilakukan, PHP merupakan bahasa pemrograman server-side yang dapat digunakan untuk memproses data dan membuat halaman web menjadi lebih dinamis.

Materi yang dipelajari meliputi penggunaan variabel, operator, percabangan, perulangan, array, function, serta pemrosesan form menggunakan metode GET dan POST. Selain itu, dilakukan pengolahan data sederhana dan pembuatan mini project berupa Aplikasi Formulir Data Mahasiswa.

Melalui praktikum ini, dapat dipahami bahwa data dari pengguna perlu diperiksa terlebih dahulu sebelum diproses atau ditampilkan kembali. Dengan demikian, PHP dapat digunakan untuk membangun aplikasi web yang lebih terstruktur dan mampu menangani input pengguna.

---

# J. Pengumpulan Tugas

1. Seluruh file latihan PHP disimpan dalam folder `Lab7Web_PHP`.
2. Mini project Aplikasi Formulir Data Mahasiswa disertakan dalam repository.
3. File `README.md` berisi tujuan, perangkat, cara menjalankan server lokal, struktur file, langkah kerja, hasil praktikum, dan pertanyaan evaluasi.
4. Screenshot hasil setiap latihan dan pengujian form dimasukkan ke folder `screenshots`.
5. Seluruh perubahan disimpan dan di-commit ke repository GitHub.
6. URL repository dikumpulkan melalui e-learning/ecampus sesuai arahan dosen.

**Repository:** Lab7Web_PHP
