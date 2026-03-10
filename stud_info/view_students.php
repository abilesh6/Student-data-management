<?php
include "db.php";

$sql="SELECT * FROM users WHERE role='student'";
$result=mysqli_query($conn,$sql);

echo "<h2>Student List</h2>";

echo "<table border=1>";

echo "<tr>
<th>ID</th>
<th>Username</th>
<th>Roll No</th>
<th>Department</th>
<th>Email</th>
</tr>";

while($row=mysqli_fetch_assoc($result))
{

echo "<tr>";

echo "<td>".$row['id']."</td>";
echo "<td>".$row['username']."</td>";
echo "<td>".$row['rollno']."</td>";
echo "<td>".$row['department']."</td>";
echo "<td>".$row['email']."</td>";

echo "</tr>";

}

echo "</table>";
?>