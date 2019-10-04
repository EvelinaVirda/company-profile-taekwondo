<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil data NIS yang dikirim oleh index.php melalui URL
$id_artikel = $_GET['id_artikel'];

// Query untuk menampilkan data atlet berdasarkan NIS yang dikirim
$query = "SELECT * FROM artikel WHERE id_artikel='".$id_artikel."'";
$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql

// Cek apakah file fotonya ada di folder images
if(is_file("photo-artikel/".$data['foto'])) // Jika foto ada
  unlink("photo-artikel/".$data['foto']); // Hapus foto yang telah diupload dari folder images

// Query untuk menghapus data atlet berdasarkan NIS yang dikirim
$query2 = "DELETE FROM artikel WHERE id_artikel='".$id_artikel."'";
$sql2 = mysqli_query($connect, $query2); // Eksekusi/Jalankan query dari variabel $query

if($sql2){ // Cek jika proses simpan ke database sukses atau tidak
  // Jika Sukses, Lakukan :
  header("location: artikel.php"); // Redirect ke halaman index.php
}else{
  // Jika Gagal, Lakukan :
  echo "Data gagal dihapus. <a href='index.php'>Kembali</a>";
}
?>