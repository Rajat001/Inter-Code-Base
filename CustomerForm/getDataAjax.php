<?php
include("config.php");

$result=mysqli_query($conn , "select * from customer");

echo "<table border='1' >
<tr>
<td align=center> <b> Customer Id </b></td>
<td align=center><b>Name</b></td>
<td align=center><b>Photo</b></td>
<td align=center><b>Mobile No.</b></td></td>
<td align=center><b>Email Id</b></td>";

while($data = mysqli_fetch_row($result))
{   
    echo "<tr>";
    echo "<td align=center>$data[0]</td>";
    echo "<td align=center>$data[1]</td>";
    echo "<td align=center> <img height='80px' width='100px' src='customer_file/$data[2]'></td>";
    echo "<td align=center>$data[3]</td>";
    echo "<td align=center>$data[4]</td>";
    echo "</tr>";
}
echo "</table>";
?>