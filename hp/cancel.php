
<?php
$a=$_POST['c'];
$b=$_POST['d'];
$c=$_POST['ticket'];
mysql_connect("localhost","root","");
mysql_select_db("hp");
$query="select * from aloo where st='$a' and tn='$b'";
$result=mysql_query($query);
$count=mysql_num_rows($result);
echo "$count";
if($count=0)
{
	echo "wrong pnr";
}
else
{
	if($c<$a)
	{
		$e=intval($a)-intval($c);
		
		$query2="update aloo set st='$e' where st=$a and tn=$b";
		mysql_query($query2);
		$query4="select * from train where TRAIN_NO='$b'";
		$result=mysql_query($query4);
		$row=mysql_fetch_array($result);
		$f=$row['6']+$c;
		echo "$c tickets cancelled successfully";
		$query3="update train set TICKETS_AVAILABLE='$f' where TRAIN_NO='$b'";
		mysql_query($query3);
	}
	else
	{
		echo "No of seats entered is more than u have...Please try again";
		
	}
}

echo "<a href='welcome.php'>GO BACK</a>";
?>
