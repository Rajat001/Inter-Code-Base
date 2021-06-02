<?php 

include("config.php");

$re = "SELECT name , location, COUNT(location) FROM user GROUP BY location ORDER BY COUNT(location) DESC";

$re1 = "SELECT name , location, COUNT(location) FROM user GROUP BY location ORDER BY COUNT(location) DESC";

$re4 = "SELECT name , location FROM user WHERE location =  'Chandigarh'";

$re3 = "SELECT name, location,count(*) as nor from user group by location having count(*) =(select    max(nor) from (select location,count(*) as nor from user group by location) user)";

$re2 = "SELECT `name` , `location`, COUNT(`location`) AS `value_occurrence` FROM `user` GROUP BY `location` ORDER BY `value_occurrence` DESC ";

$res5 = "SELECT MAX (mycount) FROM (SELECT name,COUNT(location) mycount FROM user 
GROUP BY agent_code);";

$res = mysqli_query($conn , $re2);
while($resu = mysqli_fetch_assoc($res)){
	echo $resu['name'] . " ---- " . $resu['location']  . " ---- " . $resu['value_occurrence'] . "<br>";
}

 ?>