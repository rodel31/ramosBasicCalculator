<!DOCTYPE>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login form</title>
</head>
<style type="text/css">
	.container{
		background-color: goldenrod;
		height: 100vh;
		padding: 5px;
	}
	h1{
		color: blue;
		font-family: tahoma;
		font-size: 40px;
	}
	#register{
		grid-column: auto auto;
		display: grid;
		grid-template-columns: auto;
	}
	label{
		width: 255px;
		grid-column: 1/2;
		display: inline-block;
		margin-top: 10px;
	}
	label>input{
		float: right;
		display: inline-block;
		vertical-align: top;
	}
	button{
		margin: 15px;
		width: 120px;
		margin-left: 78px;
		padding: 10px;
		font-size: 24px;
		background-color: red;
		color: whitesmoke;
	}
	a{
		font-family: helvetica;
		font-size: 24px;
	}

</style>
<body>
	<div class="container">
		<h1>Registration Form</h1>
		<form action="register.php" id="register" method="POST">
			<label>Name
			<input type="text" name="name" required>
			</label>
			<label>Email
			<input type="email" name="email" required>
			</label>
			<label>Password
				<input type="password" name="password" required>
			</label>
			<button type="submit" name="register">Register</button>
			<a href="frm_login.php">login</a>
		</form>
	</div>
</body>
</html>