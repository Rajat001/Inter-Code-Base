<?php 

$num = 5;
$flag = 0;
for($i = 2; $i < $num / 2; $i++){
	if($num % $i == 0){
		$flag = 1;
		break;
	}
}

if($flag == 0){
	echo "Prime";
}else{
	echo "Not Prime";
}
?>