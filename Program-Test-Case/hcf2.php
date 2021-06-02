<?php 

$x = 10;
$y = 50;
$z = 0;
$flag = 0;
if($x > $y) {
	$z = $x ;
	$x = $y;
	$y = $z;
}

	for($i = 1; $i < ($x + 1); $i ++){
		if($x % $i == 0 && $y % $i == 0){
			$hcf = $i;
		}

		// if($flag == 0){
		// 	echo "Hcf is :- " . $i;
		// }
	}

		echo $hcf;
 ?>