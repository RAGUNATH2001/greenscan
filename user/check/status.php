


<?php
$con=mysqli_connect("localhost","root","","greenscan");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM medicion_order");

echo "<table border='1'>
<tr>
<th>id</th>
<th>name</th>
<th> quantity<th>
<th> total amount<th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['quantity'] . "</td>";
echo "<td>" . $row['total_prize'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>