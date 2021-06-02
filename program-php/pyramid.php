<?php 

echo "<b> <h2> Print Pyramid From UpWard </h2> </b> ";
$a = "*";
for($i = 1; $i <= 5; $i++){

	for($j = 1 ; $j <= $i ; $j++){
		echo $a ;
	}
	echo "<br>";
}
?>

<hr>

	<?php 

	echo "<b> <h2> Print Pyramid From DownWard </h2> </b> ";
	$b = "*";

	for($i = 1; $i <= 5 ; $i++){
	for ($j = 5 ; $j >= $i; $j--){
	echo $b;
	}
	echo "<br>";
	}

	?>