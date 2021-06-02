<?php 
	//https://www.youtube.com/watch?v=0r-k-MZZWFo&list=PL0b6OzIxLPbwoi6Urr4LZTz2AMMCtzqDt&index=17
	
	function __autoload($class){
		require "autoload_folder_name/" . $class . ".php";
	}

	$callFirstClassFile = new first(); // class name and file name have to be same ...
	echo "<br>";
	$callSecondClassFile = new second(); // class name and file name have to be same ...

 ?>