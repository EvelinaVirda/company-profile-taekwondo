<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

// mengecek apakah tombol input dari form telah diklik
$kd_prestasi = $_GET['kd_prestasi'];

  // membuat variabel untuk menampung data dari form
  $prestasi = $_POST['prestasi'];
  $nama = $_POST['nama'];
  $tanggal = $_POST['tanggal'];

  // jalankan query INSERT untuk menambah data ke database
  $query = "UPDATE prestasi SET prestasi='".$prestasi."', nama='".$nama."', tanggal='".$tanggal."' WHERE kd_prestasi='".$kd_prestasi."'";
  $result = mysqli_query($connect, $query);
  // periska query apakah ada error
  

 header("location:prestasi_atlet_admin.php");
 ?>