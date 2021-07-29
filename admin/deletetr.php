<?php
// include database connection file
include_once("koneksi.php");

// Get id from URL to delete that user
$idtransaksi = $_GET['id'];
// Delete user row from table based on given id
$result = mysqli_query($koneksi, "DELETE FROM tbl_transaksi WHERE id_transaksi=$idtransaksi");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:laporantr.php");
?>