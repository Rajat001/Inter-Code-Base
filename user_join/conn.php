<?php 

define('server' , 'localhost');
define('user' , 'root');
define('pass' , '');
define('database' , 'sql_join_tuts_test');

$conn = mysqli_connect(server,user,pass,database);

if($conn){
	echo "Connected Database";
}else{
	echo "Not Connected";
}

?>