<?php 

	 class Database{
	 	public function execute($sql){
	 		echo $sql;
	 	}
	 }


	 class DatabaseInsertQuery{
	 	public function insert(){
	 		$db = new Database;
	 		$sql = "Insert Query";
	 		$db -> execute($sql);
	 	}
	 }

$DBInsert = new DatabaseInsertQuery;
$DBInsert -> insert();


?>