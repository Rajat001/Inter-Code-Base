<?php 


	class Person {
		static $name;


		public static function SetName($newName){
			//echo "Pura Name :- Rajat Singh Choudhary";
			return self::$name = $newName; // self used as same as $this (keywords)   
		}
	}

	//echo Person::$name; // Static Property Called Only without 

	echo Person::SetName("Choudhary Rajat Singh");

?>