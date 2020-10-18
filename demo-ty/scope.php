<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$x = "outside";

function convert() {
// global $x; // with this, the "outside" $x is accessible and its value is reassigned; otherwise, not.
$x = "inside";
echo $x . "<br />";
echo " inside convert function, not global.";
echo "<br />";
}

convert();
echo $x;
echo "<br />" . "outside of convert function.";
echo "<br />";

?>
</body>
</html>