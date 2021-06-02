<!DOCTYPE html>
<html>
<head>
	<title>Printing Chess</title>
</head>
<body>

<table width="450px" cellpadding="1">
	
	<?php 
	for($row = 1; $row <=8; $row++){
		echo "<tr>";
		for($col = 1; $col <= 8; $col++){
			$res = $row + $col;
			if($res % 2 == 0)
			{
			echo "<td height='50px' width='50px' bgcolor='black' > </td>";		
			}
			else{		
			echo "<td height='50px' width='50px' bgcolor='white' > </td>";
			}
	}
		echo "</tr>";
	}
	?>
</table>


</body>
</html>