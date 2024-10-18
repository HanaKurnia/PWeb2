<?php
// index.php
include_once 'database.php'; // Menyertakan file yang berisi class Database untuk koneksi ke database

class Nilai {
    protected $db; // Properti untuk menyimpan objek koneksi database

    // Konstruktor untuk inisialisasi koneksi database
    public function __construct(Database $database) {
        $this->db = $database->conn; // Menginisialisasi properti $db dengan koneksi dari class Database
    }

    // Method untuk menampilkan data nilai mahasiswa
    public function tampilkan() {
        // Query SQL untuk mengambil data nilai dan informasi mahasiswa yang terkait
        $query = "SELECT n.nilai_id, n.mahasiswa_id, n.nilai, n.nilai_akhir, n.grade, m.nama_mhs 
                  FROM nilai n
                  JOIN mahasiswa m ON m.mahasiswa_id = n.mahasiswa_id";
        
        // Menjalankan query dan menyimpan hasilnya di variabel $result
        $result = $this->db->query($query);

        // Membuat tabel HTML untuk menampilkan data nilai mahasiswa
        echo '<table class="table table-striped">'; // Membuat tabel dengan Bootstrap styling (striped)
        echo '<thead>
                <tr>
                    <th>Id Nilai</th>
                    <th>Id Mahasiswa</th>
                    <th>Nama Mahasiswa</th>
                    <th>Nilai</th>
                    <th>Nilai Akhir</th>
                    <th>Grade</th>
                </tr>
              </thead>';
        echo '<tbody>';

        // Loop untuk menampilkan data hasil query
        while ($row = $result->fetch_assoc()) {
            echo "<tr>"; // Membuat baris tabel
            // Menampilkan setiap kolom dari hasil query dengan perlindungan XSS menggunakan htmlspecialchars()
            echo "<td>" . htmlspecialchars($row['nilai_id']) . "</td>";
            echo "<td>" . htmlspecialchars($row['mahasiswa_id']) . "</td>";
            echo "<td>" . htmlspecialchars($row['nama_mhs']) . "</td>";
            echo "<td>" . htmlspecialchars($row['nilai']) . "</td>";
            echo "<td>" . htmlspecialchars($row['nilai_akhir']) . "</td>";
            echo "<td>" . htmlspecialchars($row['grade']) . "</td>";
            echo "</tr>";
        }

        echo '</tbody>';
        echo '</table>'; // Menutup tabel HTML
    }

}

// Main Program
$database = new Database(); // Membuat instance dari class Database untuk menghubungkan ke database
$nilai = new Nilai($database); // Membuat instance dari class Nilai untuk menampilkan data nilai mahasiswa
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <!-- Mengatur encoding karakter dokumen menjadi UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Membuat halaman responsif di perangkat mobile -->
    <title>Student Management</title> <!-- Judul halaman -->

    <!-- Menggunakan Bootstrap CSS dari CDN untuk styling halaman -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        .navbar {
            background-color: #ff6347; /* Warna tomat untuk navbar */
        }
        .navbar-brand, .nav-link {
            color: #fff !important; /* Warna teks navbar putih */
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <!-- Brand atau logo pada navbar yang mengarah ke halaman index.php -->
        <a class="navbar-brand" href=index.php>Sistem Mahasiswa</a>
        
        <!-- Tombol toggle untuk navbar pada layar kecil -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span> <!-- Ikon untuk toggle menu dropdown pada layar kecil -->
        </button>

        <!-- Menu navbar -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <!-- Link ke halaman admin.php -->
                <a class="nav-link" href="admin.php">Admin</a>
            </li>
        </ul>

        <!-- Collapsible menu navbar -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <!-- Dropdown untuk menampilkan data mahasiswa -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="mahasiswaDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Data Mahasiswa <!-- Teks untuk dropdown mahasiswa -->
                    </a>
                    <!-- Isi dari dropdown yang berisi beberapa tautan untuk menampilkan data mahasiswa -->
                    <div class="dropdown-menu" aria-labelledby="mahasiswaDropdown">
                        <!-- Link ke halaman umum mahasiswa.php -->
                        <a class="dropdown-item" href=mahasiswa.php>Tampilkan Mahasiswa</a>
                        <!-- Link ke halaman yang menampilkan data mahasiswa dari Jakarta -->
                        <a class="dropdown-item" href=mahasiswajkt.php>Mahasiswa Jakarta</a>
                        <!-- Link ke halaman yang menampilkan data mahasiswa dari Purwokerto -->
                        <a class="dropdown-item" href=mahasiswapwt.php>Mahasiswa Purwokerto</a>
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
    <div class="
