<?php
$x=$_POST[a];
$y=$_POST[b];

mysql_connect("localhost","root","");

mysql_select_db("nita");
$query="UPDATE student set password='$y' WHERE name='$x'";

mysql_query($query);
echo "password updated"





?>