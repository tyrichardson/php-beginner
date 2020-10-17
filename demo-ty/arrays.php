<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        /* declaring arrays using a function, old and new
         * $numberList = array();
         * $numberListNew = [];
        */

        $numberList = array(267, 8765, 345, '5345', "345", "<h1>Hello</h1>");
        // display first index in zero-based array
        echo $numberList[0] . " * * * " . $numberList[3] . " * * * " . $numberList[5];

    ?>
    
</body>
</html>