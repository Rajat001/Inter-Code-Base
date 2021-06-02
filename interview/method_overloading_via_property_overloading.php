<?php 

class PropertyOverloading {
public $details = array();
//declaring private property
private $j=20;
// setter operation
public function __set($name, $value) {
echo "<br />". " In the Setting operation. Set '$name = $value'";
$this->details[$name] = $value;
}
// getter operation
public function __get($name) {
echo "<br />". " In the Getting Operation. Get '$nam	e  = '";
return $this->details[$name] . ' <br /> ';
}
// isset operation
public function __isset($name) {
echo "<br />". " In the isset Operation. isset '$name' ?";
return isset($this->details[$name]);
}
// unset operation
public function __unset($name) {
echo "<br />". " In the unset Operation. unset '$name' ";
unset($this->details[$name]);
}
// returning private property value
public function getPrivateProperty() {
return "<br />". " j = ".$this->j;
}
}
// creating object of class PropertyOverloading
// setter and getter methods are called
$obj = new PropertyOverloading();
$obj->x = 10;
echo $obj->x;
//call isset method
var_dump(isset($obj->x));
//call unset method
unset($obj->x);
//check whether object x is unset or not
var_dump(isset($obj->x));
//getting method to access the private property
echo "<br />". $obj-> getPrivateProperty();
//calling directly the private property
// throws error
echo "<br />accessing the private property, throws error";
echo "<br />".$obj->j;

 ?>