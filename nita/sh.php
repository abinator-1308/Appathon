<?php
$x=$_POST['a'];

mysql_connect("localhost","root","");

mysql_select_db("nita");
$query="SELECT = FROM student WHERE name='$x' ";
$result= mysql_query($query);

echo "<table border='2'>";
while($row = mysql_fetch_array($result)){
	echo "<tr>";
	echo "<td>".$row[0]."</td>";
	echo "<td>".$row[1]."</td>";
	echo "<td>".$row[2]."</td>";
	echo "<td>".$row[3]."</td>";
	echo"</tr>";
	
}
echo "</table>";





?>