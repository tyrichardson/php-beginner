<?php

$file = "example-writing.txt";

if ($handle = fopen($file, 'w')) {
	fwrite($handle, "I love Hello, World!");	
	fclose($handle);
} else {
	echo "The app cannot write on the file.";
}

?>