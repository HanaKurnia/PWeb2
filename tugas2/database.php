<?php
// Kelas Database untuk melakukan koneksi ke database MySQL
class Database {
    // Deklarasi variabel untuk menyimpan informasi koneksi
    private $host = 'localhost';        // Nama host, defaultnya 'localhost'
    private $db_name = 'universitas';   // Nama database yang akan digunakan
    private $username = 'root';         // Username untuk mengakses database, defaultnya 'root'
    private $password = '';             // Password untuk mengakses database, defaultnya kosong
    public $conn;                       // Variabel untuk menyimpan koneksi

    // Konstruktor untuk memanggil fungsi connect() saat objek dibuat
    public function __construct() {
        $this->connect();
    }

    // Fungsi untuk menghubungkan ke database
    private function connect() {
        // Membuat koneksi ke MySQL menggunakan mysqli
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db_name);
        
        // Memeriksa apakah koneksi berhasil
        if ($this->conn->connect_error) {
            // Jika gagal, tampilkan pesan error dan hentikan script
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
}
?>
