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
<!-- NAVBAR
================================================== -->
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
             <ul class="nav nav-tabs">
              <li role="presentation"><a href="index.php">Beranda</a></li>
              <li role="presentation"><a href="berita.php">Artikel</a></li>
              <li role="presentation"  class="active"><a href="gallery.php">Gallery</a></li>
              <li role="presentation"><a href="table_atlet.php">atlet</a></li>
              <li role="presentation"><a href="login.php"><i class="glyphicon glyphicon-log-in"></i></a></li>
            </ul>
          </div>
       </div> 
        <div class="col-md-2">
        <div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <li role="presentation"><a href="index.php">Beranda</a></li>
                    <li role="presentation"><a href="berita.php">Artikel</a></li>
                    <li role="presentation" class="current"><a href="gallery.php">Gallery</a></li>
                    <li role="presentation"><a href="table_atlet.php">atlet</a></li>
                </ul>
             </div>
        </div>

   

  <div class="col-lg-8">
            <div class="content-box-large">
              <div class="panel-heading">
              <div class="panel-title"><h1>Gallery </h1></div>
              
              <div class="panel-options">
                <h4><a href="gallery.php" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i> Refresh </a><br></h4>
              </div>
            </div>
            <div class="panel-body">
                <table class="table table-striped">
              <tr>
              </tr>
           <?php
             include "koneksi.php";
            $sql=mysqli_query($connect, "select * from gallery order by id_gallery desc");
            ?>
              <tr>
            <?php
              $jml_kolom=3;
              $cnt = 0;
              while($data=mysqli_fetch_array($sql))
              {
                  if ($cnt >= $jml_kolom) 
                  {
                      echo "</tr><tr>";
                      $cnt = 0;
                }
                $cnt++;
              ?>
                 <td align=center>       
                   <div>
                     <?php  echo '
                  <a href="single_gallery.php?p='.$data["id_gallery"].'"><img src="photo-gallery/'.$data["photo"].'" width="250px" height="200px"/></a>
                  ';?>
                  <?php echo $data['judul']; ?>
                   </div>      
                 </td>
              <?php
              }
              ?>
              </tr>
            </table>
            </div>  
            <div class="panel-body">
            <table class="table table-striped">
           <?php
             include "koneksi.php";
            $sql=mysqli_query($connect, "select * from artikel order by tgl_artikel desc");
            ?>
              <tr>
            <?php
              $jml_kolom=3;
              $cnt = 0;
              while($data=mysqli_fetch_array($sql))
              {
                  if ($cnt >= $jml_kolom) 
                  {
                      echo "</tr><tr>";
                      $cnt = 0;
                }
                $cnt++;
              ?>
                 <td align=center>       
                    <div>
                     <?php  echo '
                  <a href="single.php?p='.$data["id_artikel"].'"><img src="photo-artikel/'.$data["photo_artikel"].'" width="250px" height="200px"/></a>
                  ';?>
                  <?php echo $data['judul_artikel']; ?>
                   </div>      
                 </td>
              <?php
              }
              ?>
              </tr>
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