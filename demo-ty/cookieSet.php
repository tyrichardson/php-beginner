<?php

$name = "SomeName";
$value = 101;
// time() evaluates to all the seconds from Jan 1, 1970
// add second * minutes * hours * days
// ( 60*60*24*7 ) == a week
$expiration = time() + ( 60*60*24*7 );
setcookie( "$name", "$value", "$expiration" );

?>

<!DOCTYPE html>
<html lang = "en">
<head>
<meta charset = "UTF-8">
<meta name = "viewport" content = "width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>

</body>
</html>