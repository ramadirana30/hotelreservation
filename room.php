<?php
  session_start();
  include 'koneksi.php';
	if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
		header('location:login.php');
		exit();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Milos Hotel</title>
    
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/jquery-3.4.1.min.js"></script>
<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

<style>

html {
  scroll-behavior: smooth;
}
  body {
    margin : 0;
    padding : 0;
    font-family : sans-serif;
}

header {
    position : absolute;
    top : 0;
    left : 0;
    padding : 0 100px;
    background : #262626;
    width : 100%;
    box-sizing : border-box;
}

header .logo {
    color : #fff;
    height : 130px;
    line-height : 130px;
    font-size : 50px;
    float : left;
    font-weight : bold;
}

header nav {
    float : right;
}

.welcome{
  color : black;
}

.welkon{
  color : black;
}

header nav ul {
    margin : 0;
    padding : 0;
    display : flex;
}

header nav ul li {
    list-style: none;
}

.carousel-inner img{
    width : 100%;
    height : 1313px;
} 

header nav ul li a {
    height : 130px;
    line-height : 130px;
    padding : 0 50px;
    color : #fff;
    text-decoration: none;
    display : block;
    font-size : 30px;
}

header nav ul li a:hover,
header nav ul li a.active {
    color : #fff;
    background : #2196f3;
}

header nav ul li a:hover {
    color : #fff;
    background : #2196f3;
    text-decoration: none;
    display : block;
}

.menu-toogle {
    color : #fff;
    float : right;
    line-height : 50px;
    font-size : 24px;
    cursor : pointer;
    display : none;
    
}

.top{
  text-align:center;
  display:block;
}

.alamat{
  text-align:center;
}

@media (max-width :  991px) {
    header {
        padding : 0 20px;
    }
    .menu-toogle{
        display : block;
    }
    header nav {
        position : absolute;
        width : 100%;
        height : calc(100vh - 50px);
        background : #333;
        top : 50px;
        left : -100%;
        transition : 0.5s;
    }
    header nav.active {
        left : 0;
    }
    header nav ul{
        display : block;
        text-align : center;
    }
    header nav ul li a{

    }
}

#p1 {
    font-size : 200px;
}

* { color:#fff; text-decoration: none;
    font-size : 30px;}

    .welkon {
      font-size : 40px;
    }
    
    #section2 {
}

#section1 {
}

.block
{
  
  max-width: 1100px;
  margin-left : 105px;
  position : relative;
  bottom : 10px;
}
.input-res
{
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  font: 30px 'Open Sans', sans-serif;
  color: #333;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  width: 100%;
  max-width: 1100px;
  background-color: #ddd;
  border: none;
  padding: 15px 15px 15px 15px;
  border-radius: 3px;
  box-shadow: none;
  
  outline: none;
  box-sizing: border-box; 
}

input[type=submit] {
  background-color: #262626;
  border: 0;
  border-radius: 5px;
  cursor: pointer;
  color: #fff;
  font-size:30px;
  font-weight: bold;
  line-height: 1.4;
  padding: 30px;
  width: 230px;
  margin-left : 105px;
  margin-top : 45px;
}

input[type=reset] {
  background-color: #262626;
  border: 0;
  border-radius: 5px;
  cursor: pointer;
  color: #fff;
  font-size:30px;
  font-weight: bold;
  line-height: 1.4;
  padding: 30px;
  width: 230px;
  margin-left : 105px;
  margin-top : 45px;
}

select {
  background-color: #262626;
  border: 0;
  border-radius: 5px;
  cursor: pointer;
  color: #fff;
  font-size:20px;
  font-weight: bold;
  line-height: 1.4;
  padding: 20px;
  width: 230px;
  margin-left : 0px;
  margin-top : 25px;
}

input[type=date] {
  background-color: #262626;
  border: 0;
  border-radius: 5px;
  cursor: pointer;
  color: #fff;
  font-size:20px;
  font-weight: bold;
  line-height: 1.4;
  padding: 20px;
  width: 2000px;
  margin-left : 0px;
  margin-top : 25px;
}

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: #2196f3;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}

.hideme
{
    display:none;
    visibility:hidden;
}
.showme
{
    display:inline;
    visibility:visible;
}

  </style>

</head>
<div class="main" id="section1"><a href="#section2"></a></div>
      <div class="container-fluid" >
  <div class="row" >
    <div class="col-xs-6 col-sm-6 col-lg-6" style="background-color:white; background-image:url('img/login.jpg'); height:1313px; color : black; font-family : times new roman; font-size : 70px; text-align: center; "></div>
    
    <div class="col-xs-6 col-sm-6 col-lg-6" style="background-color:#f9f9f9; height:1313px; color : black; font-family : times new roman; font-size : 70px; ">
   
<h1 style="margin-top:200px; margin-left:100px;">Booking Room</h1>
<form action="room_proses.php?action=order" method="POST">
<p style="color:black; text-align:left; margin-left:100px;  margin-top:80px; margin-bottom:10px; font-size:30px;">Nama :</p>
<div class="block"><input type="text" class="input-res" placeholder="Masukkan Nama" name="nama" required></div>
<p style="color:black; text-align:left; margin-left:100px;  margin-bottom:10px; font-size:30px;">Pilih Tipe Ruangan :</p>
<div class="block">
<select name="jroom" onchange="kamar()" id="jroom" required>
            <option></option>
            <option value="standard">Standard</option>
            <option value="superior">Superior</option>
            <option value="deluxe">Deluxe</option>
            <option value="suite">Suite</option>
    </select>
</div>
<p style="color:black; text-align:left; margin-left:100px;  margin-bottom:10px; font-size:30px;">Pilih Nomor Ruangan :</p>
<div class="block">
<select id="pilihkamar" name="idkamar" required>
       <option></option> 
</select>
</div>
<p style="color:black; text-align:left; margin-left:100px;  margin-bottom:10px; font-size:30px;">Checkin :</p>
<div class="block"><input type="date" class="input-res"  id="checkin" name="checkin" required></div>
<p style="color:black; text-align:left; margin-left:100px;  margin-bottom:10px; font-size:30px;">Checkout :</p>
<div class="block"><input type="date" class="input-res" id="checkout" name="checkout" required></div>
<input type="submit" value="Booking">
<input type="text" name="jenis" class="hideme">
</div>
</form>
</div>
<header>
<div class="logo"> <img style="margin-top:-60px;" width="80%" height="200%"src="img/milosku.png"></div>
    <nav class="active">
        <ul>
        <li><a href="home.php">Home</a></li>
            <li><a href="booknow.php">Book Now</a></li>
            <li><a href="about.php">About</a></li>
            <li class="dropdown" style="margin-right:750px;"><a href="#" class="dropbtn">My Reservation</a>
            <div class="dropdown-content">
      <a href="reservation.php">Room and Meeting</a>
      <a href="reservationr.php">Restaurant</a>
    </div>
            </li>
            <?php
                $query = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE id_user = '".$_SESSION['id']."'");
                $data = mysqli_fetch_array($query);
            ?>
            <li style="margin-right:-100px;" class="dropdown"><a href="#" class="dropbtn"><?= ucfirst($data['nama']); ?></a>
            <div class="dropdown-content">
            <a href="edituser.php?id=<?= $data['id_user']; ?>">Edit Profile</a>
      <a href="logout.php">Logout</a>
</ul>
</ul>
</nav>
<div class="menu-toogle"><i class="fa fa-bars" aria-hidden="true"></i></div>
</header>
<body>

</body>

<script src="jquery-3.4.0.min.js"></script>
    <script type="text/javascript">
        function kamar(){
            var jenis = $('#jroom').val();
            $.ajax({
                url : "room_proses.php?action=getkamar&&jenis="+jenis,
                type : "GET",
                dataType : "JSON",
                success : function(data)
                {
                    var $el = $('#pilihkamar');
                    $el.html(' ');
                    $.each(data, function(key, value){
                        $el.append($("<option></option>")
                        .attr("value", value.id_kamar).text(value.nomor));
                    });
                   
                }
            })
           
        }
    </script>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.menu-toogle').click(function(){
        $('nav').toggleClass('active')
    })
    })

</script>
</html>