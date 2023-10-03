<?php
	include_once('connection.php');
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		
		if(isset($_POST['btnAdd'])){
			$num1=$_POST['ramosAddNum1'];
			$operator='Addition';
			$num2=$_POST['ramosAddNum2'];
			$answer=$_POST['ramosSum'];

			$sql_query="INSERT INTO calculate(firstNumber,operators,secondNumber,answer)VALUES('$num1','$operator','$num2','$answer')";

			mysqli_query($connectionString,$sql_query);
		}
	}
?>