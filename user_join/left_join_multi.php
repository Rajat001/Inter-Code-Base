
<?php 
//https://www.w3resource.com/sql/joins/perform-a-left-join.php
include('conn.php');

// Conclusion Both Query Will Work ...

//  Using Left JOIN 

$s = "SELECT `employee`.`name` AS Emp_name, `income_sal`.`salary` , `role`.`name` As `Role_name`
	  FROM `employee` LEFT JOIN `role` ON `employee`.`id` = `role`.`emp_id` 	
	  INNER JOIN `income_sal` ON `role`.`income_id` = `income_sal`.`id` 
	  LEFT JOIN `employee` ON `income_sal`.`emp_id` = `employee`.`id`
	  ";

// Below is Join is Working On Three Table Independently

// Structure :- employee   => id , name
// 			 :- income_sal => id , emp_id , salary
// 			 :- role       =>  id , emp_id , income_id , name

	$s1 = "SELECT `employee`.`name` as `employee_name` , `income_sal`.`salary` , `role`.`name` AS Rolename FROM `employee` LEFT JOIN `role` INNER JOIN `income_sal` ON `role`.`income_id` = `income_sal`.`id`
		ON `employee`.`id` = `role`.`emp_id` 
	";

// Below Join On Two Tables Only ...
	$s2 = "SELECT `employee`.`name` , `income_sal`.`salary` FROM `employee`
	   	   LEFT JOIN `income_sal` ON `employee`.`id` = `income_sal`.`emp_id`  ";


$se = mysqli_query($conn , $s2); // (first Database Connection , Sql Query)

while($sel = mysqli_fetch_array($se)){

	// echo $sel['salary'] . " - (" . $sel['emp_id'] . ") - " . $sel['emp_salary'] ."<br>";
	// echo "(" . $sel['Emp_name'] . "- )" . "- (" . $sel['Role_name'] . "- ) ( " . $sel['salary'] . " ) ". "<br>";
 	//echo $sel['employee_name'] . " ". $sel['salary'] ."<br>";


 	echo $sel['name'] . " ". $sel['salary'] ."<br>";
}

?>