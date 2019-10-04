<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Search</title>
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
              <li role="presentation"><a href="berita.php">Berita</a></li>
              <li role="presentation"><a href="gallery.php">Gallery</a></li>
              <li role="presentation"  class="active"><a href="table_atlet.php">atlet</a></li>
              <li role="presentation"><a href="login.php"><i class="glyphicon glyphicon-log-in"></i></a></li>
            </ul>
          </div>
       </div> 
        <div class="col-md-2">
            <div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <div class="col-lg-12">
                      <form id="form1" name="form1" method="post" action="cari_a.php">
                          <div class="input-group form">
                            <input name="cari" class="form-control" type="text" id="cari" size="50" placeholder="Search..."/>
                            <span class="input-group-btn">
                            <input class="btn btn-primary" type="submit" name="Submit" value="Search" />
                            </span>
                          </div>
                      </form>
                  </div>
                </ul>
             </div>
        </div>

  <div class="col-lg-8">
            <div class="content-box-large">
              <div class="panel-heading">
              <div class="panel-title"><h1>Daftar atlet </h1></div>
              
              <div class="panel-options">
                <h4><a href="table_atlet.php" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i> Refresh</a><br>
              </div>
            </div>
            <div class="panel-body">
		  	</div>
        <div class="panel-body">
                <table class="table table-striped">
                  <?php
                    
                  /* Membuat fungsi untuk pencarian data pada database */
                  $cari=$_POST['cari'];
                  if(!empty($cari)){
                  ?>
                  <p><?php
                  $lisatlet=mysqli_query($connect, "SELECT * FROM atlet WHERE Nama LIKE '%$cari%' or nis LIKE '%$cari%' or sabuk LIKE '%$cari%' or sekolah LIKE '%$cari%'");
                  $totalseluruhatlet=mysqli_num_rows($lisatlet);
                  if($totalseluruhatlet=='0'){
                  echo "<center><blink>Maaf Data yang anda cari tidak ada di dalam database</bink></center>";
                  } else {
                  echo "<center>Jumlah Seluruh Data yang ditemukan Adalah <b>$totalseluruhatlet</b> Data </center>";
                  }
                  ?>
                  <div class="panel-body">
                   <table class="table table-striped">
                    <tr>
                      <th>Foto</th>
                      <th>NIS</th>
                      <th>Nama</th>
                      <th>Jenis Kelamin</th>
                      <th>Sekolah</th>
                      <th>Tingkat Geup/Sabuk</th>
                    </tr>
                  </div>  
      
                  <?php
                  while($data = mysqli_fetch_array($lisatlet)){ // Ambil semua data dari hasil eksekusi $sql
                    echo "<tr>";
                    echo "<td><img src='images/".$data['foto']."' width='100' height='100'></td>";
                    echo "<td>".$data['nis']."</td>";
                    echo "<td>".$data['nama']."</td>";
                    echo "<td>".$data['jenis_kelamin']."</td>";
                    echo "<td>".$data['sekolah']."</td>";
                    echo "<td>".$data['sabuk']."</td>";
                    echo "</tr>";
                  }
                  ?>
        </table>
      <?php
      }
      ?>
        </table>

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