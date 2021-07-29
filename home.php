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
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="img/sunset.jpg" alt="First slide">
            <div class="carousel-caption" style="margin-bottom : 460px;">
    <p style="font-size : 150px; font-family : Brush Script MT, Brush Script Std, cursive;">Welcome to The Milos Hotel</p>
    <a href="" class="typewrite" data-period="2000" data-type='[ "The Luxury Hotel.", "Make your holiday Fun and Relaxing." ]'>
    <span class="wrap"></span>
  </a>
  </div>

          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/depan.jpg" alt="Second slide">
            <div class="carousel-caption" style="margin-bottom : 460px;">
    <p style="font-size : 150px; font-family : Brush Script MT, Brush Script Std, cursive;">Welcome to The Milos Hotel</p>
    <a href="" class="typewrite" data-period="2000" data-type='[ "The Luxury Hotel.", "Make your holiday Fun and Relaxing." ]'>
    <span class="wrap"></span>
  </a>
  </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/sultan1.jpg" alt="Third slide">
            <div class="carousel-caption" style="margin-bottom : 460px;">
    <p style="font-size : 150px; font-family : Brush Script MT, Brush Script Std, cursive;">Welcome to The Milos Hotel</p>
    <a href="" class="typewrite" data-period="2000" data-type='[ "The Luxury Hotel.", "Make your holiday Fun and Relaxing." ]'>
    <span class="wrap"></span>
  </a>
  </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/depan2.jpg" alt="Fourth slide">
            <div class="carousel-caption" style="margin-bottom : 460px;">
    <p style="font-size : 150px; font-family : Brush Script MT, Brush Script Std, cursive;">Welcome to The Milos Hotel</p>
    <a href="" class="typewrite" data-period="2000" data-type='[ "The Luxury Hotel.", "Make your holiday Fun and Relaxing." ]'>
    <span class="wrap"></span>
  </a>
  </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/kolam2.jpg" alt="Fifth slide">
            <div class="carousel-caption" style="margin-bottom : 460px;">
    <p style="font-size : 150px; font-family : Brush Script MT, Brush Script Std, cursive;">Welcome to The Milos Hotel</p>
    <a href="" class="typewrite" data-period="2000" data-type='[ "The Luxury Hotel.", "Make your holiday Fun and Relaxing." ]'>
    <span class="wrap"></span>
  </a>
  </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <div class="container-fluid" >
      <div class="row" >
    <div class="col-xs-12 col-sm-12 col-lg-12" style="background-color:white; height:750px;"><center style="margin : 100px; font-family : times new roman;"><br><div><h1 class="welcome">WELCOME TO THE MILOS HOTEL JAKARTA</h1>
    <br>
  <p class="welkon">What is luxury to you? Is it a lavish holiday or just pure relaxation? We will tailor our services to you. Individualistic luxury.

Enter our world and discover the city’s landmarks and its history, along with our unique European luxury service. The Milos Hotel Jakarta features 20 rooms and suites, an array of gastronomic restaurants, state-of-the-art meeting rooms, lavish ballrooms and a world class Swimming Pool. Whether you are in the mood for a refreshing swim on top of Jakarta or just want to enjoy your sophisticated and stylish room, The Milos Hotel Jakarta awaits you.</p></div></div>
</center>
</div>
<div class="row">
<div class="col-xs-6 col-sm-6 col-lg-6" style="background-color:#f9f9f9;"> <img src="img/map.jpg" height="96%" width="100%"></div>
<div class="col-xs-6 col-sm-6 col-lg-6" style="background-color:#f9f9f9"><p style="font-size : 70px; color : black; font-family : times new roman;">MAPS</p> 
<p style="font-size : 50px; color : black; font-family : times new roman;">Located right in South Jakarta, The Milos Hotel is a landmark destination on Delaware Place, one-half block west of Gelora Bung Karno Stadion – a strip of lively, high-energy hotspots full of Jakarta flare and international flavor.
</p></div>
  </div>
  <div class="row" >
    <div class="col-xs-12 col-sm-12 col-lg-12" style="background-color:white; height:200px; color : black; font-family : times new roman; font-size : 70px; text-align: center; margin-top : 40px;">PROMO<hr style=" border: 2px solid black;"></div>
</div>
<div class="row" >
    <div class="col-xs-4 col-sm-4 col-lg-4" style="background-color:white; height:800px;"><img width="100%" height="95%" src="img/ramadhan.jpg">HAHA</div>
    <div class="col-xs-4 col-sm-4 col-lg-4" style="background-color:white; height:800px;"><img width="100%" height="95%" src="img/ketupatt.jpg"></div>
    <div class="col-xs-4 col-sm-4 col-lg-4" style="background-color:white; height:800px;"><img width="100%" height="95%" src="img/liburann.jpg"></div>
</div>
<div class="row" >
    <div class="col-xs-4 col-sm-4 col-lg-14" style="background-color:#262626; height:400px;"><div class="ayam" style="margin : 50px; font-family : times new roman;"><p>CONTACT US</p>
      <a href="tel:://+62219873216"><h4>(+6221) 987 3216</h4>
      <a href="mailto:miloshotel@luxury.com"><p>miloshotel@luxury.com</p></a>
</div>
    </div>
    <div class="col-xs-4 col-sm-4 col-lg-14" style="background-color:#262626; height:400px;"><div class="ayam" style="margin : 50px; font-family : times new roman; margin-left:200px;"><p>SOCIAL MEDIA</p>
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


<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.menu-toogle').click(function(){
        $('nav').toggleClass('active')
    })
    })

    var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };
</script>
</html>