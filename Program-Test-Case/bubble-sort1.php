<?php 
// Create program for bubble Sort , it Will arrange no's in Ascending Order ...
function bubble_sort(&$arr){
	$n = sizeof($arr);
	for($i = 0; $i < $n; $i++){
		for($j = 0; $j < $n - $i - 1; $j++){
			if($arr[$j] > $arr[$j+1]){
				$k = $arr[$j];
				$arr[$j] = $arr[$j+1];
				$arr[$j+1] = $k;
			}
		}
	}
}

$arr = array(4,8,1,2,6,8,99,7,0,3);
$arr_len = count($arr);
bubble_sort($arr);

for($i = 0; $i < $arr_len; $i++){
	echo $arr[$i] . " , ";
}

echo "<br><br><br>";

echo 'Second Array From First &nbsp &nbsp &nbsp' . $arr[1];

echo "<br><br><br>";

echo'Second Array From Last &nbsp &nbsp &nbsp' .$arr[$arr_len - 2];

?>