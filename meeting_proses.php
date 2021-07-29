<?php
require_once('koneksi.php');
$action = $_GET['action'];
if($action=='order') {
    session_start();
    $data = $_POST;
    
    $email = $_SESSION['id'];
    $nama = $data["nama"];
    $jmeeting = $data["jmeeting"];
    $checkin = $data["checkin"];
    $checkout = $data["checkout"];
    $idmeeting = $data["idmeeting"];
    $jenis = $data["jenis"];
    
    function IntervalDays($checkin,$checkout){
        $CheckInX = explode("-", $checkin);
        $CheckOutX =  explode("-", $checkout);
        $date1 =  mktime(0, 0, 0, $CheckInX[1],$CheckInX[2],$CheckInX[0]);
        $date2 =  mktime(0, 0, 0, $CheckOutX[1],$CheckOutX[2],$CheckOutX[0]);
        $interval =($date2 - $date1)/(3600*24);
        // returns numberofdays
        return  $interval ; }

        $jhari = IntervalDays($checkin,$checkout);
 
  $hargaku = mysqli_query($koneksi, "SELECT * FROM tbl_meeting WHERE id_meeting = '$idmeeting'");
  $hargas = mysqli_fetch_array($hargaku);
  $harga = $hargas['paid'];
  $total = $harga * $jhari;
  $kdbooking = strtoupper(rand(1000,8000).substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"), 0, 5).'HOTEL');
  $cekkamar = mysqli_query($koneksi, "SELECT * FROM tbl_booking WHERE tgl_checkin = '$checkin' AND tgl_checkout = '$checkout' AND id_jenis = '$idmeeting' AND tipe_jenis = 'meeting'");
  
  $result = mysqli_num_rows($cekkamar);  
  if($result == 0) {

    $query = mysqli_query($koneksi, "INSERT INTO tbl_booking(id_user,nama_lengkap,jenis,id_jenis,tipe_jenis,tgl_checkin,tgl_checkout,days,harga,total,kd_booking) VALUES ('$email','$nama','$jmeeting','$idmeeting','meeting','$checkin','$checkout','$jhari','$harga','$total','$kdbooking')"); 
    header('location: roomberhasil.php');
    
}
else {
    echo '<script language="javascript">';
    echo 'window.alert("Ruang Sudah di Pesan!");';
    echo 'window.location="meeting.php";';
    echo '</script>'; 
}

    echo mysqli_error($koneksi);
    
}

elseif($action=='getmeeting') {
    $jmeeting = $_GET['jenis'];
    $query = mysqli_query($koneksi,"SELECT * FROM tbl_meeting WHERE kategori='$jmeeting'");
    $hasil = [];
    $no = 0;
    foreach($query as $val) {
        $hasil[$no] = $val;
        $no++;
    }

    echo json_encode($hasil);
}

?>