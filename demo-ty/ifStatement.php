<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

    if (3 > 10) {
        echo "yes, three is less than 10.";
    } elseif (3 < 2) { // elseif in php is a single string, NOT else if
        echo "yes, this second one is true.";
    } else {
        echo "nope.";
    }

?>
    
</body>
</html>