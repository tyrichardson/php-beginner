<?php

class Car {
    // properties
	
	// methods
    function MoveWheels() {
		echo "Wheels move round and round.";
    }
}

if ( method_exists( "Car", "MoveWheels" ) ) {
    echo "method exists!";
} else {
    echo "Nope. method does not exist.";
}

?>