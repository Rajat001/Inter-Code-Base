<?php 

$a = "JOHN";
$b = "SMITH";

$aa = str_split($a);
$bb = str_split($b);
static $j = 0;
for($i = 0; $i <= 9; $i++){
	if($i % 2 !== 0 && $i > 0){
		array_splice($aa, $i , 0 , $bb[$j] );
		$j++;
	}
}

echo "Exchange ". implode('' , $aa);
?>