<?php
require_once('koneksi.php');
$action = $_GET['action'];
if($action=='order') {
    $data = $_POST;
    
    $email = 13;
    $jmeeting = $data["jmeeting"];
    $nomor = $data["nomor"];
    $paid = $data["paid"];
    $query = mysqli_query($koneksi, "INSERT INTO tbl_meeting(id_meeting,kategori,nomor,paid) VALUES ('$email','$jmeeting','$nomor','$paid')");
    if($query) {
       
        header('location: booknow.php');
    }
    echo mysqli_error($koneksi);
    
    }