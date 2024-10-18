<?php

// Menyertakan file database.php yang berisi class Database untuk koneksi ke database
include_once 'database.php';

// Menyertakan file tampilkan.php yang berisi class Mahasiswa dan subclassnya (misalnya tampilkanMahasiswaPwt)
include_once 'tampilkan.php';

// Main Program
// Membuat instance dari class Database untuk menghubungkan ke database
$database = new Database();

// Membuat instance dari class tampilkanMahasiswaPwt yang akan digunakan untuk menampilkan data mahasiswa Purwokerto
// Menggunakan polymorphism, di mana class ini adalah subclass dari Mahasiswa
$tampilkan = new tampilkanMahasiswaPwt($database);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
                .navbar {
            background-color: #ff6347; /* Tomato color for the navbar */
        }
        .navbar-brand, .nav-link {
            color: #fff !important;
        }
        </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href=index.php>Sistem Mahasiswa</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="admin.php">Admin</a>
                </li>
        </ul> 
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="mahasiswaDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Data Mahasiswa
                    </a>
                    <div class="dropdown-menu" aria-labelledby="mahasiswaDropdown">
                        <a class="dropdown-item" href=mahasiswa.php>Tampilkan Mahasiswa</a>
                        <a class="dropdown-item" href=mahasiswajkt.php>Mahasiswa Jakarta</a>
                        <a class="dropdown-item" href=mahasiswapwt.php>Mahasiswa Purwokerto</a>
                    </div>
                </li>
                    <li class="nav-item">
                    <a class="nav-link" href="nilai.php">Data Nilai</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">

        <hr> <!-- Separator -->

        <div class="mb-4">
            <div class="card">
            <div class="card-header bg-hover text-black">
                    <h3>Data Mahasiswa Purwokerto</h3>
                </div>
                <div class="card-body">
                    <?php $tampilkan->tampilkan(); ?>
                </div>
            </div>
        </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
