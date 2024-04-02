<?php
include("koneksi.php");
// query untuk menampilkan data
$sql = 'SELECT * FROM data_barang';
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link href="https://www.w3schools.com/w3css/w3css_tables.asp" rel="stylesheet" type="text/css" />
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }
        .container {
            width: 80%;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
        }
        .main {
            margin-top: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
        th {
            background-color: #f44336;
            color: white;
        }
        img {
            max-width: 100px;
            max-height: 100px;
        }
    </style>
    <title>Data Barang</title>
  </head>
  <body>
    <div class="container">
      <h1>Data Barang</h1>
      <a href="tambah.php">Tambah Barang</a>
      <div class="main">
        <table class="w3-table-all">
          <tr class='w3-red'>
            <th>Gambar</th>
            <th>Nama Barang</th>
            <th>Katagori</th>
            <th>Harga Jual</th>
            <th>Harga Beli</th>
            <th>Stok</th>
            <th>Aksi</th>
          </tr>
          <?php if($result): ?>
          <?php while($row = mysqli_fetch_array($result)): ?>
          <tr>
            <td>
              <img
                src="gambar/<?= $row['gambar'];?>"
                alt="<?=$row['nama'];?>"
              />
            </td>
            <td><?= $row['nama'];?></td>
            <td><?= $row['kategori'];?></td>
            <td><?= $row['harga_beli'];?></td>
            <td><?= $row['harga_jual'];?></td>
            <td><?= $row['stok'];?></td>
            <td>
              <a href="ubah.php?id=<?= $row['id_barang']; ?>" class="w3-button w3-blue">Ubah</a>
              <a href="hapus.php?id=<?= $row['id_barang']; ?>" class="w3-button w3-red" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
            </td>
          </tr>
          <?php endwhile; else: ?>
          <tr>
            <td colspan="7">Belum ada data</td>
          </tr>
          <?php endif; ?>
        </table>
      </div>
    </div>
  </body>
</html>
