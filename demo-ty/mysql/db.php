<?php

$connection = mysqli_connect( "localhost", "root", "root", "loginapp" );

    if (!$connection ) {
    	die( "Database connection failed" . mysqli_error );
    } else {
		echo "Connected to mySQL";
	}
?>