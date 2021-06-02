<?php 

	class Person{
		public $name ;

		public static $drinkAge = 25;

		public function Age($NewDrinkAge){
			self::$drinkAge = $NewDrinkAge; // Instead of use $this , we use self:: function
		}
	}

	$PersonObj = new Person;
	echo $PersonObj :: $drinkAge . "<br>"; // For Calling Static Property Always Use $ keyword ...
	$PersonObj -> Age(48);
	echo $PersonObj :: $drinkAge;

	echo "<br>";

	echo Person::$drinkAge;
?>