<?php
require_once('koneksi.php');
$action = $_GET['action'];
if($action=='order') {
    
    $data = $_POST;
    $email = 13;
    $nama = $data["nama"];
    $jresto = $data["jresto"];
    $tglmakan = $data["tglmakan"];
    $pilihresto = $data["pilihresto"];
    $keterangan = $data["keterangan"];
    $kdbooking = strtoupper(rand(1000,8000).substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"), 0, 5).'HOTEL');
    
   $query = mysqli_query($koneksi, "INSERT INTO tbl_bookingresto(id_user,nama_lengkap,waktu_pesanan,jenis,keterangan,tgl_makan,kd_booking) VALUES ('$email','$nama','$jresto','$pilihresto','$keterangan','$tglmakan','$kdbooking')"); 
    if($query) {
        header('location: booknowr.php');
    }

    echo mysqli_error($koneksi);
    
}


?>