<html>
<head>
<style>

{ margin: 0; padding: 0; }

html { 
        background: url('back.jpg') no-repeat center center fixed ; 
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
		
}


</style>
</head>
<?php
$tn=$_POST['s1'];
$st=$_POST['seats'];

mysql_connect("localhost","root","");
mysql_select_db("hp");

$query="select * from train where TRAIN_NO='$tn'";
$result=mysql_query($query);
$row=mysql_fetch_array($result);



if($row['6']>$st&& $st<7 )
{
	echo "your pnr no is: LAU0AM5RAA0000$tn0".$st."".$tn." <br> KEEP IT SAFE FOR FURTHER USE!!!";
	$query4="INSERT INTO aloo(tn,st) VALUES('$tn','$st')";
	mysql_query($query4);
	$st=$row['6']-$st;
	$query1="update train set TICKETS_AVAILABLE='$st' where TRAIN_NO='$tn'";
	mysql_query($query1);
	
	

}
else if($st>6)
{
	echo "You cannot book more than 6 tickets at a time";
}
else
{
	echo "Available seats are less than required";
}	
	
	


?>
</br>
<a href="welcome.php">GO BACK</a>
</html>