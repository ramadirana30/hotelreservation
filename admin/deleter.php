<?php
// include database connection file
include_once("koneksi.php");

// Get id from URL to delete that user
$idbookingresto = $_GET['id'];
// Delete user row from table based on given id
$result = mysqli_query($koneksi, "DELETE FROM tbl_bookingresto WHERE id_bookingresto=$idbookingresto");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:booknowr.php");
?>