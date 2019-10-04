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
              <li role="presentation" class="active"><a href="berita.php">Artikel</a></li>
              <li role="presentation"><a href="gallery.php">Gallery</a></li>
              <li role="presentation"><a href="table_atlet.php">atlet</a></li>
              <li role="presentation"><a href="login.php"><i class="glyphicon glyphicon-log-in"></i></a></li>
            </ul>
          </div>
       </div> 
        <div class="col-md-2">
        
        </div>
        </div>


   <div class="col-lg-8">
            <div class="content-box-large">
              <div class="panel-heading">                       
    <?php

    include "koneksi.php";

    $id = $_GET['p'];
    $query = mysqli_query($connect, "select * from artikel where id_artikel='$id'");
    $data=mysqli_fetch_array($query);
    $file = 'artikel/'.$data['photo_artikel'].'';
     if ($file =="artikel/"){
    echo '
    <h3> '.$data['judul_artikel'].' </h3> 
    Pada Tanggal '.$data['tgl_artikel'].'</p> 
    <p>'.$data['isi_artikel'].'</p>  
    ';}
     else {
     echo '
         
    <img width="80%" src="photo-artikel/'.$data['photo_artikel'].'" alt="" />
    <h3>'.$data['judul_artikel'].'</h3>
    Pada Tanggal '.$data['tgl_artikel'].'</p> 
    <p>'.$data['isi_artikel'].'</p>      
         
     ';}
    ?> 
</div>
</div>
</div>
</div>
<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                   <?php
                    include "koneksi.php";
                    $query = ("SELECT * from artikel order by tgl_artikel desc");
                    $has = mysqli_query($connect, $query);
                    $num = mysqli_num_rows($has);

                    if($num<1){
                     echo'<center>Tidak Ada Artikel</center>';
                    }else{
                    while($data=mysqli_fetch_array($has)){
                     echo '
                         <h5><a href="single.php?p='.$data['id_artikel'].'"><b>'.$data['judul_artikel'].'</a></b></h5>
                         <p>'.$data['tgl_artikel'].'</p>
                         <hr>
                      ';}
                    }
                    ?>

                </ul>
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