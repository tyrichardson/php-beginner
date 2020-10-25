<?php

class Car {
	// property declarations
       static $wheels = "4 wheels";
       public $hood = "1 hood";

    // methods use $this to access properties on same object
    function MoveWheelsThis() {
        $this->wheels = "6 wheels";
    }
	
	function MoveWheelsThisColons() {
		Car::$wheels = "6 wheels";
	}
	
}

$bmw = new Car();
echo $bmw->hood;
echo "<br/>";
echo $bmw->wheels; // doesn't work because wheels is static
echo $bmw->MoveWheelsThis(); // this doesn't get around the static issue
echo $bmw::$wheels; // double colons works
echo "<br/>";
Car::MoveWheelsThisColons(); // works
echo Car::$wheels; // value assigned to $wheels updated to "6 wheels"

echo "<br/>";
	
class Truck extends Car {};
$fordF10 = new Truck();
echo $fordF10->hood;
echo $fordF10->wheels; // doesn't work because wheels is static
echo $fordF10->MoveWheelsThis(); // this doesn't get around the static issue
echo $fordF10::$wheels; // double colons works
?>