<?php 
  include('conn.php');
?>

<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>HTML Table</h2>

<table>
  <tr>

    <th>id</th>
    <th>title</th>
    <th> </th>
    <th>first_name</th>
    <th>last_name</th>
    <th>movie_id</th>
    
  </tr>
  
  <tr>
    <td> </td>
    <td> </td>
    <td> </td>
    <td> </td>
    <td> </td>
    <td> </td>
  </tr>
  
</table>


<?php 

// Below For CROSS JOIN

    // $sel = "SELECT * FROM movies CROSS JOIN `members`";
    // //$sel = "SELECT * FROM members CROSS JOIN `members`";
    // $sele = mysqli_query($conn , $sel);
    // while($selec = mysqli_fetch_assoc($sele)){
    // 		echo  $selec['title'] . " <b> " . $selec['first_name'] . " </b> " . " <b> " . $selec['last_name'] . " </b> " . "<br>" ;
    // }

// Below For INNER JOIN

      $sel = "SELECT `members`.`first_name` AS `firstName` , `movies`.`title` AS `movieTitle` FROM movies INNER JOIN members ON `movies`.`id` = `members`.`movie_idddddname` ";

        $sele1 = mysqli_query($conn , $sel);
        while($selec1 = mysqli_fetch_assoc($sele1)){
        echo  $selec1['firstName'] . " " . $selec1['movieTitle'] . "<br>";
        }


?>


</body>
</html> 
