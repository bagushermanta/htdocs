<?php

$hasilTransaksi = null;
$errorTransaksi = null;

$dataMahasiswa = null;
$errorMahasiswa = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Proses Latihan 7
    if (isset($_POST["proses_transaksi"])) {
        $barang = trim($_POST["barang"] ?? "");
        $hargaInput = $_POST["harga"] ?? "";
        $jumlahInput = $_POST["jumlah"] ?? "";

        if (
            $barang === "" ||
            !is_numeric($hargaInput) ||
            !ctype_digit((string)$jumlahInput) ||
            (float)$hargaInput < 0 ||
            (int)$jumlahInput < 1
        ) {
            $errorTransaksi = "Periksa kembali nama barang, harga, dan jumlah.";
        } else {
            $harga = (float)$hargaInput;
            $jumlah = (int)$jumlahInput;
            $subtotal = $harga * $jumlah;

            $hasilTransaksi = [
                "barang" => $barang,
                "harga" => $harga,
                "jumlah" => $jumlah,
                "subtotal" => $subtotal
            ];
        }
    }

    // Proses Mini Project
    if (isset($_POST["proses_mahasiswa"])) {
        $nama = trim($_POST["nama"] ?? "");
        $nim = trim($_POST["nim"] ?? "");
        $prodi = trim($_POST["prodi"] ?? "");
        $semesterInput = $_POST["semester"] ?? "";
        $email = trim($_POST["email"] ?? "");

        if ($nama === "") {
            $errorMahasiswa[] = "Nama wajib diisi.";
        }

        if ($nim === "") {
            $errorMahasiswa[] = "NIM wajib diisi.";
        } elseif (!ctype_digit($nim)) {
            $errorMahasiswa[] = "NIM hanya boleh berisi angka.";
        }

        if ($prodi === "") {
            $errorMahasiswa[] = "Program studi wajib diisi.";
        }

        if (!ctype_digit((string)$semesterInput) ||
            (int)$semesterInput < 1 ||
            (int)$semesterInput > 14) {
            $errorMahasiswa[] = "Semester harus berupa angka 1–14.";
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errorMahasiswa[] = "Format email tidak valid.";
        }

        if (!$errorMahasiswa) {
            $dataMahasiswa = [
                "nama" => $nama,
                "nim" => $nim,
                "prodi" => $prodi,
                "semester" => (int)$semesterInput,
                "email" => $email
            ];
        }
    }
}

function rupiah($angka)
{
    return "Rp" . number_format($angka, 0, ",", ".");
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 7 PHP</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            color: #222;
            line-height: 1.6;
        }

        header {
            background: #1f2937;
            color: white;
            padding: 25px;
        }

        header h1 {
            margin: 0 0 5px;
        }

        main {
            width: 92%;
            max-width: 1000px;
            margin: 25px auto 50px;
        }

        .card {
            background: white;
            margin-bottom: 22px;
            padding: 24px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,.08);
        }

        h2 {
            margin-top: 0;
            color: #1f2937;
        }

        h3 {
            color: #374151;
        }

        label {
            display: block;
            margin-top: 12px;
            font-weight: bold;
        }

        input {
            width: 100%;
            max-width: 450px;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #bbb;
            border-radius: 5px;
        }

        button {
            margin-top: 16px;
            padding: 10px 18px;
            border: 0;
            border-radius: 5px;
            background: #2563eb;
            color: white;
            cursor: pointer;
        }

        button:hover {
            background: #1d4ed8;
        }

        .hasil {
            margin-top: 18px;
            padding: 15px;
            background: #eef6ff;
            border-left: 4px solid #2563eb;
        }

        .error {
            margin-top: 18px;
            padding: 15px;
            background: #fff1f1;
            border-left: 4px solid #dc2626;
            color: #991b1b;
        }

        code {
            background: #eee;
            padding: 2px 5px;
            border-radius: 3px;
        }

        footer {
            text-align: center;
            padding: 20px;
            color: #666;
        }
    </style>
</head>

<body>

<header>
    <h1>Praktikum 7 - Pemrograman Server-Side dengan PHP</h1>
    <p>Latihan 1 sampai 7 dan Mini Project Data Mahasiswa</p>
</header>

<main>

    <!-- LATIHAN 1 -->
    <section class="card">
        <h2>Latihan 1 - Menjalankan PHP</h2>

        <?php
        echo "<p>PHP berhasil dijalankan.</p>";
        echo "<p>Waktu server: " . date("d-m-Y H:i:s") . "</p>";
        ?>

        <p>
            Bagian ini digunakan untuk memastikan PHP sudah berjalan melalui
            web server lokal.
        </p>
    </section>

    <!-- LATIHAN 2 -->
    <section class="card">
        <h2>Latihan 2 - Variabel, Operator, dan Percabangan</h2>

        <?php
        $nama = "Siti";
        $tugas = 85;
        $uts = 78;
        $uas = 90;

        $nilaiAkhir =
            ($tugas * 0.30) +
            ($uts * 0.30) +
            ($uas * 0.40);

        if ($nilaiAkhir >= 85) {
            $predikat = "A";
        } elseif ($nilaiAkhir >= 75) {
            $predikat = "B";
        } elseif ($nilaiAkhir >= 60) {
            $predikat = "C";
        } else {
            $predikat = "D";
        }
        ?>

        <p>Nama: <?= htmlspecialchars($nama) ?></p>
        <p>Nilai Tugas: <?= $tugas ?></p>
        <p>Nilai UTS: <?= $uts ?></p>
        <p>Nilai UAS: <?= $uas ?></p>
        <p>Nilai Akhir: <?= number_format($nilaiAkhir, 2) ?></p>
        <p>Predikat: <?= $predikat ?></p>
    </section>

    <!-- LATIHAN 3 -->
    <section class="card">
        <h2>Latihan 3 - Perulangan dan Array</h2>

        <?php
        $mahasiswa = [
            "Alya",
            "Bima",
            "Citra",
            "Doni",
            "Eka",
            "Fajar",
            "Gina"
        ];
        ?>

        <ol>
            <?php foreach ($mahasiswa as $namaMahasiswa): ?>
                <li><?= htmlspecialchars($namaMahasiswa) ?></li>
            <?php endforeach; ?>
        </ol>
    </section>

    <!-- LATIHAN 4 -->
    <section class="card">
        <h2>Latihan 4 - Membuat Function</h2>

        <?php
        function hitungDiskon($harga, $persen)
        {
            $potongan = $harga * ($persen / 100);
            return $harga - $potongan;
        }

        function hitungLuasPersegiPanjang($panjang, $lebar)
        {
            return $panjang * $lebar;
        }

        $hargaAwal = 150000;
        $persenDiskon = 10;
        $hargaSetelahDiskon = hitungDiskon($hargaAwal, $persenDiskon);

        $panjang = 8;
        $lebar = 5;
        $luas = hitungLuasPersegiPanjang($panjang, $lebar);
        ?>

        <p>Harga awal: <?= rupiah($hargaAwal) ?></p>
        <p>Diskon: <?= $persenDiskon ?>%</p>
        <p>Harga setelah diskon: <?= rupiah($hargaSetelahDiskon) ?></p>

        <hr>

        <p>Panjang: <?= $panjang ?></p>
        <p>Lebar: <?= $lebar ?></p>
        <p>Luas persegi panjang: <?= $luas ?></p>
    </section>

    <!-- LATIHAN 5 -->
    <section class="card">
        <h2>Latihan 5 - Memproses Form dengan GET</h2>

        <form method="GET" action="">
            <label for="kata">Kata kunci:</label>
            <input
                id="kata"
                name="kata"
                type="text"
                value="<?= htmlspecialchars($_GET["kata"] ?? "") ?>"
            >

            <button type="submit">Cari</button>
        </form>

        <?php if (isset($_GET["kata"])): ?>
            <?php $kata = trim($_GET["kata"]); ?>

            <?php if ($kata === ""): ?>
                <div class="error">
                    Silakan masukkan kata kunci.
                </div>
            <?php else: ?>
                <div class="hasil">
                    Kata kunci yang dicari:
                    <strong><?= htmlspecialchars($kata, ENT_QUOTES, "UTF-8") ?></strong>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </section>

    <!-- LATIHAN 6 -->
    <section class="card">
        <h2>Latihan 6 - Memproses Form dengan POST</h2>

        <form method="POST" action="">
            <label for="nama_post">Nama:</label>
            <input
                id="nama_post"
                name="nama"
                type="text"
                required
            >

            <label for="prodi_post">Program Studi:</label>
            <input
                id="prodi_post"
                name="prodi"
                type="text"
                required
            >

            <button type="submit" name="kirim_data">
                Kirim Data
            </button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST" &&
            isset($_POST["kirim_data"])) {

            $namaPost = trim($_POST["nama"] ?? "");
            $prodiPost = trim($_POST["prodi"] ?? "");

            if ($namaPost === "" || $prodiPost === "") {
                echo '<div class="error">Semua kolom wajib diisi.</div>';
            } else {
                echo '<div class="hasil">';
                echo '<h3>Data diterima</h3>';
                echo 'Nama: ' .
                    htmlspecialchars($namaPost, ENT_QUOTES, "UTF-8") .
                    '<br>';
                echo 'Program Studi: ' .
                    htmlspecialchars($prodiPost, ENT_QUOTES, "UTF-8");
                echo '</div>';
            }
        }
        ?>
    </section>

    <!-- LATIHAN 7 -->
    <section class="card">
        <h2>Latihan 7 - Pengolahan Data Sederhana</h2>

        <form method="POST" action="">
            <label for="barang">Nama barang:</label>
            <input
                id="barang"
                name="barang"
                type="text"
                required
            >

            <label for="harga">Harga:</label>
            <input
                id="harga"
                name="harga"
                type="number"
                min="0"
                step="0.01"
                required
            >

            <label for="jumlah">Jumlah:</label>
            <input
                id="jumlah"
                name="jumlah"
                type="number"
                min="1"
                step="1"
                required
            >

            <button type="submit" name="proses_transaksi">
                Hitung
            </button>
        </form>

        <?php if ($errorTransaksi !== null): ?>
            <div class="error">
                <?= htmlspecialchars($errorTransaksi) ?>
            </div>
        <?php endif; ?>

        <?php if ($hasilTransaksi !== null): ?>
            <div class="hasil">
                <h3>Ringkasan Transaksi</h3>

                <p>
                    Barang:
                    <?= htmlspecialchars(
                        $hasilTransaksi["barang"],
                        ENT_QUOTES,
                        "UTF-8"
                    ) ?>
                </p>

                <p>
                    Harga:
                    <?= rupiah($hasilTransaksi["harga"]) ?>
                </p>

                <p>
                    Jumlah:
                    <?= $hasilTransaksi["jumlah"] ?>
                </p>

                <p>
                    Subtotal:
                    <strong>
                        <?= rupiah($hasilTransaksi["subtotal"]) ?>
                    </strong>
                </p>
            </div>
        <?php endif; ?>
    </section>

    <!-- MINI PROJECT -->
    <section class="card">
        <h2>Mini Project - Aplikasi Formulir Data Mahasiswa</h2>

        <p>
            Form ini digunakan untuk memasukkan data mahasiswa.
            Data diperiksa terlebih dahulu di server sebelum ditampilkan.
        </p>

        <form method="POST" action="">
            <label for="nama">Nama:</label>
            <input
                id="nama"
                name="nama"
                type="text"
                required
            >

            <label for="nim">NIM:</label>
            <input
                id="nim"
                name="nim"
                type="text"
                inputmode="numeric"
                required
            >

            <label for="prodi">Program Studi:</label>
            <input
                id="prodi"
                name="prodi"
                type="text"
                required
            >

            <label for="semester">Semester:</label>
            <input
                id="semester"
                name="semester"
                type="number"
                min="1"
                max="14"
                required
            >

            <label for="email">Email:</label>
            <input
                id="email"
                name="email"
                type="email"
                required
            >

            <button type="submit" name="proses_mahasiswa">
                Simpan Data
            </button>
        </form>

        <?php if ($errorMahasiswa): ?>
            <div class="error">
                <h3>Data belum bisa disimpan</h3>

                <ul>
                    <?php foreach ($errorMahasiswa as $pesan): ?>
                        <li><?= htmlspecialchars($pesan) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <?php if ($dataMahasiswa): ?>
            <div class="hasil">
                <h3>Data Mahasiswa</h3>

                <p>
                    Nama:
                    <?= htmlspecialchars(
                        $dataMahasiswa["nama"],
                        ENT_QUOTES,
                        "UTF-8"
                    ) ?>
                </p>

                <p>
                    NIM:
                    <?= htmlspecialchars(
                        $dataMahasiswa["nim"],
                        ENT_QUOTES,
                        "UTF-8"
                    ) ?>
                </p>

                <p>
                    Program Studi:
                    <?= htmlspecialchars(
                        $dataMahasiswa["prodi"],
                        ENT_QUOTES,
                        "UTF-8"
                    ) ?>
                </p>

                <p>
                    Semester:
                    <?= $dataMahasiswa["semester"] ?>
                </p>

                <p>
                    Email:
                    <?= htmlspecialchars(
                        $dataMahasiswa["email"],
                        ENT_QUOTES,
                        "UTF-8"
                    ) ?>
                </p>
            </div>
        <?php endif; ?>
    </section>

</main>

<footer>
    Praktikum Pemrograman Web - PHP
</footer>

</body>
</html>
