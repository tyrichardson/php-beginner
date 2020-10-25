<?php

$file = "example-writing.txt";

if ($handle = fopen($file, 'r')) {
	echo $content = fread($handle, 10);	// will read 10 bytes from the file
	echo "<br/>";
	echo $content = fread($handle, filesize($file)); // will read 100% of the file
	// but the pointer/cursor is still sitting after character 10/index 9
	
	rewind($handle);
	echo "<br/>";
	echo $content = fread($handle, filesize($file)); // will read 100% of the file
	
	fclose($handle);
} else {
	echo "The app cannot write on the file.";
}

?>