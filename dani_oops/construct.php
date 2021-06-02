<?php 

class Person{
	public $first;
	public $middle;
	public $last;

	public function __construct($firstNew , $middleNew , $lastNew){
		$this->first = $firstNew;
		$this->middle = $middleNew;
		$this->last = $lastNew;
	}
}

	$PerosnObj = new Person('Rohan','Pratap','Singh');
	echo $PerosnObj -> first . "<br>";
	echo $PerosnObj -> middle . "<br>";
	echo $PerosnObj -> last  ;
?>