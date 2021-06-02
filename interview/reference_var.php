<?php 

$a = '1';

$b = &$a; // 1 and one more thing Or & is used for Refrence 

$b = "2$b"; // 21
echo $a.", ".$b;

?>