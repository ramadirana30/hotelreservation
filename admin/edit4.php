<?php
require_once('koneksi.php');
$action = $_GET['action'];
if($action=='order') {
    
    $idbooking = $_POST["idbooking"];
    $nama = $_POST["nama"];
    $jroom = $_POST["jroom"];
    $checkin = $_POST["checkin"];
    $checkout = $_POST["checkout"];
    $idkamar = $_POST["idkamar"];
    $jenis = $_POST["jenis"];
    
    function IntervalDays($checkin,$checkout){
        $CheckInX = explode("-", $checkin);
        $CheckOutX =  explode("-", $checkout);
        $date1 =  mktime(0, 0, 0, $CheckInX[1],$CheckInX[2],$CheckInX[0]);
        $date2 =  mktime(0, 0, 0, $CheckOutX[1],$CheckOutX[2],$CheckOutX[0]);
        $interval =($date2 - $date1)/(3600*24);
        // returns numberofdays
        return  $interval ; }

        $jhari = IntervalDays($checkin,$checkout);
 
  $hargaku = mysqli_query($koneksi, "SELECT * FROM tbl_kamar WHERE id_kamar = '$idkamar'");
  $hargas = mysqli_fetch_array($hargaku);
  $harga = $hargas['paid'];
  $total = $harga * $jhari;
  $kdbooking = strtoupper(rand(1000,8000).substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"), 0, 5).'HOTEL');
  $cekkamar = mysqli_query($koneksi, "SELECT * FROM tbl_booking WHERE tgl_checkin = '$checkin' AND tgl_checkout = '$checkout' AND id_jenis = '$idkamar' AND tipe_jenis = 'kamar'");
  $queryu = mysqli_query($koneksi, "UPDATE tbl_booking SET nama_lengkap='$nama',jenis='$jroom',id_jenis='$idkamar',tipe_jenis='kamar',tgl_checkin='$checkin',tgl_checkout='$checkout',days='$jhari',harga='$harga',total='$total',kd_booking='$kdbooking' WHERE id_booking='$idbooking'");
  $result = mysqli_num_rows($cekkamar); 
  if($result == 0) {
    if($queryu) {
       
        header('location: booknow.php');
        }
    }

    echo mysqli_error($koneksi);
    

}

elseif($action=='getkamar') {
    $jroom = $_GET['jenis'];
    $query = mysqli_query($koneksi,"SELECT * FROM tbl_kamar WHERE kategori='$jroom'");
    $hasil = [];
    $no = 0;
    foreach($query as $val) {
        $hasil[$no] = $val;
        $no++;
    }

    echo json_encode($hasil);
}
?>
