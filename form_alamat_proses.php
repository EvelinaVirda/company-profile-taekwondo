<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

// mengecek apakah tombol input dari form telah diklik
if (isset($_POST['input'])) {

  // membuat variabel untuk menampung data dari form
  $nis = $_POST['nis'];
  $alamat = $_POST['alamat'];

  // jalankan query INSERT untuk menambah data ke database
  $query = "INSERT INTO alamat VALUES (NULL, '$nis', '$alamat')";
  $result = mysqli_query($connect, $query);
  // periska query apakah ada error
  if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($connect).
           " - ".mysqli_error($connect));
  }
}
 header("location:table.php");
 ?>