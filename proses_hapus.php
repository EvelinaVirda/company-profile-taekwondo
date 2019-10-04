<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil data NIS yang dikirim oleh index.php melalui URL
$nis = $_GET['nis'];

// Query untuk menampilkan data atlet berdasarkan NIS yang dikirim
$query = "SELECT * FROM atlet WHERE nis='".$nis."'";
$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql

// Cek apakah file fotonya ada di folder images
if(is_file("images/".$data['foto'])) // Jika foto ada
  unlink("images/".$data['foto']); // Hapus foto yang telah diupload dari folder images

// Query untuk menghapus data atlet berdasarkan NIS yang dikirim
$query1 = "DELETE FROM atlet WHERE nis='".$nis."'";
$sql1 = mysqli_query($connect, $query1);
$query2 = "DELETE FROM prestasi WHERE nis='".$nis."'";
$sql2 = mysqli_query($connect, $query2); // Eksekusi/Jalankan query dari variabel $query

if($sql2){ // Cek jika proses simpan ke database sukses atau tidak
  // Jika Sukses, Lakukan :
  header("location: table.php"); // Redirect ke halaman index.php
}else{
  // Jika Gagal, Lakukan :
  echo "Data gagal dihapus. Hapus Terlebih Dahulu Data atlet Pada Prestasi<a href='prestasi_atlet_admin.php'><br> Prestasi</a><br>";
}
?>

