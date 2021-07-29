<?php
require_once('koneksi.php');
$action = $_GET['action'];
if($action=='order') {

    
    $nama = $_POST["nama"];
    $kdbooking = $_POST["kdbooking"];
    $tglbayar = $_POST["tglbayar"];
    $harga = $_POST["harga"];
   
    

  $query = mysqli_query($koneksi, "INSERT INTO tbl_transaksi(nama,kd_booking,tgl_bayar,harga) VALUES ('$nama','$kdbooking','$tglbayar','$harga')"); 
   
  if($query) {
       
    echo "berhasil!";
}
echo mysqli_error($koneksi);
header('Location: laporantr.php');

}


?>