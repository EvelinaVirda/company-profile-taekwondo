<!DOCTYPE html>
<html>
  <head>
    <title>Table Atlet</title>
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
        
                  <?php 
//        includekan fungsi paginasi
        include 'pagination1.php';
//        koneksi ke database
        include 'koneksi.php';
        
//        query
        $query = "SELECT * FROM atlet"; // Query untuk menampilkan semua data atlet
        $sql = mysqli_query($connect, $query);
        
        //pagination config start
        $rpp = 5; // jumlah record per halaman
        $reload = "table_atlet.php?pagination=true";
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
              <tr>
                <th></th>
                <th>Foto</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Sekolah</th>
                <th>Tingkat Geup/Sabuk</th>
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
                           <?php echo "<td><img src='images/".$data['foto']."' width='100' height='100'></td>"; ?>
                        </td>
                        <td>
                            <?php echo $data ['nis']; ?> 
                        </td>
                        <td>
                            <?php echo $data ['nama']; ?> 
                        </td>
                        <td>
                            <?php echo $data ['jenis_kelamin']; ?> 
                        </td>
                        <td>
                            <?php echo $data ['sekolah']; ?> 
                        </td>
                         <td>
                            <?php echo $data ['sabuk']; ?> 
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