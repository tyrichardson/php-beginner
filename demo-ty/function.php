<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $num1 = 10;
        $num2 = 20;

        function saySomething() {
            echo "Hello, World. I am Function Man. I just calculated for you.";
        }

        function calculate($x, $y) {
            echo $x * $y;
            echo "<br />";
            saySomething();
        }

        calculate($num1, $num2);
    ?>
</body>
</html>