<?php
require_once('koneksi.php');
$action = $_GET['action'];
if($action=='order') {
    
  
    $idbookingresto = $_POST["idbookingresto"];
    $nama = $_POST["nama"];
    $jresto = $_POST["jresto"];
    $tglmakan = $_POST["tglmakan"];
    $pilihresto = $_POST["pilihresto"];
    $keterangan = $_POST["keterangan"];
    $kdbooking = strtoupper(rand(1000,8000).substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"), 0, 5).'HOTEL');
    
   $query = mysqli_query($koneksi, "UPDATE tbl_bookingresto SET nama_lengkap='$nama',waktu_pesanan='$jresto',jenis='$pilihresto',keterangan='$keterangan',tgl_makan='$tglmakan',kd_booking='$kdbooking' WHERE id_bookingresto='$idbookingresto'");
    if($query) {
        header('location: booknowr.php');
    }

    echo mysqli_error($koneksi);
    
}


?>