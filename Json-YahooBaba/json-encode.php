<?php

// Explaination For json_encode => It will convert PHP Object to JSON Object...

$myObj->name = "John";
$myObj->age = 30;
$myObj->city = "New York";

$myJSON = json_encode($myObj);

echo $myJSON;
?>