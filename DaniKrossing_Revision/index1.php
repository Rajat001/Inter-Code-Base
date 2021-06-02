<?php 

class NewClass{
	// echo "Rajat Had Created The New Class"; // We Can't Directly run this     	   Function 
	public function NewClassFunction(){
		echo "Rajat Had Created The New Class";
	}
}

$NewClassObj = new NewClass;
return $NewClassObj ->NewClassFunction() ;

?>