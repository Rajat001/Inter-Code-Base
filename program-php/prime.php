<?php 

$num = 179;
$f = 0;

for($i = 2; $i <= $num / 2; $i++){

	if($num % $i == 0){ // % means finding Remainder ...
		$f = 1;
		break;
	}	
}

if($f == 0 ){
	echo "Prime No";
}else{
	echo "Not Prime No";
}
?>