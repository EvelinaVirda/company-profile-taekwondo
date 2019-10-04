<?php include "proteksi.php"; ?>
 
<!DOCTYPE html>
<html>
  <head>
    <title>Ubah PW</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">
 
   
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https:/
      /oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="login-bg">
    <div class="header">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <!-- Logo -->
                  <div class="logo">
                     <h1><a href="login.php">Ubah PW</a></h1>
                  </div>
               </div>
            </div>
         </div>
    </div>
      <?php
  // Load file koneksi.php
  include "koneksi.php";
   
  // Ambil data NIS yang dikirim oleh index.php melalui URL
  $id = $_GET['id'];
   
  // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
  $query = "SELECT * FROM admin WHERE id='".$id."'";
  $sql = mysqli_query($connect, $query);  // Eksekusi/Jalankan query dari variabel $query
  $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
  ?>
<form method="post" action="ubah_password_proses.php?id=<?php echo $id; ?>">
    <div class="page-content container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-wrapper">
                    <div class="box">
                        <div class="content-wrap">
                            <h6>Ubah Password</h6>
                            <div class="form-group">
                                <div class="col-md-12">
                                <input type="text" name="username" id="username" value="<?php echo $data['username']; ?>" class="form-control input-md" placeholder="username">           
                                </div>
                              </div><br><br><br><br>
                              <div class="form-group">
                                <div class="col-md-12">
                                <input type="password" name="password_lama" id="password_lama" class="form-control input-md"  placeholder="password lama">
                                </div>
                              </div><br><br><br>
                            <div class="form-group">
                                <div class="col-md-12">
                                <input type="password" name="password" id="pass" class="form-control input-md"  placeholder="password baru">
                                </div>
                              </div><br><br><br>
                                 <div class="form-group">
                                <div class="col-md-12">
                                <input type="password" name="konfirmasi_password" id="pass" class="form-control input-md"  placeholder="konfirmasi password">
                                </div>
                              </div><br><br><br>
                                <label><input id="checkbox" type="checkbox"> Tampilkan password</label>
 
                            <input class="btn" type="submit" name="submit" value="Ubah">
                            <a href="table.php"><input type="button" class="btn btn-danger" value="Batal"></a>
 
                            </div>                 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
 
 
       
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script type="text/javascript" src="jquery/jquery-1.4.js"></script>
      <script type="text/javascript" src="jquery/jquery.showpassword.js"></script>
      <script type="text/javascript">
      $(document).ready(function() {
      $('#pass').showPassword('#checkbox');
      });  
      </script>
  </body>
</html>