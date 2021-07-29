<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$email = $_POST['email'];
$pass = $_POST['password'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
 
// update data ke database
mysqli_query($koneksi,"UPDATE tbl_user SET email='$email', password='$pass', nama='$nama',alamat='$alamat' WHERE id_user='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:home.php");
 
?>