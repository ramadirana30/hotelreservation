<?php
require_once('koneksi.php');
$action = $_GET['action'];
if($action=='order') {
    $data = $_POST;
    
    $jkamar = $data["jkamar"];
    $nomor = $data["nomor"];
    $paid = $data["paid"];
    $query = mysqli_query($koneksi, "INSERT INTO tbl_kamar(kategori,nomor,paid) VALUES ('$jkamar','$nomor','$paid')");
    if($query) {
       
        header('location: booknow.php');
    }
    echo mysqli_error($koneksi);
    
    }