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
                    <div class="input-group form">
                         <input type="text" class="form-control" placeholder="Search...">
                         <span class="input-group-btn">
                           <button class="btn btn-primary" type="button">Search</button>
                         </span>
                    </div>
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
                    <li><a href="gallery.php"><i class="glyphicon glyphicon-picture"></i> Gallery</a></li>
                    <li><a href="table_atlet.php"><i class="glyphicon glyphicon-user"></i> Tabel atlet</a></li>
                    <li class="current"><a href="prestasi_atlet.php"><i class="glyphicon glyphicon-thumbs-up"></i> Prestasi atlet</a></li>
                   
                </ul>
             </div>
      </div>
  <div class="col-lg-8">
            <div class="content-box-large">
              <div class="panel-heading">
              <div class="panel-title"><h1>Daftar Prestasi atlet </h1></div>
              
              <div class="panel-options">
                <h4><a href="prestasi_atlet.php" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i> Refresh</a><br>
              </div>
            </div>
            <div class="panel-body">
        </div>
    <table class="table table-striped">
      <tr>
        <th>prestasi</th>
        <th>nis</th>
        <th>Nama</th>
        <th>tanggal</th>
      </tr>
      <?php
       include 'koneksi.php';
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM prestasi ORDER BY tanggal DESC";
      $result = mysqli_query($connect, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($connect).
           " - ".mysqli_error($connect));
      }

      //buat perulangan untuk element tabel dari data mahaatlet
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($data = mysqli_fetch_assoc($result))
      {
        // mencetak / menampilkan data
        echo "<tr>";
        echo "<td>$data[prestasi]</td>";
        echo "<td>$data[nis]</td>"; //menampilkan data nim
        echo "<td>$data[nama]</td>"; //menampilkan data nama
         //menampilkan data fakultas
        echo "<td>$data[tanggal]</td>"; //menampilkan data jurusan
        // membuat link untuk mengedit dan menghapus data
        echo "</tr>";
        $no++; // menambah nilai nomor urut
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