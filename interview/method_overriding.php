<?php 

// Best Example For Method Override Properties , Below is Link
// https://www.educba.com/overriding-in-php/


// class declared as final cannot be overridden
final class BaseClass {
// method - ABC
function ABC() {
echo "<br> In the BaseClass Method ABC function";
}
// Final method - display
function display() {
echo "<br> In the BaseClass Method display function";
}
}
// here you cannot extend the BaseClass
// as the base class is declared as final
$obj1 = new BaseClass;
$obj1->display();
$obj1->ABC();
 ?>


<!-- Another Way For Method OverLoading -->

<?php 

// class Shape{
// 	public function structure(){
// 	echo "Here Calling The Shape";
// }
// }

// class Square extends Shape{
// 	public function structure(){
// 	echo "Here Calling The Square";
// }
// }


// $shapeObj = new Shape;
// echo $shapeObj->structure();
// echo "<br> <br>";
// $SquareObj = new Square;
// echo $SquareObj->structure();

echo "<br> <br>";echo "<br> <br>";echo "<br> <br>";

class Circle {
    function myShape() {
        return "Round";
    }
}
class Square extends Circle {
    function myShape() {
        return "Square";
        }
}

$shape = new Circle;
$square = new Square;
echo($shape->myShape()) . "<hr>"; //"Shape" Class Object Called
echo  $square->myShape(); //"Square" Class Object Called

?>