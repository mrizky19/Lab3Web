# Tugas Pemrograman Web 2 Pertemuan 3

---

Nama : Muhammad Rizky<br>
NIM : 312210576<br>
Kelas : TI.22.B2<br>
Mapel : Pemrograman Web 2<br>

**Daftar isi**

> - [Latihan Module 1](#latihan-module-1)
> - [Tugas Praktikum](#tugas-praktikum)

# `Pembukaan`

PHP adalah singkatan dari PHP Hypertext Preprocessor dan merupakan bahasa pemrograman yang dirancang khusus untuk pengembangan web. PHP memiliki sifat Server-Side karena dijalankan atau dieksekusi dari sisi server. Ini berarti PHP dijalankan pada komputer server dan bukan pada komputer klien. PHP dijalankan melalui aplikasi web browser seperti halnya HTML. Hampir semua situs besar dan populer dikembangkan menggunakan PHP, seperti WordPress, Joomla, Facebook, Twitter, Wikipedia, dan banyak lagi.

# `Latihan Module 1`

1. **Persiapkan text editor:** Misalnya VSCode.
2. **Buat folder baru:** Buat folder dengan nama `lab2_php_dasar` pada docroot webserver (htdocs).

### Install XAMPP

- Unduh XAMPP dari [situs resminya](https://www.apachefriends.org/download.html) dan pilih versi portable.
- Extract file tersebut dan sesuaikan direktorinya, misalnya `d:\xampp`.

### Konfigurasi Web Server

- **Konfigurasi Apache:** Lokasi file `xampp\apache\conf\httpd.conf`.
- **Konfigurasi PHP:** Lokasi file `xampp\php\php.ini`.
- **Konfigurasi MySQL:** Lokasi file `xampp\mysql\bin\my.ini`.

### Menjalankan Web Server

- Untuk menjalankan web server, gunakan XAMPP Control.

![XAMPP Control](images/XAMPP_Control.png)

- Uji coba apakah server sudah berjalan dengan baik: [http://127.0.0.1](http://127.0.0.1) atau [http://localhost](http://localhost).

![Web Server](images/Web_Server.png)

### Memulai PHP

- Buat folder `lab2_php_dasar` pada root directory web server (`d:\xampp\htdocs`).
- Untuk mengakses direktori tersebut, gunakan URL: [http://localhost/lab2_php_dasar/](http://localhost/lab2_php_dasar/).

![Lab2 Directory](images/Lab2_Directory.png)

### PHP Dasar

- Buat file baru dengan nama `php_dasar.php` dalam folder tersebut.
- Tulis kode dasar PHP di dalamnya, seperti contoh yang diberikan dalam modul praktikum.

![Basic PHP](images/Basic_PHP.png)

### Variable PHP

- Mulailah menambahkan variabel pada program PHP untuk menyimpan data.

```PHP
    <h1>Belajar PHP Dasar</h1>
        <?php
        echo 'hello world';
        ?>

        <h2>Menggunakan Variable</h2>
        <?php
        $nama = 'Rizky';
        $nim = 312210576;
        echo 'Nama : '. $nama . '<br>';
        echo 'Nim  : '. $nim;
        ?>
```

![Variable PHP](images/Variable_PHP.png)

### Predefined Variable $\_GET

- Gunakan predefined variable `$_GET` untuk mengambil nilai dari URL.

```PHP
    <h2>Predefine Variable</h2>
    <?php
    echo 'Selamat Datang '.$_GET['nama'];
    ?>
```

cara akses : [text](http://127.0.0.1/lab2_php_dasar/php_dasar.php?nama=Muhammad%20Rizky)

![Predefined Variable](images/Predefined_Variable.png)

### Membuat Form Input

- Buatlah form input HTML yang memungkinkan pengguna memasukkan data.
- Proses data yang dikirimkan dapat ditangani oleh PHP.

```PHP
<h2>Form Input</h2>
    <form action="" method="post">
        <label>Nama :</label>
        <input type="text" name="nama">
        <input type="submit" value="kirim">
    </form>

    <?php
    echo 'Selamat Datang ' . $_POST['nama'];
    ?>
```

![Form Input](images/Form_Input.png)

### Operator, Kondisi, dan Perulangan

- Gunakan operator, kondisi (if-elseif-else, switch), dan perulangan (for, while, do-while) untuk mengontrol alur program PHP sesuai kebutuhan.

* Operator

  ```PHP
  <h2>Operator</h2>
   <?php
   $gaji = 1000000;
   $pajak = 0.1;
   $thp = $gaji - ($gaji*$pajak);
   echo 'Gaji sebelum Pajak = Rp. ' . $gaji . '<br>';
   echo 'Gaji yang dibawa pulang = Rp. '. $thp .'<br><br>';
   ?>
  ```

  ![Operator](images/Operator.png)

* Condition

  - If else

  ```PHP
  <h2>Condition</h2>
    <h3>If Else</h3>
    <?php
    $nama_hari = date("l");
    if ($nama_hari == "Sunday") {
        echo "Minggu <br>";
    } elseif ($nama_hari == "Monday") {
        echo "Senin <br>";
    } else {
        echo "Selasa <br>";
    }
    ?>
  ```

  ![Condition](images/ifElse.png)

  - Switch Case

  ```PHP
  <h3>Switch Case</h3>
    <?php
    $nama_hari = date("l");
    switch ($nama_hari) {
    case "Sunday":
    echo "Minggu";
    break;
    case "Monday":
    echo "Senin";
    break;
    case "Tuesday":
    echo "Selasa";
    break;
    default:
    echo "Sabtu";
    }
    ?>
  ```

  ![Condition](images/switchCase.png)

* Loop

  - Perulangan For

  ```PHP
  <h3>Switch Case</h3>
    <?php
    echo "Perulangan 1 sampai 10 <br />";
    for ($i=1; $i<=10; $i++) {
    echo "Perulangan ke: " . $i . '<br />';
    }
    echo "Perulangan Menurun dari 10 ke 1 <br />";
    for ($i=10; $i>=1; $i--) {
    echo "Perulangan ke: " . $i . '<br />';
    }
    ?>
    <h3>Perulangan While</h3>
    <?php
    echo "Perulangan 1 sampai 10 <br />";
    $i=1;
    while ($i<=10) {
    echo "Perulangan ke: " . $i . '<br />';
    $i++;
    }
    ?>
  ```

  ![Loop](images/For.png)

  - Perulangan While

  ```PHP
  <h3>Perulangan While</h3>
    <?php
    echo "Perulangan 1 sampai 10 <br />";
    $i=1;
    while ($i<=10) {
    echo "Perulangan ke: " . $i . '<br />';
    $i++;
    }
    ?>
  ```

  ![Loop](images/While.png)

  - Perulangan DoWhile

  ```PHP
  <h3>Perulangan dowhile</h3>
    <?php
    echo "Perulangan 1 sampai 10 <br />";
    $i=1;
    do {
    echo "Perulangan ke: " . $i . '<br />';
    $i++;
    } while ($i<=10);
    ?>
  ```

  ![Loop](images/DoWhile.png)

Dengan mengikuti langkah-langkah di atas, Anda dapat mulai belajar dan mengembangkan aplikasi web menggunakan PHP. Selamat mencoba!

# `Tugas Praktikum`

Buatlah program PHP sederhana dengan menggunakan form input yang menampilkan nama, tanggal
lahir dan pekerjaan. Kemudian tampilkan outputnya dengan menghitung umur berdasarkan inputan
tanggal lahir. Dan pilihan pekerjaan dengan gaji yang berbeda-beda sesuai pilihan pekerjaan.

## `Code`

```PHP
    <h2>Latihan Pemrograman Web 2</h2>

<form method="POST">
    <label for="name">Nama :</label>
    <input type="text" name="nama"> <br><br>
    <label for="date">Tanggal lahir :</label>
    <input type="date" name="date"> <br><br>
    <label for="pekerjaan">Pekerjaan :</label>
    <select name="pekerjaan">
        <option value="Karyawan">Karyawan</option>
        <option value="Guru">Guru</option>
        <option value="Dokter">Dokter</option>
    </select><br><br>
    <input type="submit" value="Kirim!"> <br><br>
</form>

<?php
$nama = $_POST['nama'];
$tanggalLahir = date("d F Y", strtotime($_POST['date']));
$pekerjaan = $_POST['pekerjaan'];
$tahunlahir = date("Y", strtotime($_POST['date']));
$tahunsekarang = date('Y');
$umur = $tahunsekarang - $tahunlahir;

switch ($pekerjaan) {
    case "Dokter":
       $gaji = '7.000.000';
       break;
    case "Karyawan":
       $gaji = '5.000.000';
       break;
    case "Guru":
       $gaji = '3.000.000';
       break;
    default:
       $gaji = 0;
}

echo 'Nama : ' . $nama . '<br>';
echo 'Tanggal Lahir : ' . $tanggalLahir . '<br>';
echo 'Umur : ' . $umur . '<br>';
echo 'Pekerjaan : ' . $pekerjaan . '<br>';
echo 'Gaji Perbulan : ' . $gaji;
?>
```

## `Hasil`

![img](images/latihan.png)

### Terimakasih...
