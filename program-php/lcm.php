<?php 
$x = 25;
$y = 20;

if($x > $y){
	$temp = $x;
	$x = $y;
	$y = $temp;
}
	for($i = 1; $i < ($x + 1); $i++){
		if($x % $i == 0 && $y % $i == 0){
			$lcm = $i;
		}
	}

	$lcmResult = $x * $y / $lcm;

	echo "LCM OF 25 And 25 Is :- " . $lcmResult;

 ?>