<?php 
// Create program for bubble Sort , it Will arrange no's in Ascending Order ...
function bubble_sort(&$arr){
	$n = count($arr);
	for($i = 0; $i < $n ; $i++){
		for($j = 0; $j < $n - $i - 1; $j++){
			if($arr[$j] > $arr[$j+1]){
				$k = $arr[$j];
				$arr[$j] = $arr[$j+1];
				$arr[$j+1] = $k;
			}
		}
	}
}

$arr_num = array(4,88,1,23,25,12,5,8,7,9);
$arr_num_len = count($arr_num);
bubble_sort($arr_num);

	for($k = 0; $k < $arr_num_len; $k++){
		echo $arr_num[$k] . " , ";
	}

	echo "<br><br><br>";
	echo "Second Lagest Array From Start Is : " . $arr_num[1];
	echo "<br><br><br>";
	echo "Second Lagest Array From END Is : " . $arr_num[$arr_num_len-2];
?>