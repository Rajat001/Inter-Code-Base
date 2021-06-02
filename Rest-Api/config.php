<?php 

$conn = mysqli_connect('localhost','root','','rest-api');
if($conn){
	//echo "Connected";
}else{
	echo "Not Connected";
}
?>