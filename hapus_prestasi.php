<?php
// buka koneksi dengan MySQL
  include("koneksi.php");

  //mengecek apakah di url ada GET id
  if (isset($_GET["kd_prestasi"])) {

    // menyimpan variabel id dari url ke dalam variabel $id
    $kd_prestasi = $_GET["kd_prestasi"];

    //jalankan query DELETE untuk menghapus data
    $query = "DELETE FROM prestasi WHERE kd_prestasi='$kd_prestasi' ";
    $hasil_query = mysqli_query($connect, $query);

    //periksa query, apakah ada kesalahan
    if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysqli_errno($connect).
           " - ".mysqli_error($connect));
    }
  }
  // melakukan redirect ke halaman index.php
  header("location:prestasi_atlet_admin.php");
?>