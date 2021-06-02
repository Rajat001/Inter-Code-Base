<?php 

class Person{
	public $name;
	public $last;

	public function setName($NewName){  
		// in case for Constructor Will be
		// public function __construct($NewName)

		$nameVar = $this->name = $NewName;
		return $nameVar;
		
	}
}

	$PersonObj = new Person;
	$PersonObj->setName('Rajat Singh Chaudhary');
	echo $PersonObj->name . "<br><br>";

	$PersonObj1 = new Person;
	$PersonObj1->setName("Bholu Singh");
	echo $PersonObj1->name;

 ?>