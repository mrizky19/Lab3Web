<?php
error_reporting(E_ALL);
include_once 'koneksi.php';
if (isset($_POST['submit']))
{
  $nama = $_POST['nama'];
  $kategori = $_POST['kategori'];
  $harga_jual = $_POST['harga_jual'];
  $harga_beli = $_POST['harga_beli'];
  $stok = $_POST['stok'];
  $file_gambar = $_FILES['file_gambar'];
  $gambar = null;
  if ($file_gambar['error'] == 0)
  {
    $filename = str_replace(' ', '_',$file_gambar['name']);
    $destination = dirname(__FILE__) .'/gambar/' . $filename;
    if(move_uploaded_file($file_gambar['tmp_name'], $destination))
    {
      $gambar = 'gambar/' . $filename;;
    }
  }
  $sql = 'INSERT INTO data_barang (nama, kategori,harga_jual, harga_beli,stok, gambar) ';
  $sql .= "VALUE ('{$nama}', '{$kategori}','{$harga_jual}','{$harga_beli}', '{$stok}', '{$gambar}')";
  $result = mysqli_query($conn, $sql);
  header('location: index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link href="style.css" rel="stylesheet" type="text/css" />
    <title>Tambah Barang</title>
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
            max-width: 500px;
            margin: 0 auto;
        }
        .input {
            margin-bottom: 15px;
        }
        .input label {
            display: block;
            font-weight: bold;
        }
        .input input[type="text"],
        .input select,
        .input input[type="file"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .submit {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .submit input[type="submit"],
        .submit input[type="button"] {
            width: 48%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .submit input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
        }
        .submit input[type="button"] {
            background-color: #f44336;
            color: #fff;
        }
        .submit input[type="submit"]:hover {
            background-color: #45a049;
        }
        .submit input[type="button"]:hover {
            background-color: #db4436;
        }
    </style>
  </head>
  <body>
    <div class="container">
      <h1>Tambah Barang</h1>
      <div class="main">
        <form method="post" action="tambah.php" enctype="multipart/form-data">
          <div class="input">
            <label>Nama Barang</label>
            <input type="text" name="nama" />
          </div>
          <div class="input">
            <label>Kategori</label>
            <select name="kategori">
              <option value="Komputer">Komputer</option>
              <option value="Elektronik">Elektronik</option>
              <option value="Hand Phone">Hand Phone</option>
            </select>
          </div>
          <div class="input">
            <label>Harga Jual</label>
            <input type="text" name="harga_jual" />
          </div>
          <div class="input">
            <label>Harga Beli</label>
            <input type="text" name="harga_beli" />
          </div>
          <div class="input">
            <label>Stok</label>
            <input type="text" name="stok" />
          </div>
          <div class="input">
            <label>File Gambar</label>
            <input type="file" name="file_gambar" />
          </div>
          <div class="submit">
            <input type="button" value="Cancel" onclick="window.location.href='index.php'" />
            <input type="submit" name="submit" value="Simpan" />
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
