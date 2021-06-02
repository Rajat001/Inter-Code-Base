<?php 

$i = 016; // means 0*8(2) + 1*8(1) + 6*8(0) = 14 
          // 0*8(2) means 8 ki Power 2 hai ... 
echo $i / 2;
// 

echo "<br>";

$a = '1';
$b = &$a;
$b = "2$b";
echo $a.", ".$b;


 ?>