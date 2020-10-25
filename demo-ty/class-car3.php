<?php

// instantiate an instance in order to use
class Car {
    // properties
	var $wheels = 4;
	var $hood = 1;
	var $engine = 1;
	var $doors = 4;
	
	// methods
    function MoveWheels() {
		echo "Wheels move round and round.";
    }
	
	// methods use $this to access properties on same object
	function MoveWheelsThis() {
		$this->wheels = 8;
	}
}

// create an object, an instance of the class "Car"
$bmw = new Car();

echo "bmw has " . $bmw->wheels . " wheels"; // don't use $ in variable name when referring to a property on an object
echo "<br/>";
$bmw->MoveWheels();
echo "<br/>";
$bmw->wheels = 2; // reassign new value to property on an object
echo "<br/>";
echo "bmw has " . $bmw->wheels . " wheels";
$bmw->MoveWheelsThis(); // reassign new value to property on an object
echo "<br/>";
echo "bmw has " . $bmw->wheels . " wheels";
echo "<br/>";

$truck = new Car();
echo "truck has " . $truck->wheels = 18 . " eightteen wheels";

?>