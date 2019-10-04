<?php
include "koneksi.php"; 
$query=mysqli_query($connect, "select * from gallery where id_gallery='$_GET[id_gallery]' ");
$cek=mysqli_fetch_array($query);
$folder ="photo-gallery/$cek[photo]";
unlink($folder);
$delete = mysqli_query($connect, "delete from gallery where id_gallery='$_GET[id_gallery]'");
echo"<script>alert('gallery berhasil di hapus');window.location='form_gallery.php'</script>";
?>