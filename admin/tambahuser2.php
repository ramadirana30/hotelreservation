<?php
   require_once("koneksi.php");
   $username = $_POST['email'];
   $pass = $_POST['password'];
   $nama = $_POST['nama'];
   $alamat = $_POST['alamat'];
   $sql = "SELECT * FROM tbl_user WHERE email = '$username'";
   $query = mysqli_query($koneksi, "INSERT INTO tbl_user(email,password,nama,alamat) VALUES ('$username','$pass','$nama','$alamat')");
   $querycek = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE email='$username'");
   $result = mysqli_num_rows($querycek);    
   if($result != 0) {
    header('location: muser.php');
   } else {
     if(!$username || !$pass || !$nama || !$alamat) {
       echo "<div align='center'>Masih ada data yang kosong! <a href='adduser.php'>Back</a>";
     } else {
       $data = "INSERT INTO tbl_user VALUES (NULL, '$username', '$pass', '$nama','$alamat')";
       $simpan = mysqli_query($data);
       if($simpan) {
         echo "<div align='center'>Pendaftaran Sukses, Silahkan <a href='login.php'>Login</a></div>";
       } else {
         echo "<div align='center'>Proses Gagal!</div>";
       }
     }
   }
?>