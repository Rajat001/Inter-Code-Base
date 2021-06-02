<?php 

define('server' , 'localhost');
define('user' , 'root');
define('pass' , '');
define('database' , 'user_test');

$conn = mysqli_connect(server,user,pass,database);

if($conn){
	echo "Connected";
}else{
	echo "Not Connected";
}

$conn1 = mysqli_connect('localhost','root','','user_test');

?>