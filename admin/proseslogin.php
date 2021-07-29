<?php

	require_once "koneksi.php";
	$username = $_POST['username'];
	$password  = $_POST['password'];

	$cekuser 	= mysqli_query($koneksi, "SELECT * FROM tbl_admin WHERE username = '$username' AND password = '$password'");

	if(mysqli_num_rows($cekuser) > 0)
	{
		$data = mysqli_fetch_array($cekuser);
		session_start();
		$_SESSION['admin'] = [
			'id_admin' => $data['id_admin'],
			'status'  => 'login'
		];
    loadUser();
  }
	else {
		loadFalse();
	}

	function loadUser()
	{
		echo '<script type="text/javascript">alert("Berhasil Login")</script>';
		echo '<script type="text/javascript">
				window.location.replace("index.php");
			 </script>';
	}


	function loadFalse()
	{
		echo '<script type="text/javascript">alert("Gagal Login")</script>';
		echo '<script type="text/javascript">
				window.location.replace("login.php");
			 </script>';
	}

?>