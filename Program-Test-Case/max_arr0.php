<?php 

$arr = array(1,55,4,88,54,25,43,7);
$arr_one = $arr[0];

for($i = 0; $i < sizeof($arr); $i++){
	if($arr[$i] > $arr_one ){
		$arr_one = $arr[$i];
		}
}
echo $arr_one;
?>