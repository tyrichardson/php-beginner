<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        $namesArray = array("Ty", "Richardson");
        print_r($namesArray);
        // associative arrays have labels for keys instead of indexes, order is not important
        echo "<br />";
        $names = array("first_name" => 'Ty', 'last_name' => "Richardson");
        print_r($names);
        echo "<br />";
        echo $names['first_name'] . ' ' . $names['last_name'];
    ?>

</body>
</html>