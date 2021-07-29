<?php
session_start();
if(isset($_SESSION['admin']))
{
    
?>
<?php
// Create database connection using config file
include_once("koneksi.php");

// Fetch all users data from database
$result = mysqli_query($koneksi, "SELECT * FROM tbl_transaksi ORDER BY id_transaksi DESC");
?>

<html>
<head>    
    <title>1</title>
</head>

<body>

<center>
 
		<h2>DATA LAPORAN PENGHASILAN</h2>
		<h4>HOTEL MILOS</h4>
 
	</center>

    <table width='80%' border=1 align="center">

    <tr>
        <th>ID_Transaksi</th> <th>Kode Booking</th> <th>Harga</th> <th>Tanggal Bayar</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['id_transaksi']."</td>";
        echo "<td>".$user_data['kd_booking']."</td>";
        echo "<td>".$user_data['harga']."</td>"; 
        echo "<td>".$user_data['tgl_bayar']."</td>";
    }
    ?>
    </table>
    <br><br>
    <table border="1" align="center">
    <tr>
    <td>TOTAL PENDAPATAN</td>
    </tr>
    <tr>
    <td><?php

    $jumlahkan = mysqli_query($koneksi, "SELECT SUM(harga) AS jumlah_total FROM tbl_transaksi"); //perintah untuk menjumlahkan


    $t = mysqli_fetch_array($jumlahkan); //menyimpan hasil query ke variabel $t

    echo "<b>Rp. " . number_format($t['jumlah_total']) . " </b>";//menampilkaan hasil penjumlahan

?>
    
    
    </td>
    </tr>
    </table>
    <br><br><br><br><br><br><br><br>

    <center>
    Hormat Kami <br><br><br><br><br>
    <u>CEO HOTEL MILOS</u>
    </center>
    <script>
		window.print();
	</script>
</body>
</html>
<?php
}
else{
    header('Location: login.php');
}


?>