<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        // can assign html tags, images... as values to variables
        $value = "<h1>Wow</h1>";
        $name = "Ty";
        $int = 100;
        $float = 57.87;

        echo $value;
        echo "<br />";
        echo $name;
        echo " * * * ";
        echo $int;
        echo " * * * ";
        echo $float;

        // concatenation
        echo "<br />";
        echo $name . $float;
    ?>
    
</body>
</html>