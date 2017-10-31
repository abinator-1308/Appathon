<!DOCTYPE html>
<html>
<head>
	<title>WELCOME</title>
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
<body >

	<?php
		session_start();

		if(isset($_SESSION['name']))
		{
			echo "WELCOME   " . $_SESSION['name'];
			echo "<br> <br>";

			mysql_connect("localhost", "root", "");
			mysql_select_db("hp");

			$query="SELECT * FROM train";
			$result=mysql_query($query);

			echo "<h2 align='left'>TRAIN STATUS</h2>";
			echo "<table border='1'>
			<tr>
			<th>TRAIN NO.</th>
			<th>TRAIN NAME</th>
			<th>SOURCE</th>
			<th>DESTINATION</th>
			<th>ARRIVAL TIME</th>
			<th>DEPARTURE TIME</th>
			<th>TICKETS AVAILABLE</th>
			</tr>";
			

			

			while($row=mysql_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>".$row[0]."</td>";
				echo "<td>".$row[1]."</td>";
				echo "<td>".$row[2]."</td>";
				echo "<td>".$row[3]."</td>";
				echo "<td>".$row[4]."</td>";
				echo "<td>".$row[5]."</td>";
				echo "<td>".$row[6]."</td>";
				echo "</tr>";

			}

			echo "</table>";

			echo "<br> <br> <br> <br> ";


			

		}

		else
		{
			header("location:form.php");
		}
	?>

	<hr>
	<h3 align="center">BOOK YOUR TICKETS</h3></br>
<h4>ENTER TRAIN NUMBER<span style="padding-left:90px;"/>NUMBER OF TICKETS(less than 7 at a time)</h4>
	<form method="POST" action="bookticket.php">
	<input type="text" name="s1">
	<span style="padding-left:80px;"/>
	
	<input type="text" name="seats" >
	<br><br>
	<span style="padding-left:40px;"/>
	<input type="submit" name="book">
	<span style="padding-left:20px;"/>
	<input type="reset" name="reset"> 
	</form>
	</br><br><br>
	<hr>
	<h3 align="center">Cancel your ticket</h3>
	
	<form method="POST" action="cancel.php">
	
	<h4>ENTER PNR NO(5 units in each block)
		<span style="padding-left:150px;"/>ENTER NO OF TICKETS
		</h4>
	<input type="text" name="a" size="4">
	<span style="padding-left:5px;"/>
	<input type="text" name="b" size="4">
	<span style="padding-left:5px;"/>
	<input type="text" name="c" size="4" >
	<span style="padding-left:5px;"/>
	<input type="text" name="d" size="4" >
	<span style="padding-left:163px;"/>
	<input type="text" name="ticket">
	<br><br>
	<span style="padding-left:40px;"/>
	<input type="submit" name="cancel">
	<span style="padding-left:20px;"/>
	<input type="reset" name="reset"> 
	
	</form>
	<br><br><br>
	<hr>
	<br>
	
<a href='logout.php'>LOGOUT???</a>
</body>
</html>