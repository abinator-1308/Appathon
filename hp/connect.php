<?php
$x=$_POST['a'];
$y=$_POST['b'];
$z=$_POST['c'];
$m=$_POST['d'];

mysql_connect("localhost","root","");
mysql_select_db("hp");
if($x==""||$y==""||$z==""||$m=="")
{
	echo "enter all fields";
}
else
{
	$query1="SELECT * FROM student WHERE name='$x'";
	$result1=mysql_query($query1);
	$count=mysql_num_rows($result1);
	if($count==0)
	{
		$query="INSERT INTO student(name,email,password,phone) VALUES('$x','$y','$z','$m')";
		mysql_query($query);
		echo '<a href="form.php">login</a>';
		
	}
	else
	{
		echo "Username exist";
	}
	
}
?>