<?php 

class Profile{
	public $name = "Alok";
	private $MiddleName = "kumar";
	protected $lastName = "Gupta";
}

$PersonObj = new Profile;

echo $PersonObj->name . "<br>";
// echo $PersonObj->MiddleName  . "<br>"; // Error
// echo $PersonObj->lastName;   // Error
?>
<hr>
<h1> Dani Program Below </h1>
<?php 
	class Person {
		private $first = "Daniel";
		private $last = "Nielsen";
		protected $age = "28";
	
		public function owner(){
			$a = $this->last;
			return $a ;
		}

		public function PersonAge(){
			$age = $this ->age;
			return $age;
		}

	}

	class Man extends Person{
		public function manOwner(){ //  How to Call Private variable in Extend Class
			$b = $this->last; 
			return $b;	
		}
	} 
	$personObj = new Person;
	echo $personObj -> owner();
	echo "<br><br>";

	$manObj = new Man;
	echo $manObj -> manOwner() . "<br>"; // Error bcz property is Private  Not 													Protected ...
	echo $manObj->PersonAge(); // It Will Output bcz Property is Protected and class is Extend
 ?>

