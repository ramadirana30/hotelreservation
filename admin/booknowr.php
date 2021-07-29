<?php
session_start();
if(isset($_SESSION['admin']))
{
    
?>
<?php
// Create database connection using config file
include_once("koneksi.php");

// Fetch all users data from database
$result = mysqli_query($koneksi, "SELECT * FROM tbl_bookingresto ORDER BY id_bookingresto DESC");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Hotel Milos</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" >
    
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#">Admin Hotel Milos</a>
				
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="1.png" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Admin</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
		<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-navicon">&nbsp;</em> Manajemen Konten <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
				<li><a class="" href="booknow.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Booknow (Room and Meeting)
					</a></li>
					<li><a class="" href="booknowr.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Booknow (Restaurant)
					</a></li>
					<li><a class="" href="tmeeting.php">
						<span class="fa fa-home">&nbsp;</span> Tambah Ruang Meeting
					</a></li>
					<li><a class="" href="tkamar.php">
						<span class="fa fa-home">&nbsp;</span> Tambah Kamar
					</a></li>
				</ul>
			</li>
			<li><a href="muser.php"><em class="fa fa-user-o">&nbsp;</em> Manajemen User</a></li>
			<li><a href="laporantr.php"><em class="fa fa-bar-chart">&nbsp;</em> Laporan</a></li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-2">
				<em class="fa fa-navicon">&nbsp;</em> Option <span data-toggle="collapse" href="#sub-item-2" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-2">
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Maintenance
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Ganti Password Admin
					</a></li>
				</ul>
			</li>
			<li><a href="logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb" style="width:125%;">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
                <li class="active">Dashboard</li>
                <li class="active">Booknow (Room and Meeting)</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
                <h1 class="page-header">Restaurant</h1>
                <table class="table table-striped table-hover table-sm table-bordered"  >
			<thead class="thead-dark" >
				<tr>
					<th>ID BOOKING</th>
					<th>ID USER</th>
					<th>NAMA LENGKAP</th>
					<th>WAKTU PESANAN</th>
                    <th>JENIS</th>
                    <th>KETERANGAN</th>
                    <th>TANGGAL MAKAN&nbsp;&nbsp;&nbsp;&nbsp;</th>
                    <th>KODE BOOKING</th>
                    <th>STATUS</th>
                    <th>AKSI &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                    <th>TINDAKAN</th>
				</tr>
			</thead>
			<tbody>
            <?php  
             while($user_data = mysqli_fetch_array($result)) { 
				
                echo "<tr>";
                echo "<td>".$user_data['id_bookingresto']."</td>";
                echo "<td>".$user_data['id_user']."</td>";
                echo "<td>".$user_data['nama_lengkap']."</td>"; 
                echo "<td>".$user_data['waktu_pesanan']."</td>";
                echo "<td>".$user_data['jenis']."</td>";
                echo "<td>".$user_data['keterangan']."</td>"; 
                echo "<td>".$user_data['tgl_makan']."</td>";
                echo "<td>".$user_data['kd_booking']."</td>";
                echo "<td>".$user_data['status']."</td>"; 
                echo "<td><a class='btn btn-success' href='editr.php?id=$user_data[id_bookingresto]'>Edit</a> <a class='btn btn-success' href='deleter.php?id=$user_data[id_bookingresto]'>Delete</a>"; 
                echo "<td><a class='btn btn-success' href='status.php?id=$user_data[id_bookingresto]'>Status</a>'</td>";
                    
             }?>
						</tr>
				
			<tbody>
                
		</table>
       <input type="button" onclick="location.href='tambahr.php'" class="btn btn-success" value="TAMBAH PESANAN">
			</div>
		</div>
	
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>
		
</body>
</html>
<?php
}
else{
    header('Location: login.php');
}


?>