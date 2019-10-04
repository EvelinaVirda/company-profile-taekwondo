<?php
// buka koneksi dengan MySQL
  include("koneksi.php");

  //mengecek apakah di url ada GET id
  if (isset($_GET["kd_alamat"])) {

    // menyimpan variabel id dari url ke dalam variabel $id
    $kd_alamat = $_GET["kd_alamat"];

    //jalankan query DELETE untuk menghapus data
    $query = "DELETE FROM alamat WHERE kd_alamat='$kd_alamat' ";
    $hasil_query = mysqli_query($connect, $query);

    //periksa query, apakah ada kesalahan
    if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysqli_errno($connect).
           " - ".mysqli_error($connect));
    }
  }
  // melakukan redirect ke halaman index.php
  header("location:alamat_atlet.php");
?>