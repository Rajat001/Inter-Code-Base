<?php 

$arr = array(1,84,4,55,45,22,95);

$arr_len = count($arr);
$min = $arr[0];

for($i =0; $i < $arr_len; $i++){
	if($min > $arr[$i]){
		$min = $arr[$i];
	}
}

echo $min;
?>