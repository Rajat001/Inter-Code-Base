<?php 

// Link is :- https://www.youtube.com/watch?v=fiMo0zNdrt4&t=2859s
//  Describe Here Setter And Getter Method Here ...
class Person {
	private $firstName;
	private $lastName = "Singh";

	public function __set($dummyName , $value){ // this is Setter Method
		return $this->$dummyName = $value;
	}

	public function __get($dummyName){ // this is Getter Method
		return $this->$dummyName;
	}
}

class Employee extends Person{  // Using Setter And Getter Method We Can Access the 												Private Properties
	public function EmployeeName($firstName){
		return $this->firstName = $firstName;
	}
}

$EmployeeName = new Employee;
echo $EmployeeName -> EmployeeName("Rajat"); // Setting Name Using Setter Function 
echo "\n &nbsp";
$PersonName = new Person;
echo $PersonName->lastName = "Choudhary"; // Getting Name Using Getter Function 

 ?>