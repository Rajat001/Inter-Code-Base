<?php 
//https://www.w3resource.com/sql/joins/perform-a-left-join.php
include('conn.php');

// Conclusion Both Query Will Work ...

//  Using Left JOIN 
$s1 = "SELECT `employee`.`id` ,`employee`.`name` , `income`.`emp_id` , `income`.`salary` 
As `emp_salary` FROM employee LEFT JOIN income ON `employee`.`id` = `income`.`emp_id` ";


//  Using Right JOIN 
$s = "SELECT `employee`.`id` ,`employee`.`name` , `income_sal`.`emp_id` , `income_sal`.`salary`
 As `emp_salary` FROM employee RIGHT JOIN income_sal ON `employee`.`id` = `income_sal`.`emp_id` ";

$testS = "SELECT `employee`.`id` , `employee`.`name` AS `emp_name` , `income_sal`.`emp_id` As `emp_id` , 
				 `income_sal`.`emp_id` , `income_sal`.`emp_id` , `income_sal`.`salary` AS `emp_salary`
				   FROM `employee` LEFT JOIN `income_sal` ON `employee`.`id` = `income_sal`.`emp_id`";

$testS1 = "SELECT `employee`.`id` , `employee`.`name` AS `emp_name` , `income_sal`.`emp_id`
					 AS `emp_id`, `income_sal`.`salary` , `income_sal`.`emp_id` , 
					 `income_sal`.`salary` AS `emp_salary` , FROM `employee` 
					LEFT JOIN `income_sal` ON  `employee`.`id` = `income_sal`.`emp_id`" ;

$testS2 = "SELECT `employee`.`id` , `employee`.`name` AS `emp_name` , `income_sal`.`emp_id` 	   AS `emp_id` , `income_sal`.`salary` AS `emp_salary` FROM `employee` LEFT JOIN `		   income_sal` ON `employee`.`id` = `income_sal`.`emp_id` ";

$se = mysqli_query($conn , $testS2);      // (first Database Connection , Sql Query)

while($sel = mysqli_fetch_array($se)){

	echo $sel['emp_name'] . " - (" . $sel['emp_id'] . ") - " . $sel['emp_salary'] ."<br>";

}

?>