<?php 

function bubbleSort(&$arr){
	$array_size = sizeof($arr);
	for($i = 0; $i < $array_size; $i++){
		for($j = 0; $j < $array_size - $i - 1 ; $j++){
			if($arr[$j] > $arr[$j+1]){
				$k = $arr[$j];
				$arr[$j] = $arr[$j+1];
				$arr[$j+1] = $k;
			}
		}
	}
}

$arr = array(4,5,1,22,0,56,8,78);
$len = sizeof($arr);
bubbleSort($arr);

for($i = 0; $i < $len ; $i++){
	echo $arr[$i] . ", ";
}

?>