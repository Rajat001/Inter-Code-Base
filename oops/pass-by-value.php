<?php 

function pass_by_value($n) { // Pass By Value
  $n=$n+10;					
}
 
$m=5;
pass_by_value($m);   // Desc :- Means the varaible in the function will nt changed
echo $m;

?>

<hr>

<?php
function pass_by_refrence(&$n) { // Pass By Refrence
  $n=$n+10;
}
 
$m=5;
pass_by_refrence($m); // Desc :- Means the varaible in the function will changed.
echo $m;


echo  "<br><h2> <i> Another Example -> Pass By Reference </i> </h2>";


function adder(&$str2) {  
    $str2 .= 'Call By Reference';  // reference means it will check $str2 variable is Present Or Not After that Reference of variable will be Done ...
}

$str = 'This is ';  
adder($str);  
echo $str;  


?>