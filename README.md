# Praktikum Web 2
## Tugas 2
1. Membuat View berbasis OOP, dengan mengambil data dari database MySQL
2. Gunakan _construct sebagai link ke database
3. Terapkan enkapsulasi sesuai logika studi kasus
4. Membuat kelas turunan menggunakan konsep pewarisan
5. Terapkan polimorfisme untuk minimal 2 peran sesuai studi kasus
6. NPM 1,2 Studi kasus mahasiswa & nilai

### 1. Membuat database universitas
```  php
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

```
### Deskripsi
Kelas Database ini berfungsi untuk mengelola koneksi ke database MySQL. Kelas ini secara
otomatis menghubungkan ke database ketika diinstansiasi. Kelas ini menggunakan objek mysqli
untuk melakukan koneksi dan memastikan koneksi berhasil.

### - Struktur Kelas
1. Properti
- $host : Nama host server database (default: localhost).
- $db_name : Nama database yang akan dihubungkan
- $username : Nama pengguna MySQL untuk autentifikasi (default: root).
- $password : Kata sandi pengguna MySQL (default: '', tidak ada password.
- $conn : Objek koneksi mysqli yang menyimpan koneksi ke database.
2. Konstruktor
- __construct() :  Saat kelas diinstansiasi, konstruktor ini akan memanggil fungsi connect()
untuk membuat koneksi ke database.
3. Metode Kelas
- connect() : Metode ini digunakan untuk melakukan koneksi ke database MySQL. Jika koneksi gagal, metode ini akan memberi pesan kesalahan dan menghentikan eksekusi dengan die(), jika berhasil, koneksi akan disimpan dalam properti $conn.
