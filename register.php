<?php
	include_once('connection.php');

	if(isset($_POST['register'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$password=$_POST['password'];

		$sql_query="SELECT 'email' FROM user WHERE email = '$email'";

		$email_result=mysqli_query($connectionString,$sql_query);

		$user_matched=mysqli_num_rows($email_result);

		if($user_matched > 0){
			echo "<br/><br/><strong>Error:</strong> User already exists with the email id '$email'";
		}
		else{
			$sql_query="INSERT INTO user(name,email,password)VALUES('$name','$email','$password')";

			$result=mysqli_query($connectionString,$sql_query);
		}

		if($result){
			echo"<br/><br/> User Registered successfully";
		}
		else{
			echo"Registration error. Please try again.";
			mysql_error($connectionString);
		}
	}

?>