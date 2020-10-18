<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    function addNumbers($num1, $num2){
        $sum = $num1 + $num2;
        return $sum;
    }

    $result = addNumbers(34, 64);
    $result = addNumbers(100, $result);

    echo $result;

?>
</body>
</html>