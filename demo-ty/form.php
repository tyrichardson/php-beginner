<?php
    if(isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$min = 5;
		$max = 10;
		$name = array("Tom", "Dick", "Harry");
		
		/*
		if(strlen($username) < $min || strlen($username) > $max ) {
			echo "Username must be between 5 and 10 characters in length.";
		} else {
			echo "You posted a username of " . $username;
			echo "<br />";
			echo "Your password is " . $password;
		}
		*/
		
		if (in_array($username, $name)) {
			echo "Welcome, " . $username . "!";
		} else {
			echo "Sorry, you are not one of our registered users.";
		}
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form.php" method="post"> <!-- inputs become associative array upon submit -->
        <input type="text" name="username" placeholder="Enter username">
        <br />
        <input type="password" name="password" placeholder="password">
        <br />
        <input type="submit" name="submit">
        <br />
    </form>

</body>
</html>