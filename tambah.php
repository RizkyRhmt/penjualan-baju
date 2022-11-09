<?php
  include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Halaman Tambah data</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body>

  <section class="row">
    <div class="col-md-6 offset-md-3 align-self-center"> 
      <h1 class="text-center mt-4">Form Tambah Barang</h1>
      <form method="POST">
        <div class="mb-3">
          <label for="inputkode" class="form-label">Kode Baju</label>
          <input type="number" class="form-control" id="inputkode" name="kode" placeholder="Masukan Kode Baju">
        </div>
        <div class="mb-3">
          <label for="inputNama" class="form-label">Merk Baju</label>
          <input type="text" class="form-control" id="inputmerk" name="nama" placeholder="Masukan Merk Baju">
        </div>
        <div class="mb-3">
          <label for="inputjumlah" class="form-label">Jumlah Baju</label>
          <input type="text" class="form-control" id="inputjumlah" name="jumlah" placeholder="Masukan Jumlah Baju">
        </div>
        <div class="mb-3">
          <label for="inputharga" class="form-label">Harga Baju</label>
          <input type="text" class="form-control" id="inputharga" name="harga" placeholder="Masukan Harga Baju">
        </div>
        <input name="daftar" type="submit" class="btn btn-primary" value="Tambah">
        <a href="index.php" type="button" class="btn btn-info text-white">Kembali</a>
      </form>
    </div>
  </section>

  <?php
    
    // Buat kondisi jika tombol data di klik
    if(isset($_POST['daftar'])){
      // Membuat variable setiap field inputan agar kodingan lebih rapi.
      $kode = $_POST['kode'];
      $nama = $_POST['nama'];
      $jumlah = $_POST['jumlah'];
      $harga = $_POST['harga'];
    
      // Membuat Query
      $query = "INSERT INTO tb_siswa (kode, nama, jumlah, harga) VALUES('".$kode."', '".$nama."', '".$jumlah."', '".$harga."')";

      $result = mysqli_query($koneksi, $query);

      if($result){
        header("location: index.php");
      } else {
        echo "<script>alert('Data Gagal di tambahkan!')</script>";
      }

    }    

  ?>

</body>
</html>