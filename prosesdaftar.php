<?php
   require_once("koneksi.php");
   $username = $_POST['email'];
   $pass = $_POST['password'];
   $nama = $_POST['nama'];
   $alamat = $_POST['alamat'];
   $querycek = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE email='$username'");
   $result = mysqli_num_rows($querycek);    
   if($result != 0) {
    echo "<div align='center'>Username Sudah Terdaftar! <a href='register.php'>Back</a></div>";
   } else {
     if(!$username || !$pass || !$nama|| !$alamat) {
       echo "<div align='center'>Masih ada data yang kosong! <a href='register.php'>Back</a>";
     } else {
        $query = mysqli_query($koneksi, "INSERT INTO tbl_user(email,password,nama,alamat) VALUES ('$username','$pass','$nama','$alamat')"); 

       if($query) {
         echo "<div align='center'>Pendaftaran Sukses, Silahkan <a href='login.php'>Login</a></div>";
       } else {
         echo "<div align='center'>Proses Gagal!</div>";
       }
     }
   }
?>