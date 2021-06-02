<!-- <?php 

// class OneClass{	
// 	public function OneClassFunction(){
// 	echo "Created The New Class";	
// 	}
// }

// $obj = new OneClass;
// return $obj->OneClassFunction;
 ?>
 -->

<?php 
// Tutorials For OOPS Concept :-  https://www.youtube.com/watch?v=Anz0ArcQ5kI&list=PL0eyrZgxdwhypQiZnYXM7z7-OTkcMgGPh
class OneClass{
	public $name = "Rajat Singh";

	public function OneClassObjFunc(){
		return "This is OneClass Function Here";
	}
}

$oneClassObj = new OneClass;
echo $oneClassObj->name;

echo "<br> <br>";

echo $oneClassObj->OneClassObjFunc(); // Use the simple Brackets Only 												with function name ...

?>


