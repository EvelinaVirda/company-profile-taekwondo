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
              <div class="panel-title"><h1>Masukan Data atlet </h1></div>
              
            </div>
            <br><br><br><br>
                  <form method="post" action="proses_simpan.php" enctype="multipart/form-data">
                  <table cellpadding="8">
                  <div class="form-group">
                    <label class="col-sm-2 control-label" for="nis">5 Digit Terakhir No HP</label>  
                    <div class="col-md-6">
                    <input type="text" name="nis" id="nis" class="form-control input-md" required>           
                    </div>
                  </div>
                  <br><br><br>
                  <div class="form-group">
                    <label class="col-sm-2 control-label" for="nama">Nama</label>  
                    <div class="col-md-6">
                    <input type="text" name="nama" id="nama" class="form-control input-md" required>           
                    </div>
                  </div>
                  <br><br><br>
                   <div class="form-group">
                    <label class="col-sm-2 control-label" for="jenis_kelamin">Jenis Kelamin</label>  
                    <div class="col-md-6">
                    <input type="radio" name="jenis_kelamin" value="laki-laki"> laki-laki
                    <input type="radio" name="jenis_kelamin" value="perempuan"> perempuan
                    </div>
                  </div>
                  <br><br>
                  <div class="form-group">
                    <label class="col-sm-2 control-label" for="telp">Telepon</label>  
                    <div class="col-md-6">
                    <input type="text" name="telp" id="telp" class="form-control input-md">           
                    </div>
                  </div>
                  <br><br>
                  <div class="form-group">
                    <label class="col-sm-2 control-label" for="alamat">Alamat</label>  
                    <div class="col-md-6">
                    <input type="text" name="alamat" id="alamat" class="form-control input-md">           
                    </div>
                  </div>
                  <br><br>
                  <div class="form-group">
                    <label class="col-sm-2 control-label" for="sekolah">Sekolah</label>  
                    <div class="col-md-6">
                    <input type="text" name="sekolah" id="sekolah" class="form-control input-md">           
                    </div>
                  </div>
                  <br><br>
                  <div class="form-group">
                    <label class="col-sm-2 control-label" for="sabuk">Tingkat Geup/Sabuk</label>  
                    <div class="col-md-6">
                    <input type="text" name="sabuk" id="sabuk" class="form-control input-md" required>           
                    </div>
                  </div>
                  <br><br>
                  <tr>
                    <td>Foto (max 2MB)</td>
                    <td><input type="file" name="foto"></td>
                  </tr>
                  </table> 
  <hr>
  <input type="submit" class="btn btn-primary" value="Simpan">
  <a href="table.php"><input type="button" class="btn btn-danger" value="Batal"></a>
  </form>
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