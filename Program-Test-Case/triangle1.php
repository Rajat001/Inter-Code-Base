<?php 

for($i = 1 ; $i < 10 ; $i++){
	
	for($j = 10 ; $j >= $i ; $j--){
		echo "&nbsp";
	}

	for($k = 1; $k <= $i ; $k++){
		echo "*";
	}
	echo "<br>";

}

?>