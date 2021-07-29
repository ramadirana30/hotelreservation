
<?php
require_once('koneksi.php');
$action = $_GET['action'];
if($action=='order') {
    
    $idbooking = $_POST["idbooking"];
    $status =  $_POST["status"];

    
  $query = mysqli_query($koneksi, "UPDATE tbl_booking SET status='$status' WHERE id_booking='$idbooking'");
  if($query) {
       
    echo "berhasil!";
    echo '<script type="text/javascript">
				window.location.replace("booknow.php");
			 </script>';
}
    echo mysqli_error($koneksi);

}



?>