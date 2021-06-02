<?php 
$x = 100; // $x is Always Smaller Than $y ...
$y = 50;

if($x > $y){
$temp = $x;
$x = $y;
$y = $temp;
} 
	for($i = 1; $i < ($x + 1) ; $i++){
	if($x % $i == 0 && $y % $i == 0){
	$hcf = $i;
	}
	}

echo "Hence HCF Is " . $hcf;
?>