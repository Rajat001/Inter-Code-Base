<!-- To find the second biggest and second smallest of the given numbers -->
<html>
<head>
<title>PHP Program To find the second biggest and second smallest of the given numbers</title>
</head>
<body>
<?php
//Initialize array elements
$a = array(56,89,62,84,14,23 );
$n = count($a);
error_reporting(0);
for ($i=0;$i<=$n;$i++)
{
for ($j=0;$j<=$n;$j++)
{
if ( $a[$i] <= $a[$j] )
{
$temp = $a[$i] ;
$a[$i] = $a[$j] ;
$a[$j] = $temp ;
}
}
}
echo("The Array Elements are: ") ."</br>";
foreach( $a as $b )
{
echo $b ."  ";
}
echo("<br> Second Smallest Number is : ".$a[2]) ."<br>";
echo("Second Largest Number is : ".$a[$n-1]) ;
return 0;
?>
</body>
</html>