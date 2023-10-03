<?php
	include_once('connection.php');
	session_start();

	if(isset($_POST['login'])){
		$email=$_POST['email'];
		$password=$_POST['password'];

		$sqlQuery="SELECT * FROM user WHERE email='$email' && password='$password'";

		$result=mysqli_query($connectionString,$sqlQuery);

		$user_matched=mysqli_num_rows($result);

		if($user_matched > 0){
			$_SESSION['user_email'] = $email;
			$_SESSION['user_password'] = $password;
			header("Location: dashboard.php");
		}
		else{
			header("Location: frm_login.php");
		}
	}
?>