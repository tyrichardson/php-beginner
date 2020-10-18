<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$number = 10; // variable
echo $number . "<br />";

define("NAME", 1509); // constant
echo NAME;
echo "<br />";

const HELLO = "Hello, World!";
echo HELLO;
echo "<br />";

const GOODBYE = HELLO.'; Goodbye, World!';
echo GOODBYE;
echo "<br />";

const NUM_ARRAY = array(1, 2, 3);
echo NUM_ARRAY[1];
echo "<br />";

define("ANIMALS", array(
    "dog",
    "cat",
    "pig"
));
echo ANIMALS[1];

?>
</body>
</html>