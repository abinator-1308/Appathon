<?php
$x=$_POST['a'];
$y=$_POST['b'];
$z=$_POST['c'];


if(empty($x) || empty($y) || empty($z)) 
{
	echo "enter all fields";
}
else
{	mysql_connect("localhost","root","");
	mysql_select_db("UP");
	$query1="SELECT * FROM NETCAMP WHERE name='$x' AND password='$y'";
	$result1=mysql_query($query1);
	$count=mysql_num_rows($result1);
	if($count==0)
	{
		echo "wrong username or password";
	}
	else
	{
		mysql_select_db("UP");
		$query="UPDATE NETCAMP set email='$z' WHERE name='$x' AND password='$y'";

		mysql_query($query);
		echo "email updated";
	}
	
}





?>