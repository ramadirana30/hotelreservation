<?php
require_once('koneksi.php');
$action = $_GET['action'];
if($action=='order') {

    
    $idtransaksi = $_POST["idtransaksi"];
    $nama = $_POST["nama"];
    $kdbooking = $_POST["kdbooking"];
    $harga = $_POST["harga"];
    $tglbayar = $_POST["tglbayar"];
   
    $query = mysqli_query($koneksi, "UPDATE tbl_transaksi SET nama = '$nama',kd_booking='$kdbooking',tgl_bayar='$tglbayar',harga='$harga' WHERE id_transaksi='$idtransaksi'");
   
  if($query) {
       
    echo "berhasil!";
    header('Location: laporantr.php');
}
echo mysqli_error($koneksi);

}


?>