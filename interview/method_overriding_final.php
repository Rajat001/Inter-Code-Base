<?php 

class BaseClass {
// Final method – display
// this cannot be overridden in base class
final function display() {
echo "<br /> In the Base class display function";
}
/// method - ABC
function ABC() {
echo "<br /> In the Base cLass ABC function";
}
}
class DerivedClass extends BaseClass {
function ABC() {
echo "<br /> In the Derived class ABC function";
}
}
$obj1 = new DerivedClass;
$obj1->display();
$obj1->ABC();

 ?>