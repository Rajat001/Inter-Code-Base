<?php 

$a = 0;
$b = 1;
echo $a . " , " . $b . " , " ;

for($i = 1; $i < 10 ; $i++){
	$result = $a + $b;
	$a = $b;
	$b = $result;
	echo $result . " , ";
}

?>