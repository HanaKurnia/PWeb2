# Praktikum Web 2
## Deskripsi

## Tugas 2
## 1. Membuat View berbasis OOP, dengan mengambil data dari database MySQL
Untuk membuat View berbasis Object-Oriented Programming (OOP), kita menggunakan kelas View di
dalam file view.php. Kelas ini bertanggung jawab untuk menampilkan data mahasiswa yang diambil
dari database MySQL.
### Langkah-langkah:

- Kelas View: Kelas ini diimplementasikan untuk menampilkan data mahasiswa. Kelas ini memiliki
sebuah properti private $db yang menyimpan koneksi database.

- Konstruktor: Konstruktor dari kelas View menerima objek Database sebagai parameter, yang
digunakan untuk menginisialisasi koneksi ke database MySQL. Ini memungkinkan kelas View untuk
memanfaatkan database secara efisien.
- Mengambil Data dari Database: Dalam fungsi tampilkanMahasiswa(), kelas View menjalankan query
SQL ke database untuk mengambil data mahasiswa, dan kemudian data ini ditampilkan dalam bentuk
tabel HTML.
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

### Langkah-langkah:

Saat objek dari kelas Database dibuat, konstruktor otomatis dijalankan dan membuat koneksi ke MySQL.
Properti conn yang merupakan instance dari objek mysqli dapat digunakan oleh kelas lain untuk menjalankan query SQL, seperti yang dilakukan di kelas View dalam fungsi tampilkanMahasiswa().
## 2. Gunakan _construct sebagai link ke database
Konstruktor (constructor) digunakan untuk menghubungkan aplikasi dengan database MySQL, memastikan koneksi hanya dibuat sekali saat objek kelas Database diinisialisasi.

Kelas Database: Kelas ini bertanggung jawab untuk membuat koneksi ke MySQL, dan koneksi ini disimpan dalam properti public $conn agar bisa diakses oleh kelas lain, seperti View.
``` php
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
```
3. Terapkan enkapsulasi sesuai logika studi kasus
Enkapsulasi adalah konsep OOP yang bertujuan untuk menyembunyikan detail implementasi (data
atau metode) dari luar kelas, hanya menyediakan akses melalui metode khusus yang diizinkan.
Dalam proyek ini, enkapsulasi diterapkan dengan menggunakan modifier akses private pada
properti-properti tertentu, seperti koneksi database di dalam kelas View.

- Properti Private: Koneksi ke database di kelas View disembunyikan menggunakan properti
private $db, sehingga tidak dapat diakses langsung dari luar kelas. Pengaksesan koneksi ini
hanya bisa dilakukan melalui metode yang diizinkan di dalam kelas tersebut, seperti metode
tampilkanMahasiswa().
``` php
class View {
    private $db; // Menyimpan koneksi database, tidak dapat diakses dari luar kelas

    public function __construct(Database $database) {
        $this->db = $database->conn; // Koneksi database diinisialisasi melalui konstruktor
    }
}
```
5. Membuat kelas turunan menggunakan konsep pewarisan
6. Terapkan polimorfisme untuk minimal 2 peran sesuai studi kasus
7. NPM 1,2 Studi kasus mahasiswa & nilai

### 1. Membuat database universitas
- Tabel Mahasiswa
![table_mhs](https://github.com/user-attachments/assets/3e0def96-d143-4252-ac2b-39b79b33cc88)
- Tabel Nilai
![table_nilai](https://github.com/user-attachments/assets/c5fee227-3d94-46f5-997d-73de738e533f)

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
