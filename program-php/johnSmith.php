<?php

$str= "JOHN";
$str2 = "SMITH";

$a = str_split($str);  // str_split means :- Array ( [0] => J [1] => O [2] => H [3] => N)
$a2 = str_split($str2);
 
static $j = 0;
  for($i = 0; $i<= 9; $i++){
   if($i%2 !== 0 && $i >0) {
    array_splice($a,$i,0,$a2[$j]);
   $j++;
    }
  }
                               
 echo $str_new = implode('',$a); // Implode means Array to String ...
 echo '<br/>';

?>