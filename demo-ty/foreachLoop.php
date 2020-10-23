<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $numbers = array(345, 354, 786, 1, 4059, 4583, 9);
        // the foreach loop works only with arrays
    foreach ($numbers as $number) {
        echo " " . $number . " ";
        }
    ?>  
</body>
</html>