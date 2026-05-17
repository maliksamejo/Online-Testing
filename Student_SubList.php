<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Wel come to Online Exam</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link href="quiz.css" rel="stylesheet" type="text/css">


<style>
body {
    color: blue;
}
</style>
</head>

<body>


<?php

include("header1.php");

$cn=mysql_connect("localhost","root","") or die("Could not Connect My Sql");
mysql_select_db("OTS",$cn)  or die("Could connect to Database");

echo("<p align='right'><font color='blue'size='5' face='Times New Roman'>User: ".$_SESSION['Std']."</font>");
echo"<a href='signout.php'> <input type='button' class='btn btn-info' id='logout' value='Logout'></a>"."</p>";
echo "<h2 class=head1> Select Subject to Give Quiz </h2>";
$rs=mysql_query("select * from OTS_subject");
echo "<table align=center>";
while($row=mysql_fetch_row($rs))
{
	echo "<tr><td align=center ><a href=Student_ShowTest.php?subid=$row[0]><font size=4>$row[1]</font></a>";
}
echo "</table>";

include("footer.php");


?>
