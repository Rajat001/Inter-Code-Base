<?php 

// Lambda function is used to first store data into a variable and then to pass it as 	   arguments for the usage in other methods or functions.

$input = array(2, 5, 10);
$output = array_filter($input, function ($x) 
	{ return $x > 2; }
);

 print_r($output);

?>

<?php 
  
// PHP function to check for even elements in an array 
function Even($array) 
{ 
    // returns if the input integer is even 
    if($array%2==0) 
       return TRUE; 
    else 
       return FALSE;  
} 

  
$array = array(12, 0, 0, 18, 27, 0, 46); 
echo "<br><br><br> <hr> ";

echo "<pre>";
print_r(array_filter($array , 'EVEN')); 
echo "</pre>";
  
?> 





