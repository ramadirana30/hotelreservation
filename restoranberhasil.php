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
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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

.card {
    position: relative;
    width : 800px;
    height : 750px;
    background : #262626;
    overflow : hidden;
}

input,
.toggle {
    position : absolute;
    height: 70px;
    width : 70px;
    bottom : 40px; 
    right : 40px;
    outline : none;
    z-index:10;
}

input{
    opacity : 0;
}
.toggle{
    pointer-events : none;
    border-radius : 50%;
    background : #fff;
    transition : 0.5s;
    text-align : center;
    line-height : 70px;
    font-size:50px;
    color : #262626;
    box-shadow : 0 0 0 0px #262626;
}
input:checked ~ .toggle{
    box-shadow : 0 0 0 1000px #262626;
    transform : rotate(255deg);
    
}

.details,.imgBx {
    position : absolute;
    height: 100%;
    width : 100%;
    top : 0;
    left : 0;

}

.details{
    padding : 40px;
    box-sizing : border-box;
    z-index : 11;
    pointer-events : none;
    transition : 0.5s;
    opacity :0;
}

input:checked ~ .details {
    opacity : 1;
    transition-delay : 0.5s;
}

.details h2 {
    margin-bottom: 5px;
    color : #fff;
}

.details p {
    margin-bottom: 5px;
    color : #fff;
    padding : 0;
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
  </style>

</head>
<div class="main" id="section1"><a href="#section2"></a></div>

      <div class="container-fluid" >
<div class="row" >
    <div class="col-xs-12 col-sm-12 col-lg-12" style="background-color:white; height:200px; color : black; font-family : times new roman; font-size : 70px; text-align: center; margin-top : 150px;">PESANAN BERHASIL!<hr style=" border: 2px solid black;"></div>
</div>
<div class="row" >
    <div class="col-xs-12 col-sm-12 col-lg-12" style="background-color:white; height:900px; color : black; font-family : times new roman; font-size : 70px; text-align: center; margin-top : 150px;">
    KODE BOOKING ANDA ADALAH <br> <p style="color:red; font-size:150px;">
    <?php
                $query = mysqli_query($koneksi, "SELECT kd_booking FROM tbl_bookingresto WHERE id_user = '".$_SESSION['id']."'");
                $data = mysqli_fetch_array($query);
                echo "" .$data['kd_booking'];   
            ?></p> 
            SILAHKAN CEK DI MY RESERVATION UNTUK DETAIL PEMESANAN.
    </div>
</div>
<div class="row" >
    <div class="col-xs-4 col-sm-4 col-lg-14" style="background-color:#262626; height:400px;"><div class="ayam" style="margin : 50px; font-family : times new roman;"><p>CONTACT US</p>
      <a href="tel:://+62219873216"><h4>(+6221) 987 3216</h4>
      <a href="mailto:miloshotel@luxury.com"><p>miloshotel@luxury.com</p></a>
</div>
    </div>
    <div class="col-xs-4 col-sm-4 col-lg-14" style="background-color:#262626; height:400px;"><div class="ayam" style="margin : 50px; font-family : times new roman; margin-left:200px;"><p>MEDIA SOSIAL</p>
      <a  href="https://www.intagram.com"><img src="img/insta.png" height="78px" width="78px" ></a>
      <a href="https://www.facebook.com"><img src="img/fb.png" height="90px" width="90px"></a>
      <a href="https://www.twitter.com"><img src="img/tw.png" height="75px" width="75px"></a>
      <a href="https://www.line.me"><img src="img/line.png" height="75px" width="75px"></a>
      <a href="https://www.linkedin.com"><img src="img/linkd.png" height="60px" width="60px"></a>
    </div>
    </div>
    
    <div class="col-xs-4 col-sm-4 col-lg-14" style="background-color:#262626; height:400px;"><div class="ayam" style="margin : 50px; font-family : times new roman;  margin-left:300px;"><p>HELP INFO</p>
      <ul>
        <li>ROOM </li>
        <li>RESTAURANT </li>
        <li>MEETING </li>
  </ul>
  </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-lg-12" style="background-color: #262626; height:155px;">
    <p class="alamat">THE MILOS HOTEL JAKARTA, JL. MH THAMRIN NO. 1, 10310, JAKARTA INDONESIA <a href="tel:://+62219873216">(+6221) 987 3216</a></p>
      
    <div class="main" id="section2">
    <center><a href="#section1"><img src="img/top.png" height="80px" width="150px" position="center"></a> </center>
    </div>
  </div>
</div>
</div>
<header>
    <div class="logo"> LOGO </div>
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
    </div>
            </li>
</ul>
</nav>
<div class="menu-toogle"><i class="fa fa-bars" aria-hidden="true"></i></div>
</header>
<body>

</body>


<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.menu-toogle').click(function(){
        $('nav').toggleClass('active')
    })
    })
</script>
</html>