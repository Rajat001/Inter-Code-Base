<?php 

$name = "JAVATPOINT";
$lname = strlen($name);

for($i = ($lname - 1) ; $i >= 0 ; $i--){
	echo $name[$i];
}

?>
<hr>
<h1> Reverse A Sentence </h1>
<?php 

$name = "I am Rajat";

$name_array = explode(' ' , $name); // String to Array Convert Using Explode ...

echo "<hr>";

// Another Way For Reverse the array
for($i = (count($name_array) - 1) ; $i >= 0 ; $i--){
	echo  $name_array[$i] . " "; // Output Is :- Rajat am I
}
?>