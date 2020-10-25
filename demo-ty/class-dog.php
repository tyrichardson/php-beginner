<?php

class Dog {
	public $species = "C. lupus";
	public $breed;
	public $color;
	public $name;

	function ShowAll() {
		echo $this->species . "<br/>" . $this->breed . "<br/>" . $this->color . "<br/>" . $this->name;
	}
}

$pitbull = new Dog();

print_r($pitbull);
echo "<br/>";
echo $pitbull->breed = "Pitbull";
print_r($pitbull);
echo "<br/>";
$pitbull->color = "White and Brown";
$pitbull->name = "Mr. Edwin";
print_r($pitbull);
echo "<br/>";

$pitbull->ShowAll();

?>