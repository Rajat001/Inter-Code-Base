<?php 

$x = 10;
$y = 50;
$res = 0;
if($x > $y){
$res = $x;
$x = $y;
$y = $x;
}

	for($i = 1 ; $i < ($x + 1); $i++){
		if($x % $i == 0 && $y % $i == 0){
			$hcf = $i;
		}
	}
	// echo "LCM is " . $x * $y / $i . "<br> <br>";
	echo "HCF is " . $i;
?>