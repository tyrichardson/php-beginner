<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
$counter = 0;
    while($counter < 5){ // PHP: "Okay, Apache. Do this same thing until this statement is false."
        echo "hello" . $counter; // echo puts this on the DOM, displays on page in browser
        $counter++;
    }
?>
    
</body>
</html>