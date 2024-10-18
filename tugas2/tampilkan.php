<?php
// index.php
include_once 'database.php'; // Menyertakan file database.php yang berisi class Database untuk koneksi database

// Kelas induk Mahasiswa
class Mahasiswa {
    protected $db; // Properti untuk menyimpan koneksi database

    // Konstruktor menerima objek Database dan menginisialisasi koneksi
    public function __construct(Database $database) {
        $this->db = $database->conn; // Menginisialisasi properti $db dengan koneksi database
    }

    // Method ini akan di-override oleh kelas turunan
    public function tampilkan() {
        // Implementasi dasar, hanya pesan default
        echo "Tampilkan data belum diimplementasikan di kelas ini.";
    }
}

// Kelas turunan yang mewarisi dari Mahasiswa, digunakan untuk menampilkan semua data mahasiswa
class tampilkanMahasiswa extends Mahasiswa {
    // Override method tampilkan untuk menampilkan semua data mahasiswa
    public function tampilkan() {
        // Query SQL untuk mengambil semua data mahasiswa
        $query = "SELECT mahasiswa_id, nim, nama_mhs, jurusan, alamat, email, no_telp FROM mahasiswa";
        $result = $this->db->query($query); // Menjalankan query dan menyimpan hasilnya

        // Membuat tabel HTML dengan Bootstrap styling untuk menampilkan data mahasiswa
        echo '<table class="table table-striped">';
        echo '<thead>
                <tr>
                    <th>Id Mahasiswa</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>No Telp</th>
                </tr>
              </thead>';
        echo '<tbody>';

        // Mengambil hasil query satu per satu dan menampilkannya ke dalam tabel
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            // Menampilkan setiap kolom dengan menggunakan htmlspecialchars() untuk menghindari XSS
            echo "<td>" . htmlspecialchars($row['mahasiswa_id']) . "</td>";
            echo "<td>" . htmlspecialchars($row['nim']) . "</td>";
            echo "<td>" . htmlspecialchars($row['nama_mhs']) . "</td>";
            echo "<td>" . htmlspecialchars($row['jurusan']) . "</td>";
            echo "<td>" . htmlspecialchars($row['alamat']) . "</td>";
            echo "<td>" . htmlspecialchars($row['email']) . "</td>";
            echo "<td>" . htmlspecialchars($row['no_telp']) . "</td>";
            echo "</tr>";
        }

        echo '</tbody>';
        echo '</table>'; // Menutup tabel HTML
    }
}

// Kelas turunan untuk menampilkan data mahasiswa dari Jakarta
class tampilkanMahasiswaJkt extends Mahasiswa {
    // Override method tampilkan untuk menampilkan mahasiswa yang berdomisili di Jakarta
    public function tampilkan() {
        // Query SQL untuk mengambil data mahasiswa yang berdomisili di Jakarta
        $query = "SELECT mahasiswa_id, nim, nama_mhs, jurusan, alamat, email, no_telp FROM mahasiswa WHERE alamat = 'jakarta'";
        $result = $this->db->query($query); // Menjalankan query dan menyimpan hasilnya

        // Membuat tabel HTML untuk menampilkan data mahasiswa dari Jakarta
        echo '<table class="table table-striped">';
        echo '<thead>
                <tr>
                    <th>Id Mahasiswa</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>No Telp</th>
                </tr>
              </thead>';
        echo '<tbody>';

        // Loop untuk menampilkan setiap data mahasiswa dari hasil query
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            // Menampilkan data dari setiap kolom dengan htmlspecialchars()
            echo "<td>" . htmlspecialchars($row['mahasiswa_id']) . "</td>";
            echo "<td>" . htmlspecialchars($row['nim']) . "</td>";
            echo "<td>" . htmlspecialchars($row['nama_mhs']) . "</td>";
            echo "<td>" . htmlspecialchars($row['jurusan']) . "</td>";
            echo "<td>" . htmlspecialchars($row['alamat']) . "</td>";
            echo "<td>" . htmlspecialchars($row['email']) . "</td>";
            echo "<td>" . htmlspecialchars($row['no_telp']) . "</td>";
            echo "</tr>";
        }

        echo '</tbody>';
        echo '</table>'; // Menutup tabel HTML
    }
}

// Kelas turunan untuk menampilkan data mahasiswa dari Purwokerto
class tampilkanMahasiswaPwt extends Mahasiswa {
    // Override method tampilkan untuk menampilkan mahasiswa yang berdomisili di Purwokerto
    public function tampilkan() {
        // Query SQL untuk mengambil data mahasiswa yang berdomisili di Purwokerto
        $query = "SELECT mahasiswa_id, nim, nama_mhs, jurusan, alamat, email, no_telp FROM mahasiswa WHERE alamat = 'purwokerto'";
        $result = $this->db->query($query); // Menjalankan query dan menyimpan hasilnya

        // Membuat tabel HTML untuk menampilkan data mahasiswa dari Purwokerto
        echo '<table class="table table-striped">';
        echo '<thead>
                <tr>
                    <th>Id Mahasiswa</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>No Telp</th>
                </tr>
              </thead>';
        echo '<tbody>';

        // Loop untuk menampilkan setiap data mahasiswa dari hasil query
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            // Menampilkan data dari setiap kolom dengan htmlspecialchars()
            echo "<td>" . htmlspecialchars($row['mahasiswa_id']) . "</td>";
            echo "<td>" . htmlspecialchars($row['nim']) . "</td>";
            echo "<td>" . htmlspecialchars($row['nama_mhs']) . "</td>";
            echo "<td>" . htmlspecialchars($row['jurusan']) . "</td>";
            echo "<td>" . htmlspecialchars($row['alamat']) . "</td>";
            echo "<td>" . htmlspecialchars($row['email']) . "</td>";
            echo "<td>" . htmlspecialchars($row['no_telp']) . "</td>";
            echo "</tr>";
        }

        echo '</tbody>';
        echo '</table>'; // Menutup tabel HTML
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <!-- Menetapkan encoding karakter dokumen menjadi UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Mengatur viewport agar halaman responsif di perangkat mobile -->
    <title>Student Management</title> <!-- Judul halaman -->

    <!-- Menyertakan Bootstrap CSS untuk styling halaman -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS tambahan untuk mengatur tampilan navbar -->
    <style>
        .navbar {
            background-color: #ff6347; /* Warna tomat untuk navbar */
        }
        .navbar-brand, .nav-link {
            color: #fff !important; /* Mengubah warna teks navbar menjadi putih */
        }
    </style>
</head>
<body>

<!-- Menyertakan JavaScript Bootstrap untuk mendukung interaktivitas seperti dropdown -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
