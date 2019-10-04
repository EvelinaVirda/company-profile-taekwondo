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
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<style>
  table,tr,td{
background-color: #fff ;
color: black;
padding: 10px;
border: 4px solid #fff;
border-collapse: collapse;
}
.h{
padding: 20px;
}
.posisi{
position: absolute;
margin-left: auto;
margin-right: auto;
margin-bottom: auto;
margin-top: auto;
left: 0;
right: 0;
top: 100px;
bottom: 0;
}
</style>
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
                <h4><a href="form_simpan.php"><span class="glyphicon glyphicon-plus"></span> Input Data</a></h4>
              </div>
            </div><br><br><br>
  <?php
  // Load file koneksi.php
  include "koneksi.php";
  
  // Ambil data NIS yang dikirim oleh index.php melalui URL
  $nis = $_GET['nis'];
  $query = "SELECT * FROM atlet WHERE nis='".$nis."'";
  $sql = mysqli_query($connect, $query);  // Eksekusi/Jalankan query dari variabel $query
  $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
  ?>

<form style="center" class="posisi";>
<fieldset class="h"/>
<table style="width: 100%;">
<tr>
<td rowspan="15" width="250px">
<?php echo "<img src='images/".$data['foto']."' width='250px' height='300px'/>"; ?> 
</td>
</tr>
<tr>
<td><b>NIS</b></td>
<td> : </td>
<td> <?php echo $data['nis']; ?></td>
</tr>
<tr>
<td><b>Nama</b></td>
<td> : </td>
<td> <?php echo $data['nama']; ?></td>
</tr>
<tr>
<td><b>Jenis Kelamin</b></td>
<td> : </td>
<td> <?php echo $data['jenis_kelamin']; ?></td>
</tr>
<tr>
<td><b>Telepon</b></td>
<td> : </td>
<td><?php echo $data['telp']; ?></td>
</tr>
<tr>
<td><b>Alamat</td>
<td> : </td>
<td><?php echo $data['alamat']; ?></td>
</tr>
<tr>
<td><b>Sekolah</b></td>
<td> : </td>
<td><?php echo $data['sekolah']; ?></td>
</tr>
<tr>
<td><b>Sabuk</b></td>
<td> : </td>
<td><?php echo $data['sabuk']; ?></td>
</tr>
</table>
<table style="width: 100%;">
<?php
       include 'koneksi.php';
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM atlet
        INNER JOIN prestasi
        ON atlet.nis = prestasi.nis
        WHERE prestasi.nis = '" . $nis ."' ORDER BY tanggal DESC";
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
        ?>
        <td><i class="fa fa-trophy" aria-hidden="true"><b> Prestasi </b></i></td>
        <td> : </td>
        <?php
        echo "<td>$data[prestasi] <br> $data[tanggal]</td>";
       
        echo "</tr>";
        $no++; // menambah nilai nomor urut
      }
      ?>
</table>
</fieldset>
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