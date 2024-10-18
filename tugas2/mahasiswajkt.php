<?php
// Menyertakan file database.php yang berisi class untuk koneksi database
include_once 'database.php';

// Menyertakan file tampilkan.php yang berisi class Mahasiswa dan subclassnya, seperti tampilkanMahasiswaJkt
include_once 'tampilkan.php';

// Main Program
// Membuat instance dari class Database untuk menghubungkan ke database
$database = new Database();

// Membuat instance dari class tampilkanMahasiswaJkt untuk menampilkan mahasiswa dari Jakarta
// Menggunakan polymorphism karena kita bisa mengganti dengan class lain yang mewarisi class Mahasiswa
$tampilkan = new tampilkanMahasiswaJkt($database);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <!-- Mengatur encoding dokumen menjadi UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Membuat halaman responsif di perangkat mobile -->
    <title>Student Management</title> <!-- Judul halaman -->
    
    <!-- Menggunakan Bootstrap CSS dari CDN untuk styling halaman -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar {
            background-color: #ff6347; /* Memberikan warna tomat untuk navbar */
        }
        .navbar-brand, .nav-link {
            color: #fff !important; /* Memastikan teks navbar berwarna putih */
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light"> <!-- Navbar yang dapat diperluas (expand) pada ukuran layar yang lebih besar -->
        <a class="navbar-brand" href="#">Sistem Mahasiswa</a> <!-- Brand atau logo yang ditampilkan pada navbar -->
        
        <!-- Tombol toggle untuk navbar saat di layar kecil -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span> <!-- Ikon untuk toggle (menu dropdown di layar kecil) -->
        </button>

        <!-- Menu navbar, yang bisa di-collapse pada layar kecil -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <!-- Link ke halaman admin.php -->
                    <a class="nav-link" href="admin.php">Admin</a>
                </li>
                <!-- Dropdown untuk data mahasiswa -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="mahasiswaDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Data Mahasiswa <!-- Teks untuk menu dropdown -->
                    </a>
                    <!-- Isi dari dropdown, yang menampilkan berbagai tautan terkait mahasiswa -->
                    <div class="dropdown-menu" aria-labelledby="mahasiswaDropdown">
                        <!-- Link ke halaman tampilkan mahasiswa umum -->
                        <a class="dropdown-item" href="mahasiswa.php">Tampilkan Mahasiswa</a>
                        <!-- Link ke halaman mahasiswa yang berdomisili di Jakarta -->
                        <a class="dropdown-item" href="mahasiswajkt.php">Mahasiswa Jakarta</a>
                        <!-- Link ke halaman mahasiswa yang berdomisili di Purwokerto -->
                        <a class="dropdown-item" href="mahasiswapwt.php">Mahasiswa Purwokerto</a>
                    </div>
                </li>
                <li class="nav-item">
                    <!-- Link ke halaman nilai.php -->
                    <a class="nav-link" href="nilai.php">Data Nilai</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Konten utama halaman -->
    <div class="container mt-4"> <!-- Container Bootstrap untuk memberi
