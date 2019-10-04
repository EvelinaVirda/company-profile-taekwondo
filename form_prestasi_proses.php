<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

// mengecek apakah tombol input dari form telah diklik
if (isset($_POST['input'])) {

  // membuat variabel untuk menampung data dari form
  $prestasi = $_POST['prestasi'];
  $nis = $_POST['nis'];
  $nama = $_POST['nama'];
  $tanggal = $_POST['tanggal'];

  // jalankan query INSERT untuk menambah data ke database
  $query = "INSERT INTO prestasi VALUES (NULL, '$prestasi', '$nis', '$nama','$tanggal')";
  $result = mysqli_query($connect, $query);
  // periska query apakah ada error
  if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($connect).
           " - ".mysqli_error($connect));
  }
}
 header("location:prestasi_atlet_admin.php");
 ?>