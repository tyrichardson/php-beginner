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

// inheritance example, class Plane will inherit all properties and methods from class Car
// can overwrite properties during instantiation
class Plane extends Car {
	var $wheels = 9;
}

$jet = new Plane();
echo "The new jet has how many wheels?  " . $jet->wheels . "<br/>";
echo "The jet's  ";
echo $jet->MoveWheels() . "<br/>";
// The parent's $this is still set to parent's definition; must overwrite method for new instance
echo "The new jet has how many wheels?  " . "<br/>";
// This code displays nothing
$jet->MoveWheelsThis() . "<br/>";

// create an object, an instance of the class "Car"
$bmw = new Car();

echo "bmw has " . $bmw->wheels . " wheels"; // don't use $ in variable name when referring to a property on an object
echo "<br/>";
$bmw->wheels = 2; // reassign new value to property on an object
echo "<br/>";
echo "bmw has " . $bmw->wheels . " wheels";

$bmw->MoveWheelsThis(); // reassign new value to property on an object
echo "<br/>";
echo "bmw has " . $bmw->wheels . " wheels";
echo "<br/>";
echo "bmw ";
echo $bmw->MoveWheels();
echo "<br/>";

$truck = new Car();
// reassign value and echo in one statement
echo "truck has " . $truck->wheels = 18 . " eightteen wheels";

?>