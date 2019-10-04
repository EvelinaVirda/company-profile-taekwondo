 <?php ob_start();
include "koneksi.php";
if($_POST){
 $judulartikel      = $_POST['judul_artikel'];
 $isiartikel     = $_POST['isi_artikel'];
 $photoartikel   = $_FILES['images']['name'];
 
 if(!empty($_FILES['images']['tmp_name'])){
  move_uploaded_file($_FILES['images']['tmp_name'],'photo-artikel/'.$_FILES['images']['name']);

  mysqli_query($connect, "insert into artikel(judul_artikel, isi_artikel, photo_artikel)
  values('$judulartikel', '$isiartikel', '$photoartikel')"); 
  
 } else {
  mysqli_query($connect, "insert into artikel(judul_artikel, isi_artikel)
  values('$judulartikel', '$isiartikel')");
  
 }
 header('location:berita.php');
 exit;
}

?>