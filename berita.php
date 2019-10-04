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
      </div>
       <div class="col-md-2">
        
        </div>

   


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="col-lg-8">
            <div class="content-box-large">
              <div class="panel-heading">
              <div class="panel-options">
                <h4><a href="berita.php" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i> Refresh</a><br></h4>
              </div>
              <?php 
//        includekan fungsi paginasi
        include 'pagination1.php';
//        koneksi ke database
        include 'koneksi.php';
        
//        query
        $query = ("SELECT * from artikel order by tgl_artikel desc"); // Query untuk menampilkan semua data siswa
        $has = mysqli_query($connect, $query);
        
        //pagination config start
        $rpp = 3; // jumlah record per halaman
        $reload = "berita.php?pagination=true";
        $page = isset($_GET["page"]) ? (intval($_GET["page"])) : 1;
        $tcount = mysqli_num_rows($has);
        $tpages = ($tcount) ? ceil($tcount/$rpp) : 1; // total pages, last page number
        $count = 0;
        $i = ($page-1)*$rpp;
        $no_urut = ($page-1)*$rpp;
        //pagination config end
        ?>
                   <div class="panel-body">
                <table class="table table-striped">
               
                <tbody>
                    <?php
                    while(($count<$rpp) && ($i<$tcount)) {
                        mysqli_data_seek($has,$i);
                        $data = mysqli_fetch_array($has);
                        $art = substr($data['isi_artikel'],0,300);
                    ?>
                    <tr>
                        
                            <h3> <?php echo $data ['judul_artikel']; ?>  </h3>
                        
                        <div>
                         <img width="50%" valign='bottom' src="photo-artikel/<?php echo $data['photo_artikel']; ?>">
                       </div>  
                        
                            <?php echo $data ['tgl_artikel']; ?> 
                        <?php
                        echo '
                        <p>'.$art.'..</p>
                           <a href="single.php?p='.$data['id_artikel'].'">Read More</a>
                         <br><br>
                         <hr>'
                          ?>
                        
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
</div>
</div>
</div>

    <div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                  <li role="presentation"><h4>Artikel</h4></li>
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
                         <h5><b><a href="single.php?p='.$data['id_artikel'].'">'.$data['judul_artikel'].'</a></b></h5>
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