<?php

class Employee extends Person{
	public $jobTitle;

	public function __construct($jobTitle , $firstName, $lastName){ // $firstName, $lastName 																    // Called From Person Class
		$this->jobTitle = $jobTitle;

		parent::__construct($firstName, $lastName); // Call Constructor From Person Class
	}

	public function getJobTitleName(){
		return $this->jobTitle;
	}
}

class Person{
	public $firstName;
	public $lastName;

	public function __construct($firstName , $lastName){
		$this ->firstName = $firstName;
		$this ->lastName = $lastName;
	}

	public function sayHello(){
		return "My First Name Is " . $firstName . "And Last Name Is " . $lastName; 
	}
}

$PersonObj = new Person('Bholu','Singh');
echo $PersonObj ->firstName. "<br>";

$EmployeeObj = new Employee('SoftWare Developer','Bholu','Singh');
echo $EmployeeObj -> getJobTitleName(). "<br>";
echo $EmployeeObj ->firstName . "<br>";
echo $EmployeeObj ->lastName . "<br>";
echo $EmployeeObj ->sayHello . "<br>";	
?>