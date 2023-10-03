<?php
	$host='localhost';
	$server='ramosregistration';
	$userName='root';
	$password='';

	$connectionString=mysqli_connect($host, $userName, $password, $server);

	if($connectionString->connect_error){
		die("Connection failed");
	}
?>