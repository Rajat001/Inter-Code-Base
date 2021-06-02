<?php
// $theString = "1.2.34.87";
$theString = "I am Rajat";
$var_arr = array();
$j = strlen($theString);
for ($k = 0; $k < $j; $k++) 
{
    $char = substr($theString, $k, 1);
    $var_arr[$k] =  $char;
}
print_r($var_arr);
?>