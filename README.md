# Praktikum Web 2
## Tugas 2
## 1. Membuat View berbasis OOP, dengan mengambil data dari database MySQL
Untuk membuat View berbasis Object-Oriented Programming (OOP), kita menggunakan kelas View di
dalam file view.php. Kelas ini bertanggung jawab untuk menampilkan data mahasiswa yang diambil
dari database MySQL.
### Langkah-langkahnya:

- Kelas View: Kelas ini diimplementasikan untuk menampilkan data mahasiswa. Kelas ini memiliki
sebuah properti private $db yang menyimpan koneksi database.

- Konstruktor: Konstruktor dari kelas View menerima objek Database sebagai parameter, yang
digunakan untuk menginisialisasi koneksi ke database MySQL. Ini memungkinkan kelas View untuk
memanfaatkan database secara efisien.
``` php
class View {
    private $db;
    
    public function __construct(Database $database) {
        $this->db = $database->conn;
    }
    
    public function tampilkanMahasiswa() {
        $query = "SELECT mahasiswa_id, nim, nama_mhs, alamat, email, no_telp, jurusan FROM mahasiswa";
        $result = $this->db->query($query);
        // Menampilkan data dalam bentuk tabel HTML
    }
}
```
2. Gunakan _construct sebagai link ke database
3. Terapkan enkapsulasi sesuai logika studi kasus
4. Membuat kelas turunan menggunakan konsep pewarisan
5. Terapkan polimorfisme untuk minimal 2 peran sesuai studi kasus
6. NPM 1,2 Studi kasus mahasiswa & nilai

### 1. Membuat database universitas
- Tabel Mahasiswa
![table_mhs](https://github.com/user-attachments/assets/3e0def96-d143-4252-ac2b-39b79b33cc88)
- Tabel Nilai
![table_nilai](https://github.com/user-attachments/assets/c5fee227-3d94-46f5-997d-73de738e533f)

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

### Struktur Kelas
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
- connect() : Metode ini digunakan untuk melakukan koneksi ke database MySQL. Jika koneksi
gagal, metode ini akan memberi pesan kesalahan dan menghentikan eksekusi dengan die(), jika
berhasil, koneksi akan disimpan dalam properti $conn.
