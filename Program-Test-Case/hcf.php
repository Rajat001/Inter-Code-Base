<?php 

$x = 55;
$y = 44;
$res = 0;

if($x > $y){
	$res = $x;
	$x = $y;
	$y = $res;
	}

	for($i = 1; $i < ($x+1); $i++){
		if($x % $i == 0 && $y % $i == 0){
			$hcf = $i;
		}
	}
	echo "HCF Will Be :- " .  $hcf . "<br>";

	echo "LCM Will Be :- " . $x * $y / $hcf;

?>