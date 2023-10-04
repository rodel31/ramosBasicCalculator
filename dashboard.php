<?php
	include_once('connection.php');
	session_start();

	if(!isset($_SESSION['user_email'])){
		header("Location: login.php");
	}
	$user_Email=$_SESSION['user_email'];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>
</head>
<style type="text/css">
	.container{
		display: inline-block;
		background-color: goldenrod;
	}
	h1{
		color: blue;
		font-family: tahoma;
		font-size: 40px;
	}
	h2{
		color: green;
		font-family: verdana;
		font-size: 25px;
	}
	p{
		color: white;
		font-family: helvetica;
		font-size: 25px;
	}
	a{
		font-family: helvetica;
		font-size: 25px;
	}
	header{
		width: 100%;
		height: 155px;
		text-align: center;
		background-color: lightsalmon;
		border-bottom: solid lightgray 1px;
		display: inline-block;
	}
	nav{
		display: inline-block;
		width: 250px;
		background-color: lightblue;
		height: 100vh;
		border-right: solid lightgray 2px;
	}
	main{
		display: inline-block;
		width: 70%;
		vertical-align: top;
	}
	section{
		display: inline-block;
		width: 70%;
		vertical-align: top;
	}
	#defaultContent{
		display: inline-block;
		text-align: center;
	}
	#button {
            background-color:green;
            border-color:green;
            color: white  ;
            font-size: 20px;
            width: 250px;
            height: 100px;
            margin-left: 155px;
        }

		#button1 {
            background-color:yellowgreen;
            border-color:green;
            color: white  ;
            font-size: 20px;
            width: 250px;
            height: 100px;
        }
        input[type='number'] 
		{
			font-size: 40px; 
			style=height:40px; 
			display: inline-block;
			float: right;
			vertical-align: middle;
		}
		h1{
			text-align: center;
		}
		label{
			color: blue;
			font-size: 20px;
			display: inline-block;
			width: 775px;
			margin: 10px;
		}
</style>
<body>
	<div class="container">
		<header>
			<h1>Mathematical Calculator</h1>
			<h2>Welcome, <?php echo "$user_Email";?><a href="logout.php">Logout</a></h2>
		</header>
		<nav>
			<h1>Navigation Menu</h1>
			<ul>
		        <li><a href="#" class="toggleContent" data-target="additionContent" id="additionLink">Addition</a></li>
		        <li><a href="#" class="toggleContent" data-target="subtractionContent" id="subtractionLink">Subtraction</a></li>
		        <li><a href="#" class="toggleContent" data-target="multiplicationContent" id="multiplicationLink">Multiplication</a></li>
		        <li><a href="#" class="toggleContent" data-target="divisionContent" id="divisionLink">Division</a></li>
		        <li><a href="index.php">Exit</a></li>
		    </ul>
		</nav>
		<section>
			<main>
				<div id="defaultContent" >
					<h1>Welcome to my Mathematical Calculator</h1>
					<h2>Please click any mathematical calculation on the side navigation</h2>
					<p>Just explore and enjoy every minute of this training</p>
				</div>
				<div id="additionContent" style="display: none;">
					<h1>ADDITION</h1>
					<form id="frm_add" onsubmit="submitForm(event)">
						<input type="hidden" name="operation" value="addition">
						<label>Input First Number :
							<input type="number" name="ramosNum1">
						</label>
						<label>Input Second Number :
							<input type="number" name="ramosNum2">
						</label>
						<input type="button" name="btnAdd" id="button" value="SUM" onclick="calcSum()">
						<input type="reset" name="button1" id="button1" value="CLEAR"> 
						<label id="sum">The sum of two Numbers :
							<input type="number" name="ramosSum">
						</label>
					</form>
				</div>
				<div id="subtractionContent" style="display: none;">
					<h1>SUBTRACTION</h1>
					<form id="frm_sub"action="" method="POST">
						<label>Input First Number :
							<input type="number" name="ramosNum1">
						</label>
						<label>Input Second Number :
							<input type="number" name="ramosNum2">
						</label>
						<input type="button" name="btnSub" id="button" value="SUBTRACT" onclick="calcDifference ()">
						<input type="reset" name="button1" id="button1" value="CLEAR"> 
						<label id="sub">The difference of two Numbers :
							<input type="number" name="ramosDifference">
						</label>
					</form>
				</div>
				<div id="multiplicationContent" style="display: none;">
					<h1>MULTIPLICATION</h1>
					<form id="frm_multi"action="" method="POST">
						<label>Input First Number :
							<input type="number" name="ramosNum1">
						</label>
						<label>Input Second Number :
							<input type="number" name="ramosNum2">
						</label>
						<input type="button" name="btnProd" id="button" value="MULTIPLY" onclick="calcProduct()"> 
						<input type="reset" name="button1" id="button1" value="CLEAR"> 
						<label id="multi">The product of two Numbers :
							<input type="number" name="ramosProduct">
						</label>
					</form>
				</div>
				<div id="divisionContent" style="display: none;">
					<h1>DIVISION</h1>
					<form id="frm_division"action="" method="POST">
						<label>Input First Number :
							<input type="number" name="ramosNum1">
						</label>
						<label>Input Second Number :
							<input type="number" name="ramosNum2">
						</label>
						<input type="button" name="btnDiv" id="button" value="DIVISION" onclick="calcQuotient()"> 
						<input type="reset" name="button1" id="button1" value="CLEAR"> 
						<label id="division">The quotient of two Numbers :
							<input type="number" name="ramosQuotient" >
						</label>
					</form>
					<p id="msg"></p>
				</div>
			</main>
		</section>
	</div>

	<script type="text/javascript" src="script.js"></script>
	
</body>
</html>