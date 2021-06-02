<?php 

for($i = 2; $i < 100; $i++){
	$flag = 0;
	for($j = 2; $j < $i ; $j++){
		if($i % $j == 0){
			$flag = 1;
		}
	}

	if($flag == 0){
		echo $i . "<br>";
	}
}
 ?>