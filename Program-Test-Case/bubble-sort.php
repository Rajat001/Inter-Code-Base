<?php 
// Bubble Sort
function BubbleSort(&$arrBubbleSort){
	$n = sizeof($arrBubbleSort);

	for($i = 0; $i < $n ; $i++){
		for($j = 0; $j < $n - $i - 1 ; $j++){
			if($arrBubbleSort[$j] > $arrBubbleSort[$j + 1 ]){
				$t = $arrBubbleSort[$j];
				$arrBubbleSort[$j] = $arrBubbleSort[$j+1];
				$arrBubbleSort[$j+1] = $t;
			}
		}
	}
}

$arrOne = array(14,25,1,2,45,3,84,6,43);
$len = sizeof($arrOne);
BubbleSort($arrOne);

for($i = 0; $i < $len; $i++){
	echo $arrOne[$i] . ",";
}

echo "<br> <br>";

echo $arrOne[1];
?>