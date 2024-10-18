<?php
// index.php
include_once 'database.php'; // Menghubungkan file 'database.php' untuk koneksi database
include_once 'mahasiswa.php'; // Menghubungkan file 'database.php' untuk koneksi database
include_once 'nilai.php'; // Menghubungkan file 'database.php' untuk koneksi database

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <!-- Pengaturan karakter -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Mengatur viewport untuk responsif -->
    <title>Student Management</title> <!-- Judul halaman -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> <!-- Bootstrap CSS -->
    <style>
        .navbar {
            background-color: #ff6347; /* Warna latar belakang navbar (tomato) */
        }
        .navbar-brand, .nav-link {
            color: #fff !important; /* Mengubah warna teks navbar menjadi putih */
        }
    </style>
</head>
<body>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> <!-- jQuery untuk Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script> <!-- Popper.js untuk Bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> <!-- JavaScript Bootstrap -->
</body>
</html>
