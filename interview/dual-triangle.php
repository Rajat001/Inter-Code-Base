<?php
for($i=1;$i<=6;$i++){

for($k=6;$k>=$i;$k--){ // code for space ...
echo " &nbsp;";
}

for($j=1;$j<=$i;$j++){ // Code for Printing * 
echo "* &nbsp;";
}
echo "<br>";

}


for($i=5;$i>=1;$i--){
for($k=6;$k>=$i;$k--){
echo " &nbsp;";
}
for($j=1;$j<=$i;$j++){
echo "* &nbsp;";
}
echo "<br>";
}
?>