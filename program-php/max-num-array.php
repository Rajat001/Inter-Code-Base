<?php 

$arr_num = array(12,23,45,20,5,6,34,17,9,56,999);
$arr_len = count($arr_num);
$max = $arr_num[0];
for($i = 0; $i < ($arr_len ); $i++){
		if($arr_num[$i] > $max  ){
			$max = $arr_num[$i];
		}
}

	echo "Highest No. In Array : " . $max;

?>