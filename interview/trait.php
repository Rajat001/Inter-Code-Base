<?php 
trait message1{
	public function msg(){
		echo "OOPs is Fun";
	}
}

class Welcome{
	use message1;
}

$obj = new Welcome;
$obj->msg();

trait name1{ # can we defined class in this Trait ...
	public function nameOne(){
		echo "Rajat";
	}
}

trait name2{
	public function nameTwo(){
		echo "Bholu";
	}
}

class FullName{
	use name1 , name2;
}


$obj = new FullName;
$obj -> nameOne() ;
echo "<br>";
$obj -> nameTwo();
?>