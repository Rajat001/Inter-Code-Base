<?php 

class BaseClass {
private function ABC() {
echo "<br/>In the base class Method : ABC";
}
protected function XYZ() {
echo "<br/>In the base class Method : XYZ";
}
}
class DerivedClass extends BaseClass {
// overriding with public for wider accessibility
public function ABC() {
echo "<br/> In the derived class Method : ABC ----";
}
// overriding method
// with more accessibility
public function XYZ() {
echo "<br/>In the derived class Method : XYZ --=--=--";
}
}
//$obj1 = new BaseClass;
//$obj1->ABC();   //throws fatal error
//$obj1->XYZ();          //throws fatal error
$obj2 = new DerivedClass;
$obj2->ABC();
$obj2->XYZ();

 ?>