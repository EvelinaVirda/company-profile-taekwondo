<?php include "proteksi.php"; ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Taekwondo G Bhagasasi 12</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery UI -->
    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="header">
       <div class="container">
          <div class="row">
             <div class="col-md-5">
                <!-- Logo -->
                <div class="logo">
                   <h1><a href="#">Taekwondo G Bhagasasi 12</a></h1>
                </div>
             </div>
             <div class="col-md-5">
                <div class="row">
                  <div class="col-lg-12">
                  <form id="form1" name="form1" method="post" action="cari.php">
                      <div class="input-group form">
                        <input name="cari" class="form-control" type="text" id="cari" size="50" placeholder="Search..."/>
                        <span class="input-group-btn">
                        <input class="btn btn-primary" type="submit" name="Submit" value="Search" />
                        </span>
                      </div>
                  </form>
                  </div>
                </div>
             </div>
             <div class="col-md-2">
                <div class="navbar navbar-inverse" role="banner">
                    <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                      <ul class="nav navbar-nav">
                        <li><a href="logout.php">Logout</a></li>
                      </ul>
                    </nav>
                </div>
             </div>
          </div>
       </div>
  </div>

      <div class="col-md-2">
        <div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li><a href="index.php"><i class="glyphicon glyphicon-home"></i> Home</a></li>
                    <li><a href="table.php"><i class="glyphicon glyphicon-list"></i> Tables</a></li>
                    <li><a href="form_prestasi.php"><i class="glyphicon glyphicon-thumbs-up"></i> Form Prestasi</a></li>
                    <li><a href="prestasi_atlet_admin.php"><i class="glyphicon glyphicon-bookmark"></i> Prestasi atlet</a></li>
                    <li><a href="form_simpan.php"><i class="glyphicon glyphicon-file"></i> Forms</a></li>
                    <li class="current"><a href="form_gallery.php"><i class="glyphicon glyphicon-picture"></i> gallery</a></li>
                    <li><a href="form_artikel.php"><i class="glyphicon glyphicon-globe"></i> Artikel</a></li>
                </ul>
             </div>
      </div>
  <div class="col-lg-8">
            <div class="content-box-large">
              <div class="panel-heading">
              <div class="panel-title"><h1>Masukan Gambar </h1></div>
              
              <div class="panel-options">
                <h4><a href="form_gallery.php" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i> Refresh</a><br>
                <a href="gallery.php"><span class="glyphicon glyphicon-picture"></span> Lihat Gallery</a>
              </div>
            </div>
            <br><br><br><br>
     <form  method="post" action="gallerysave.php" enctype="multipart/form-data">
       <center>
       <tr>
        <td>CAPTION PHOTO</td><br>
        <td><input type="text" placeholder="Type your Caption here..." maxlength="500" name="judul" required/></td><br><br>
        </tr>
        <tr>
        <td><input type="file" id="images" name="images"></td>
       </tr>
       <center>
       <br><input title="simpan" type="submit"  name="submit" value="Simpan" /><br>
       <br>
    </form> 
    <table border="1px">
<tr>                  
<div class="panel-body">
                <table class="table table-striped">   
                <th><center>Judul</th>
                <th><center>Photo</th>
                <th><center>Aksi</th>
</tr>

<?php
include "koneksi.php";
$has = mysqli_query($connect, "select * from gallery order by id_gallery desc");
while($data=mysqli_fetch_array($has)){
 echo '<tr>                                 
        <td><center>'.$data['judul'].'<center></td>
        <td><center><img width="20%" src="photo-gallery/'.$data['photo'].'"/></div></center></td>
        <td><a href="gallerydelete.php?id_gallery='.$data['id_gallery'].'" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a></td>
       </tr> ';
}
?>
</table>
</div>

 <link href="vendors/datatables/dataTables.bootstrap.css" rel="stylesheet" media="screen">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script src="vendors/datatables/js/jquery.dataTables.min.js"></script>

    <script src="vendors/datatables/dataTables.bootstrap.js"></script>

    <script src="js/custom.js"></script>
    <script src="js/tables.js"></script>
  </body>
</html>