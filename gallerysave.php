     <?php ob_start();
    include "koneksi.php";
    if($_POST){
     $judulpost      = $_POST['judul'];
     $photo = $_FILES['images']['name'];
      move_uploaded_file($_FILES['images']['tmp_name'], 'photo-gallery/'.$_FILES['images']['name']);
      mysqli_query($connect, "insert into gallery(judul,photo)
      values('$judulpost','$photo' )");
     header('location:form_gallery.php');
     exit;
    }
    ?>