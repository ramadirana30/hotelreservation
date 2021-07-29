<?php
   require_once("koneksi.php");
   $iduser = $_POST['iduser'];
   $username = $_POST['email'];
   $pass = $_POST['password'];
   $nama = $_POST['nama'];
   $alamat = $_POST['alamat'];
   
   $querycek = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE email='$username'");
   $result = mysqli_num_rows($querycek);    
   if($result != 0) {
    header('location: muser.php');
   } else {
     if(!$username || !$pass || !$nama|| !$alamat) {
       echo "<div align='center'>Masih ada data yang kosong! <a href='muser.php'>Back</a>";
     } else {
      $query = mysqli_query($koneksi, "UPDATE tbl_user SET email='$username',password='$pass',nama='$nama',alamat='$alamat' WHERE id_user='$iduser'");
       if($query) {
        header('location: muser.php');
       } else {
         echo "<div align='center'>Proses Gagal!</div>";
       }
     }
   }
?>