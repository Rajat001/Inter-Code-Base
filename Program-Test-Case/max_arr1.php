<?php 

$arr = array(45,12,46,84,4,5,24,9);

$arr_size = sizeof($arr);
$min = $arr[0];
for($i = 0; $i < $arr_size; $i++){
	if( $arr[$i] < $min){
		$min = $arr[$i];
	}
}

echo $min;

?>