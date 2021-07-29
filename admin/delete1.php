<?php
// include database connection file
include_once("koneksi.php");

// Get id from URL to delete that user
$idbooking = $_GET['id'];
// Delete user row from table based on given id
$result = mysqli_query($koneksi, "DELETE FROM tbl_booking WHERE id_booking=$idbooking");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:booknow.php");
?>