<?php 

// Property Overloading ... 
class PropertyOverload{
	private $data = array(); // Created Array Here ...

	public function __set($name , $value){ // Calling Set Function For Set Name ...
		$this->data[$name] = $value;
	}

	public function __get($name){  // Called For Get Property Values
		return	$this->data[$name];
	}
	public function __isset($name){ // This For Check If Property Is Set Or Not ...
		return isset($this->data[$name]);
	}

	public function __unset($name){ // It will Unset The variable
		 unset($this->data[$name]); 
	}
} 

$obj = new PropertyOverload;
echo $obj->name = "Chaudhary Rajat Singh";

?>

<br>
<hr>


<?php 

// Method Overloading ... 
class MethodOverloading{
	public function __call($name , $value){
		echo "Calling Object Method Here :- " . $name . " <br> Calling Value :- " . 
		implode('',$value );
	}

	public static function __callStatic($name , $value){ // this is an Static Method 
		echo "Calling Static Method Here :- " . $name . " <br> Calling Value :- " . implode('',$value );	
	}	
}

	 $obj = new MethodOverloading;
	 $obj->runTest('Calling Static Object Here'); // Here runTest = $name AND $value = Calling Static Object Here
	 echo "<br>";
	 
	 $obj->runTest('Calling runTest Method Again'); // Here runTest = $name AND $value = Calling Static Object Here
	 echo "<br>";

	 $obj->runSuccessTest('One' , ' Two ' , 'three');
	// MethodTest::runTest('in static context');

	 echo "<br><br><br>";

	 return MethodOverloading::HelloStaticKeyWord('Bullet Royal Enfield');

?>

<br> <hr>

<?php
   class Shape {
      const PI = 3.142 ;
      function __call($name,$arg){
         
            switch(count($arg)){
               case 0 : return 0 ;
               case 1 : return self::PI * $arg[0] ;
               case 2 : return $arg[0] * $arg[1];
               case 3 : return $arg[0] * $arg[1] * $arg[2];
            }
      }
   }
   $circle = new Shape();
   echo $circle->area(3) . "<br>";
   $rect = new Shape();
   echo $rect->area(8,6,4). "<br>";
   echo $circle->sizeoffloor(99);

?>
0