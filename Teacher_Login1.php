<?php

error_reporting(1);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Adminstrative AreaOnline Quiz </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../quiz.css" rel="stylesheet" type="text/css">
</head>


<?php



	
$cn=mysql_connect("localhost","root","") or die("Could not Connect My Sql");
mysql_select_db("OTS",$cn)  or die("Could connect to Database");

$UserID=$_POST['loginid'];
$Password=$_POST['Pass'];
	$rs=mysql_query("select * from Teacher_Reg where UserID='$UserID' and Password='$Password'",$cn) or die(mysql_error());
	$rs = mysql_fetch_array($rs);

if($rs["UserID"]==$UserID AND $rs["Password"]==$Password)
{
include("header1.php");
echo"<br><p class='head1'>Welcome to Admistrative Area </p>";
echo"<div style='margin:auto;width:90%;height:500px;box-shadow:2px 1px 2px 2px #CCCCCC;text-align:left'>";
echo"<div style='margin-left:20%;padding-top:5%'>";
echo"<p class='style7'><a href='_Teacher_Add_Sub.php'>Add Subject</a></p>";
echo"<p class='style7'><a href='Teacher_Add_Test.php'>Add Test</a></p>";
echo"<p class='style7'><a href='Teacher_Add_Question.php'>Add Question </a></p>";
echo "<p align='center' class='head1'>&nbsp;</p>";
echo"</div></div></body></html>";
}
elseif($UserID=="NULL" AND $Password=="NULL")
{
	
	
	echo"ur not registered";
}else{
	echo"ur not registered";
}
include("footer.php");
?>