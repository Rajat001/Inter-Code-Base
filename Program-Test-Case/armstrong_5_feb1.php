<?php 

$num = 407;
$x = $num;
$total = 0;

while($x != 0){
	$rem = $x % 10;
	$total = $total + $rem * $rem * $rem;
	$x = $x / 10;
	}

	if($total == $num){
		echo "Armstrong";
	}else{
		echo "Not Armstrong";
	}
?>