<table width="400px">
<?php 
	for($row = 0; $row < 8; $row++){
		echo "<tr>";
		for($col = 0; $col < 8; $col++){
			$res = $row + $col;
			if($res % 2 == 0){
				echo "<td height='50px' bgcolor = 'black'>";
			}else{
				echo "<td height='50px' bgcolor = 'white'>";
			}
		}
		echo "</tr>";
	}
 ?>
</table>