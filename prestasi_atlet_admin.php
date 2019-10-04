<?php include "proteksi.php"; ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Prestasi Atlet</title>
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
              <div class="panel-title"><h1>Prestasi atlet </h1></div>
              
              <div class="panel-options">
                <h4><a href="prestasi_atlet_admin.php" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i> Refresh</a><br>
                <a href="form_prestasi.php"><span class="glyphicon glyphicon-plus"></span> Input Data</a>
              </div>
            </div>
             <?php 
//        includekan fungsi paginasi
        include 'pagination1.php';
//        koneksi ke database
        include 'koneksi.php';
        
//        query
        $query = "SELECT * FROM prestasi ORDER BY tanggal DESC"; // Query untuk menampilkan semua data atlet
        $sql = mysqli_query($connect, $query);
        
        //pagination config start
        $rpp = 5; // jumlah record per halaman
        $reload = "prestasi_atlet_admin.php?pagination=true";
        $page = isset($_GET["page"]) ? (intval($_GET["page"])) : 1;
        $tcount = mysqli_num_rows($sql);
        $tpages = ($tcount) ? ceil($tcount/$rpp) : 1; // total pages, last page number
        $count = 0;
        $i = ($page-1)*$rpp;
        $no_urut = ($page-1)*$rpp;
        //pagination config end
        ?>
        <div class="panel-body">
                <table class="table table-striped">
                <thead>
                    <tr>
                        <th>no</th>
                        <th>prestasi</th>
                        <th>nis</th>
                        <th>Nama</th>
                        <th>tanggal</th>
                        <th>aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while(($count<$rpp) && ($i<$tcount)) {
                        mysqli_data_seek($sql,$i);
                        $data = mysqli_fetch_array($sql);
                    ?>
                    <tr>
                        <td>
                            <?php echo $data ['kd_prestasi']; ?> 
                        </td>
                        <td>
                            <?php echo $data ['prestasi']; ?> 
                        </td>
                        <td>
                            <?php echo $data ['nis']; ?> 
                        </td>
                        <td>
                            <?php echo $data ['nama']; ?> 
                        </td>
                        <td>
                            <?php echo $data ['tanggal']; ?> 
                        </td>
                     <?php  echo '<td>
                      <a href="tambah_prestasi.php?nis='.$data["nis"].'"class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></a>
                      <a href="edit_prestasi.php?kd_prestasi='.$data["kd_prestasi"].'"class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span></a>
                      <a href="lihat2.php?nis='.$data["nis"].'"class="btn btn-info"><span class="glyphicon glyphicon-user"></span></a>
                      <a href="hapus_prestasi.php?kd_prestasi='.$data['kd_prestasi'].'"
                        onclick="return confirm(\'Anda yakin akan menghapus data?\')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></a>
                                  </td>';?>

                        
                        </td>
                    </tr>
                    <?php
                        $i++; 
                        $count++;
                    }
                    ?>
                </tbody>
            </table>
            <div><?php echo paginate_one($reload, $page, $tpages); ?></div>
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