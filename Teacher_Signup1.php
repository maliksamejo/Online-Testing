<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>User Signup</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
error_reporting(1);
include("header1.php");
extract($_POST);
//include("database.php");
$cn=mysql_connect("localhost","root","") or die("Could not Connect My Sql");
mysql_select_db("OTS",$cn)  or die("Could connect to Database");
$rs=mysql_query("select * from teacher_reg where login='$lid'");
if (mysql_num_rows($rs)>0)
{
	echo "<br><br><br><div class=head1>Login Id Already Exists</div>";
	exit;
}
$query="insert into teacher_reg(Name,Subject,UserID,Password,Address,phone,email) values('$name','$Subject','$lid','$pass','$Address','$phone','$email')";
$rs=mysql_query($query)or die("Could Not Perform the Query");
echo "<br><br><br><div class=head1>Your Login ID  $lid Created Sucessfully</div>";
echo "<br><div class=head1>Please Login using your Login ID and Password  to take Test..</div>";
echo "<br><div class=head1><a href='Teacher_Login.php'>Login</a></div>";


?>
<?php
include('footer.php');
?>


