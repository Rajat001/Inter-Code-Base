<?php 

$conn = mysqli_connect('localhost','root','','maisha_customer');
if($conn){
	//echo "Connected";
}else{
	echo "Not Connected";
}
?>