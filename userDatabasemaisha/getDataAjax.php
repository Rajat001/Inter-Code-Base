<?php
include("config.php");
$name = $_POST['name'];
//$result=mysqli_query($conn , "select * from user WHERE mobile = '$name'");

$res = "SELECT * from `user` WHERE mobile = '$name'";

$result = mysqli_query($conn , $res);
echo "<table border='1' >
<tr>
<td align=center> <b> Customer Id </b></td>
<td align=center><b>Name</b></td>

<td align=center><b>Mobile No.</b></td></td>
<td align=center><b>Status</b></td>
<td align=center><b>Location</b></td>";

while($data = mysqli_fetch_row($result))
{   
    echo "<tr>";
    echo "<td align=center>$data[0]</td>";
    echo "<td align=center>$data[1]</td>";
    echo "<td align=center>$data[2]</td>";
    echo "<td align=center>$data[3]</td>";
    echo "<td align=center>$data[4]</td>";
    echo "</tr>";
}
echo "</table>";
?>