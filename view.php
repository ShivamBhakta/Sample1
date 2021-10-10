<?php
include("connection.php");
$query="select * from student";
$result=mysql_query($query,$conn);
echo"<center>";
echo "<table border='1'>";
echo "<tr>";
echo "<th>ROLLNO</th>";
echo "<th>NAME</th>";
echo "<th>ADDRESS</th>";
echo "<th>MOBILE NO</th>";
echo "<th>EMAIL ID</th>";
echo "<th>UPDATE</th>";
echo "<th>DELETE</th>";
echo "</tr>";

while($row=mysql_fetch_array($result)){
	echo "<tr>";
	echo "<td>$row[0]</td>";
	echo "<td>$row[1]</td>";
	echo "<td>$row[2]</td>";
	echo "<td>$row[3]</td>";
	echo "<td>$row[4]</td>";
	echo "<td><a href='update.php?rno=$row[0]'>EDIT</a></td>";
	echo "<td><a href='delete.php?rno=$row[0]'>DELETE</a></td>";
	echo "</tr>";
}
echo "<tr>
<td colspan='7' align='center'>
<a href='insert.php'>
INSERT NEW STUDENT</a></td></tr>";
echo "</table>";
echo "</center>";
?>
