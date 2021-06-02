<?php 

$name = "I am Rajat";

$name_array = explode(' ' , $name);

echo "<hr>";

// Another Way For Reverse the array
for($i = (count($name_array) - 1) ; $i >= 0 ; $i--){
	echo  $name_array[$i] . " "; // Output Is :- Rajat am I
}
?>

<hr>

<?php 
	$num = -4;
	for($i = -4; $i <= 4 ; $i++){
		echo $i . " "; // OutPut Is :- -4 -3 -2 -1 0 1 2 3 4
	}
?>

<br><br>
<hr>

Explanation ::- for($i = (count($name_array) - 1) ; $i >= 0 ; $i--) // This Means $i = 5-1 ; $i >=0 ; $i-- , that means it will start from 4 than 3 than 2 than 1



