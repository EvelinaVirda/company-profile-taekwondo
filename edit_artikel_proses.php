<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil data artikel yang dikirim oleh form_ubah.php melalui URL
$id_artikel = $_GET['id_artikel'];

// Ambil Data yang Dikirim dari Form
$judulartikel      = $_POST['judul_artikel'];
$isiartikel     = $_POST['isi_artikel'];


// Cek apakah user ingin mengubah fotonya atau tidak
if(isset($_POST['ubah_foto'])){ // Jika user menceklis checkbox yang ada di form ubah, lakukan :
  // Ambil data foto yang dipilih dari form
  $foto = $_FILES['foto']['name'];
  $tmp = $_FILES['foto']['tmp_name'];
  
  // Rename nama fotonya dengan menambahkan tanggal dan jam upload
  $fotobaru = date('dmYHis').$foto;
  
  // Set path folder tempat menyimpan fotonya
  $path = "photo-artikel/".$fotobaru;

  // Proses upload
  if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
    // Query untuk menampilkan data atlet berdasarkan NIS yang dikirim
    $query = "SELECT * FROM artikel WHERE id_artikel='".$id_artikel."'";
    $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
    $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql

    // Cek apakah file foto sebelumnya ada di folder images
    if(is_file("photo-artikel/".$data['photo_artikel'])) // Jika foto ada
      unlink("photo-artikel/".$data['photo_artikel']); // Hapus file foto sebelumnya yang ada di folder images
    
    // Proses ubah data ke Database
    $query = "UPDATE artikel SET judul_artikel='".$judulartikel."', isi_artikel='".$isiartikel."', photo_artikel='".$fotobaru."' WHERE id_artikel='".$id_artikel."'";
    $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query

    if($sql){ // Cek jika proses simpan ke database sukses atau tidak
      // Jika Sukses, Lakukan :
      header("location: berita.php"); // Redirect ke halaman index.php
    }else{
      // Jika Gagal, Lakukan :
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='edit_artikel.php'>Kembali Ke Form</a>";
    }
  }else{
    // Jika gambar gagal diupload, Lakukan :
    echo "Maaf, Gambar gagal untuk diupload.";
    echo "<br><a href='edit_artikel.php'>Kembali Ke Form</a>";
  }
}else{ // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
  // Proses ubah data ke Database
  $query = "UPDATE artikel SET judul_artikel='".$judulartikel."', isi_artikel='".$isiartikel."' WHERE id_artikel='".$id_artikel."'";
  $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query

  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: berita.php"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='edit_artikel.php'>Kembali Ke Form</a>";
  }
}
?>