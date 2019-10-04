<?php
include "koneksi.php";
?>
<?php include "proteksi.php"; ?>
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
                  <form id="form1" name="form1" method="post" action="cari_prestasi.php">
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
                    <li class="current"><a href="prestasi_atlet_admin.php"><i class="glyphicon glyphicon-bookmark"></i> Prestasi atlet</a></li>
                    <li><a href="form_simpan.php"><i class="glyphicon glyphicon-file"></i> Forms</a></li>
                    <li><a href="form_gallery.php"><i class="glyphicon glyphicon-picture"></i> gallery</a></li>
                    <li><a href="form_artikel.php"><i class="glyphicon glyphicon-globe"></i> Artikel</a></li>
                </ul>
             </div>
      </div>
 <div class="col-lg-8">
            <div class="content-box-large">
              <div class="panel-heading">
              <div class="panel-title"><h1>Data atlet </h1></div>
              
              <div class="panel-options">
                <h4><a href="table.php" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i> Refresh</a><br>
                <a href="form_simpan.php"><span class="glyphicon glyphicon-plus"></span> Input Data</a>
              </div>
            </div>
              <div class="panel-body">
                <table class="table table-striped">
                  <?php
                    
                  /* Membuat fungsi untuk pencarian data pada database */
                  $cari=$_POST['cari'];
                  if(!empty($cari)){
                  ?>
                  <p><?php
                  $lisatlet=mysqli_query($connect, "SELECT * FROM prestasi WHERE nama LIKE '%$cari%' or prestasi LIKE '%$cari%' or nis LIKE '%$cari%'");
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
                      <th>no</th>
                      <th>Prestasi</th>
                      <th>NIS</th>
                      <th>Nama</th>
                      <th>Tanggal</th>
                      <th colspan="3">Aksi</th>
                    </tr>
                  </div>  
      
                  <?php
                  while($data = mysqli_fetch_array($lisatlet)){ // Ambil semua data dari hasil eksekusi $sql
                    echo "<tr>";
                    echo "<td>$data[kd_prestasi]</td>";
                    echo "<td>$data[prestasi]</td>";
                    echo "<td>$data[nis]</td>"; //menampilkan data nim
                    echo "<td>$data[nama]</td>"; //menampilkan data nama
                     //menampilkan data fakultas
                    echo "<td>$data[tanggal]</td>"; //menampilkan data jurusan
                    // membuat link untuk mengedit dan menghapus data
                    echo '<td>
                    <a href="tambah_prestasi.php?nis='.$data["nis"].'"class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></a>
                    <a href="edit_prestasi.php?kd_prestasi='.$data["kd_prestasi"].'"class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span></a>
                    <a href="lihat2.php?nis='.$data["nis"].'"class="btn btn-info"><span class="glyphicon glyphicon-user"></span></a>
                      <a href="hapus_prestasi.php?kd_prestasi='.$data['kd_prestasi'].'"
                        onclick="return confirm(\'Anda yakin akan menghapus data?\')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></a>
                    </td>';
                    echo "</tr>";
                  }
                  ?>
        </table>
      <?php
      }
      ?>
        </table>
</body>
</html>