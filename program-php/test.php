<?php 

$var = "Test Case";
$var = 10;

echo $var;
echo "<br> <br> <br> <br>";

?>

<?php

for($i=0; $i<=5; $i++){
for($j = 5 - $i ; $j >= 1; $j --){

echo "* &nbsp;";

}

echo "<br>";

}


echo "<br> <br>";

for($i=0;$i<=5;$i++){
for($j=1;$j<=$i;$j++){
echo "*&nbsp;";
}
echo "<br>";
}

?>