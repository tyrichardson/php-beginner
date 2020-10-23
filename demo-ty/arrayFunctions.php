<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        $str = "randomCrap";
        $arr = array("toad", "frog", "pollywog", $str);
        $list = [343, 34, 875, 9, 3098, 453];
        echo max($list);
        echo "<br />";
        echo min($list);
        echo "<br />";
        print_r($list);
        echo "<br />";
        sort($list);
        print_r($list);
        echo "<br />";
        // in_array(value, arrayName) return true or false
        $found = in_array($str, $arr); // $str true, $stri false, "frog" true, "test" false...
        if ($found) {
            echo "Found it!";
        } else {
            echo "Nope. Didn't find it.";
        }
    ?>
</body>
</html>