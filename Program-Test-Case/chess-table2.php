<table width="400px">
	<?php 
	for($row = 1; $row <= 8; $row++){
		echo "<tr>";

			for($col = 1; $col <= 8; $col++){
				$res = $row + $col;
				if($res % 2 == 0){
					echo "<td width='60px' height='50px' bgcolor='black'>";

				}else{
					echo "<td width='60px' height='50px' bgcolor='white'>";
				}
			}

		echo "</tr>";
	}
	 ?>
	

</table>