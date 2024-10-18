<?php
// index.php
include_once 'database.php'; // Menghubungkan file 'database.php' yang mengatur koneksi ke database
include_once 'tampilkan.php';     // Menghubungkan file 'tampilkan.php' yang berfungsi untuk menampilkan data

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <!-- Pengaturan karakter agar mendukung bahasa yang digunakan -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Pengaturan tampilan responsif untuk perangkat mobile -->
    <title>Student Management</title> <!-- Judul halaman -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> <!-- Menghubungkan CSS Bootstrap -->
    <style>
        .navbar {
            background-color: #ff6347; /* Warna latar belakang navbar (tomato) */
        }
        .navbar-brand, .nav-link {
            color: #fff !important; /* Mengubah warna teks navbar menjadi putih */
        }
        .container h1 {
            color: #2f4f4f; /* Warna teks untuk judul (dark slate gray) */
        }
        .card {
            border: none;
            background-color: #ffe4b5; /* Warna latar belakang kartu (light orange) */
            color: #2f4f4f; /* Warna teks kartu (dark slate gray) */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Bayangan halus di sekitar kartu */
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light"> <!-- Navbar yang dapat diperluas -->
        <a class="navbar-brand" href="#">Sistem Mahasiswa</a> <!-- Logo/brand di navbar -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span> <!-- Ikon toggle untuk navbar di layar kecil -->
        </button>
        <div class="collapse navbar-collapse" id="navbarNav"> <!-- Navigasi collapse untuk layar kecil -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="admin.php">Admin</a> <!-- Link ke halaman admin -->
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="mahasiswaDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Data Mahasiswa <!-- Menu dropdown untuk data mahasiswa -->
                    </a>
                    <div class="dropdown-menu" aria-labelledby="mahasiswaDropdown"> <!-- Isi dropdown -->
                        <a class="dropdown-item" href="mahasiswa.php">Tampilkan Mahasiswa</a> <!-- Link ke halaman mahasiswa -->
                        <a class="dropdown-item" href="mahasiswajkt.php">Mahasiswa Jakarta</a> <!-- Link ke data mahasiswa dari Jakarta -->
                        <a class="dropdown-item" href="mahasiswapwt.php">Mahasiswa Purwokerto</a> <!-- Link ke data mahasiswa dari Purwokerto -->
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="nilai.php">Data Nilai</a> <!-- Link ke halaman data nilai mahasiswa -->
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4 text-center"> <!-- Kontainer utama dengan margin atas dan teks rata tengah -->
        <h1>Selamat Datang di Sistem Manajemen Mahasiswa</h1> <!-- Judul utama halaman -->

       
        <div class="row mt-5"> <!-- Baris dengan margin atas -->
            <div class="col-md-4"> 
                <div class="card mb-4 p-3"> <!-- margin bawah dan padding -->
                    <h5 class="card-title">Data Mahasiswa</h5> <!-- Judul -->
                    <p class="card-text">Kelola data mahasiswa dengan mudah dan cepat.</p> <!-- Deskripsi -->
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 p-3"> 
                    <h5 class="card-title">Nilai Mahasiswa</h5> <!-- Judul kedua -->
                    <p class="card-text">Akses dan kelola nilai dengan akurat.</p> <!-- Deskripsi kedua -->
                </div>
            </div>
            <div class="col-md-4"> 
                <div class="card mb-4 p-3"> 
                    <h5 class="card-title">Mahasiswa Berprestasi</h5> <!-- Judul ketiga -->
                    <p class="card-text">Temukan mahasiswa berprestasi dengan nilai terbaik.</p> <!-- Deskripsi ketiga -->
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> <!-- Menghubungkan jQuery untuk Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script> <!-- Popper.js untuk Bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> <!-- JavaScript Bootstrap -->
</body>
</html>
