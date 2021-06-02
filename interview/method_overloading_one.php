<?php
class MethodOverloading
{
public function __call($name,$param){
echo "--With object reference <br/>";
}
public static function __callStatic($name,$param){
echo "-----With static reference <br/>";
}
}
// creating object of class MethodOverloading
$obj = new MethodOverloading;
echo "Method Overloading <br/>";
// using the object reference
$obj->DemoTest();
// using the static reference
MethodOverloading::DemoTest();
?>