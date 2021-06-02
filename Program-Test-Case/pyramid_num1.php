<?php 

for($i =1 ; $i < 10 ; $i++){
	for($j = 1; $j < $i ; $j++){
		echo $j;
		 for($k =10 ; $k >= $j; $k--){
		//for($k =1 ; $k < $j; $k++){
			echo "&nbsp";
		}
	}
	echo "<br>";
}

?>							