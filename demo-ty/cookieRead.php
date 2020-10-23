<!DOCTYPE html>
<html lang = "en">
<head>
<meta charset = "UTF-8">
<meta name = "viewport" content = "width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<?php
if(isset($_COOKIE['SomeName'])) {
	$someOne = $_COOKIE['SomeName'];
	echo $someOne; // displays the value in the cookie, not the name of the cookie
} else {
	$someOne = "";
}
?>

</body>
</html>