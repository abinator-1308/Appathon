<?php
session_start();
$x=$_POST['e'];
$y=$_POST['f'];

mysql_connect("localhost","root","");
mysql_select_db("hp");
if($x==""||$y=="")
{
	echo "enter all fields";
}else
{
	$query1="SELECT * FROM student WHERE name='$x' AND password='$y'";
	$result1=mysql_query($query1);
	$count=mysql_num_rows($result1);
	if($count==0)
	{
		echo "Wrong password or username";
		
	}
	else
	{	$_SESSION['name']=$x;
		header("location:welcome.php");
		
	}
	
}



















?>