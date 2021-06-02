<?php 

$arr_num = array(12,23,45,20,5,6,34,17,9,56,999);

$min = $arr_num[0];

$arr_count = count($arr_num);

for($i = 0 ; $i < $arr_count; $i++){
	if($arr_num[$i] < $min){
		$min = $arr_num[$i];
	}
}
	
	echo "Smallest Number in Array : " .  $min;

 ?>