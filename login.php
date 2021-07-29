<?php
	session_start();
	include('koneksi.php');
	if($_SERVER["REQUEST_METHOD"] == "POST"){
 
		$username=$_POST['email'];
		$password=$_POST['password'];
 
		$query=mysqli_query($koneksi,"SELECT * FROM tbl_user where email='$username' AND password='$password'");
		if (mysqli_num_rows($query)<1){
			$_SESSION['msg']="Login Failed, User not found!";
			header('location:dashboard.php');
		}
		else{
			$row=mysqli_fetch_array($query);
			$_SESSION['id']=$row['id_user'];
			header('location: dashboard.php');
			}
		}
 
?>
<?php
	session_start();
	include('koneksi.php');
 
	if (isset($_SESSION['id'])){
		header('location:home.php');
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
  bottom : 60px;
}
.input-res
{
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  font: 50px 'Open Sans', sans-serif;
  color: #333;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  width: 100%;
  max-width: 1100px;
  background-color: #ddd;
  border: none;
  padding: 30px 30px 30px 30px;
  border-radius: 3px;
  box-shadow: none;
  
  outline: none;
  box-sizing: border-box; 
}

input[type=button] {
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
}

  </style>

</head>
<div class="main" id="section1"><a href="#section2"></a></div>
      <div class="container-fluid" >
  <div class="row" >
    <div class="col-xs-6 col-sm-6 col-lg-6" style="background-color:white; background-image:url('img/login.jpg'); height:1313px; color : black; font-family : times new roman; font-size : 70px; text-align: center; "></div>
    <div class="col-xs-6 col-sm-6 col-lg-6" style="background-color:#f9f9f9; height:1313px; color : black; font-family : times new roman; font-size : 70px; ">
<h1 style="margin-top:200px; margin-left:100px;">Login</h1>
<form action="proseslogin.php" method="post">
<p style="color:black; text-align:left; margin-left:100px;  margin-top:80px; margin-bottom:100px; font-size:50px;" >Email :</p>
<div class="block"><input type="text" class="input-res" name="email" required></div>
<p style="color:black; text-align:left; margin-left:100px;  margin-bottom:100px; font-size:50px;">Password :</p>
<div class="block"><input type="password" class="input-res" name="password" required></div>
<input type="submit" value="Login">
<a href="register.php"><input type="button" value="Register"></a>
</form>
<p style="color:black; text-align:left; margin-left:100px;  margin-bottom:20px; font-size:50px;">
<?php
 
		if (isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
 
	?>
  </p>
</div>

</div>
<header>
<div class="logo"> <img style="margin-top:-60px;" width="80%" height="200%"src="img/milosku.png"></div>
    <nav class="active">
        <ul>
        <li><a href="homet.php">Home</a></li>
            <li><a href="booknowt.php">Book Now</a></li>
            <li style="margin-right:1210px;"><a href="aboutt.php">About</a></li>
            <li style="margin-right:-85px;"><a href="#">Login</a></li>
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