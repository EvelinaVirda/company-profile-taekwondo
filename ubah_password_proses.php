<?php
include('koneksi.php');
$id = $_GET['id'];
 
// Ambil Data yang Dikirim dari Form
 
 
    if($_POST['submit']){
        //membuat variabel untuk menyimpan data inputan yang di isikan di form
        $username = $_POST['username'];
        $password_lama = $_POST['password_lama'];
        $password_baru = $_POST['password'];
        $konfirmasi_password = $_POST['konfirmasi_password'];
         
        //cek dahulu ke database dengan query SELECT
        //kondisi adalah WHERE (dimana) kolom password adalah $password_lama di encrypt m5
        //encrypt -> md5($password_lama)
        $password_lama  = md5($password_lama);
        $cek            = mysqli_query($connect,"SELECT password FROM admin WHERE password='$password_lama'");
         
        if($cek->num_rows){
            //kondisi ini jika password lama yang dimasukkan sama dengan yang ada di database
            //membuat kondisi minimal password adalah 5 karakter
            if(strlen($password_baru) >= 5){
                //jika password baru sudah 5 atau lebih, maka lanjut ke bawah
                //membuat kondisi jika password baru harus sama dengan konfirmasi password
                if($password_baru == $konfirmasi_password){
                    //jika semua kondisi sudah benar, maka melakukan update kedatabase
                    //query UPDATE SET password = encrypt md5 password_baru
                    //kondisi WHERE id user = session id pada saat login, maka yang di ubah hanya user dengan id tersebut
                    $password_baru  = md5($password_baru);
                    $id_user        = ['id']; //ini dari session saat login
                     
                    $query=mysqli_query($connect,"update admin set username='".$username."', password='".$password_baru."' WHERE id='".$id."'") ;
                    if($query){
                        //kondisi jika proses query UPDATE berhasil
                        ?><script type="text/javascript">
        alert("Sukses melakukan update password..!!");
</script>
    <?php
    echo "<meta http-equiv='refresh' content='0; url=table.php'>";
 
                    }else{
                        //kondisi jika proses query gagal
                        ?><script type="text/javascript">
        alert("gagal melakukan update password..!!");
</script>
    <?php
    echo "<meta http-equiv='refresh' content='0; url=profil.php'>";
                    }                   
                }else{
                    //kondisi jika password baru beda dengan konfirmasi password
                    ?><script type="text/javascript">
        alert("konfirmasi tidak cocok password..!!");
</script>
    <?php
    echo "<meta http-equiv='refresh' content='0; url=profil.php'>";
                }
            }else{
                //kondisi jika password baru yang dimasukkan kurang dari 5 karakter
                ?><script type="text/javascript">
        alert("minimal 5 karakter..!!");
</script>
    <?php
    echo "<meta http-equiv='refresh' content='0; url=profil.php'>";
            }
        }else{
            //kondisi jika password lama tidak cocok dengan data yang ada di database
            ?><script type="text/javascript">
        alert("password lama tidak cocok..!!");
</script>
    <?php
    echo "<meta http-equiv='refresh' content='0; url=profil.php'>";
        }
    }
    ?>