<?php

class Car {
	// property declarations
       var $wheels = 4;
       var $hood = 1;
       var $engine = 1;
       var $doors = 4;

    // constructor -- a method that runs up the instantiation of a class
    function __construct() {
		echo $this->engine = 101;
		$this->hood = "No Hood";
		}

    // methods
	
    function MoveWheels() {
        echo "Wheels move round and round.";
    }

    // methods use $this to access properties on same object
    function MoveWheelsThis() {
        $this->wheels = 6;
    }
	
}

// create an object, an instance of the class "Car"

$ford = new Car();
echo "<br/>";
echo $ford->wheels . "<br/>";
echo $ford->MoveWheelsThis();
echo $ford->wheels . "<br/>";

$bmw = new Car();
echo "<br/>";
print_r($bmw);

?>