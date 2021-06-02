<?php 
// https://www.youtube.com/watch?v=kDHv7_Ggp50
session_start();
class Person{
	private $name ;
	private $lastname;
	private $mobile;

	public function SetName($fname){
			$this ->name = $fname;
	}

	public function __sleep(){ // _sleep() method called before serialize() method ...
			return array('name');
	}
}

	$obj = new Person;
	$obj -> SetName('Rajat' );          // Sleep method Called automatically ...
	$objToSerialize = serialize($obj); // Basically Serialize means to convert object 										into string
	var_dump($objToSerialize);

	echo "<br><br>";
	
	echo $_SESSION['sample'] = serialize($objToSerialize); // Store in Session ...

?>