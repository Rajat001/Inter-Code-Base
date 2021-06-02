<?php 

$first = 0;
$second = 1;

echo $first . " , " . $second . " , " ;

for($i = 1; $i < 10 ; $i++){

	$result = $first + $second;
	$first = $second;
	$second = $result;

	echo $result . " , " ;
}

?>