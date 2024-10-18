<?php
// Menyertakan file database.php yang berisi class untuk koneksi database
include_once 'database.php';

// Menyertakan file tampilkan.php yang berisi class Mahasiswa (dan subclass-subclassnya)
// Pastikan file tampilkan.php berisi class yang mengimplementasikan polymorphism
include_once 'tampilkan.php';

// Main Program
// Membuat instance dari class Database untuk koneksi ke database
$database = new Database();

// Membuat instance dari class tampilkanMahasiswa (bisa menggunakan polymorphism untuk subclass lain seperti tampilkanMahasiswaJkt)
// $tampilkan akan digunakan untuk menampilkan data mahasiswa dari Jakarta (atau lainnya, tergantung subclass yang digunakan)
$tampilkan = new tampilkanMahasiswa($database); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management</title>

    <!-- Menggunakan Bootstrap 4.5.2 untuk styling -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Styling untuk navbar, menggunakan warna tomato */
        .navbar {
            background-color: #ff6347; /* Warna navbar */
        }

        /* Warna teks navbar diatur menjadi putih */
        .navbar-brand, .nav-link {
            color: #fff !important;
        }
    </style>
</head>
<body>

<!-- Navbar dengan menu yang dapat diperluas di perangkat kecil -->
<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="#">Sistem Mahasiswa</a> <!-- Nama brand di navbar -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span> <!-- Ikon toggle untuk perangkat kecil -->
    </button>

    <!-- Menu navigasi -->
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <!-- Link ke halaman admin -->
            <li class="nav-item">
                <a class="nav-link" href="admin.php">Admin</a>
            </li>

            <!-- Menu dropdown untuk Data Mahasiswa -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="mahasiswaDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Data Mahasiswa
                </a>

                <!-- Isi dari dropdown menu -->
                <div class="dropdown-menu" aria-labelledby="mahasiswaDropdown">
                    <a class="dropdown-item" href="mahasiswa.php">Tampilkan Mahasiswa</a> <!-- Link untuk menampilkan semua mahasiswa -->
                    <a class="dropdown-item" href="mahasiswajkt.php">Mahasiswa Jakarta</a> <!-- Link untuk menampilkan mahasiswa dari Jakarta -->
                    <a class="dropdown-item" href="mahasiswapwt.php">Mahasiswa Purwokerto</a> <!-- Link untuk menampilkan mahasiswa dari Purwokerto -->
                </div>
            </li>

            <!-- Link ke halaman data nilai mahasiswa -->
            <li class="nav-item">
                <a class="nav-link" href="nilai.php">Data Nilai</a>
            </li>
        </ul>
    </div>
</nav>

<!-- Konten halaman -->
<div class="container mt-4">
    <hr> <!-- Garis pemisah -->

    <!-- Kartu yang berisi data mahasiswa -->
    <div class="mb-4">
        <div class="card">
            <div class="card-header bg-hover text-black">
                <h3>Data Mahasiswa</h3> <!-- Judul -->
            </div>
            <div class="card-body">
                <!-- Memanggil method tampilkan dari object $tampilkan untuk menampilkan data mahasiswa -->
                <?php $tampilkan->tampilkan(); ?>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript untuk mendukung Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
