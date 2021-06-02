<?php 

	for($i = 2; $i <= 100; $i++){      // Here We Check Prime No till 10 ...
		$flag = 1;                    // Flag given for Checking the conditions
		for($j = 2; $j < $i; $j++ ){ // Loop start for dividing $i by $j ...
			$rem = $i % $j;         //  if get Zero than it will be not an prime no.
			if($rem == 0){
				$flag = 0;
				break;
			}
		}

		if($flag == 1){
			echo $i . "<br>";
		}
	}

?>