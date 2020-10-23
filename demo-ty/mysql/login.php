<?php

if(isset($_POST['submit'])) {
	// test with echo "yes, getting info"
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$connection = mysqli_connect("localhost", "root", "root", "loginapp");
	
		if($connection) {
			echo "We are connected to loginapp in mySQL";
		} else {
			die("Database connection failed");
		}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	
</head>
<body>
<div class="container">
<div class="col-xs-6">
	<form action="login.php" method="post">
		<div class="form-group">
		<label for="username">Username</label>
		<input type="text" name="username" class="form-control">
		</div>
		
		<div class="form-group">
		<label for="password">Password</label>
		<input type="text" name="password" class="form-control">
		</div>
		
		<input type="submit" name="submit" value="Submit" class="btn btn-primary">
		
	</form>
	
</div>
</div>
    
</body>
</html>