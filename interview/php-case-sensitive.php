<?php 

$var = "Hello Variable";

echo $var;

//echo $Var; // It Will Not Work bcoz of Case Sensitive And $Var has Capital V ...


echo "<br><br>";
$var1 = NULL;
$var1 = "New Variable Assigned";
echo $var1;
?>


<h2> Now Checking For Functions ONLY ...</h2>


<?php 
# Single Line Comment I m Using right Now ..

/*
This is for Multiple Line Comment Section
*/

function hello(){
	echo "Hello Function is Called For Checking Case In-sensitive";
}


echo Hello(); # It Will Work ... Hello() && hello() are Two Different type of Names but it 					work for Functions Only , But Not In Variables

 ?>