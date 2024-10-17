# Praktikum Web 2
## Tugas 2
1. Membuat View berbasis OOP, dengan mengambil data dari database MySQL
2. Gunakan _construct sebagai link ke database
3. Terapkan enkapsulasi sesuai logika studi kasus
4. Membuat kelas turunan menggunakan konsep pewarisan
5. Terapkan polimorfisme untuk minimal 2 peran sesuai studi kasus
6. Studi kasus mahasiswa & nilai

1. Membuat database universitas
''' php
<?php
//Koneksi
class Database {
    private $host = 'localhost';
    private $db_name = 'universitas';
    private $username = 'root';
    private $password = '';
    public $conn;

    public function __construct() {
        $this->connect();
    }

    private function connect() {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db_name);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
}
?>
'''
### Deskripsi
Kelas Database ini berfungsi untuk mengelola koneksi ke database MySQL. Kelas ini secara otomatis menghubungkan ke database ketika diinstansiasi. Kelas ini menggunakan objek mysqli untuk melakukan koneksi dan memastikan koneksi berhasil.
