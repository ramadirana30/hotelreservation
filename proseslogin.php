<?php
	session_start();
	include('koneksi.php');
	if($_SERVER["REQUEST_METHOD"] == "POST"){
 
		$username=$_POST['email'];
		$password=$_POST['password'];
 
		$query=mysqli_query($koneksi,"SELECT * FROM tbl_user where email='$username' AND password='$password'");
		if (mysqli_num_rows($query)<1){
			$_SESSION['msg']="Login Failed, User not found!";
			header('location:login.php');
		}
		else{
			$row=mysqli_fetch_array($query);
			$_SESSION['id']=$row['id_user'];
			header('location: home.php');
			}
		}
 
?>