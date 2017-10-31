<?php
$x=$_POST['a'];
$y=$_POST['b'];
$z=$_POST['c'];
$m=$_POST['d'];

mysql_connect("localhost","root","");
mysql_select_db("nita");

$query="INSERT INTO student(name,email,password,phone) VALUES('$x','$y','$z','$m')";
mysql_query($query);
echo "ho gya mamu database update"



?>