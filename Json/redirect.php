<?php 

	if(isset($_GET['values'])){
		$PhpObject = json_decode($_GET['values']); // convert JSON String to php Variable and than convert to PHP Object ... 
		echo $PhpObject->lastName;	
	}

 ?>