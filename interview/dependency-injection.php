<?php 
 // https://www.youtube.com/watch?v=rO9zPqfOBwk
 
//  interface Database{
// 	public function execute($sql);
//    }

// class User implements Database{
// 	public function execute($sql){
//  		echo $sql;
//  	}
// }

 class Database{
	public function execute($sql){
		echo $sql;
	}
  }

 class BuildQuery{

 	private $dbname;
 	public function __construct(Database $db){ // Coupling of Class , there are two way of coupling of class 											// Tight coupling and Loose Coupling of Class
 		$this->dbname = $db;
 	}

 	public function insert(){
 		// $db = new Database;
 		$sql = "Insert Query" . "<br>";
 		$this->dbname -> execute($sql);
 	}

 	public function update(){
 		// $db = new Database;
 		$sql = "Update Query" . "<br>";
 		$this->dbname -> execute($sql);
 	}
 }

 $db = new Database; // Here we are using dependencing Injection , Here we can changed the Class Name Again and again , and this $db code is effected at line 23 ...
 $BQ = new BuildQuery($db);
 $BQ -> insert();
 $BQ -> update();
 ?>