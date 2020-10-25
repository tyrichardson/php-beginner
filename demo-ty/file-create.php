<?php

$file = "example.txt";

$handle = fopen($file, 'w'); // w == write

fclose($handle);

?>