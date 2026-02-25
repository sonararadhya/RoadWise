<?php
include("database.php");

$sql = "SELECT * FROM register ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0)
{
while($row = mysqli_fetch_assoc($result))
{
echo "<tr>
<td>".$row['id']."</td>
<td>".$row['name']."</td>
<td>".$row['email']."</td>
<td>".$row['phone']."</td>
<td>".$row['vehicle']."</td>
<td>".$row['timing']."</td>
</tr>";
}
}
else
{
echo "<tr><td colspan='6'>No Records Found</td></tr>";
}
?>
