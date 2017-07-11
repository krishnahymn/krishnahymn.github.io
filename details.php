<?php
mysql_connect("localhost","root","");
mysql_select_db("capacity");
error_reporting(0);

if(($_SERVER["REQUEST_METHOD"]=="POST")||($_SERVER["REQUEST_METHOD"]=="post"))
	
{
	header("Location:details.php");
	
}



?>
<html>
<head><title>Why so Serious??</title>
<link rel="stylesheet" type="text/css" href="skiller.css">
</head>
<body background="4.jpg">
<h2>Why So Serious.com</h2>
<a href="home.html">BACK</a>

<div style="float:left" align="center">
<fieldset align="center">
<legend style="font-family:Courier New;font-size:20px;
	color:white;">SACHIN SOMAN</legend>
<table>
<tr>
<td>
<div align="center">
<figure>
<figcaption>Sachin Soman</figcaption>
<img src="cat.jpg" height="250px" width="200px"/>
</div>
</td>
<td>
<div align="center">
</td>
<td>
<b style="font-size:40px;color:white;">DETAILS</b></br>
<b style="font-size:30px;color:white;">NAME:SACHIN SOMAN</b></br>
<b style="font-size:30px;color:white;">EDUCATION:MCA</b></br>
<b style="font-size:30px;color:white;">LOCATION:AYYAPA TEMPLE , OIL MIL ROAD</b></br>

</td>
</tr>
<tr>
<form action="sachin.php" method="post">
<input type="submit" value="HIRE"/>
</form>
</tr>
</table>
</fieldset>
</div>
</body>
</html>