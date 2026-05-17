<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Online Quiz  - Result </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
include("header1.php");
$cn=mysql_connect("localhost","root","") or die("Could not Connect My Sql");
mysql_select_db("OTS",$cn)  or die("Could connect to Database");
extract($_SESSION);
$rs=mysql_query("select r.login,t.test_name,t.total_que,r.score from ots_test t, ots_result r where
t.test_id=r.test_id",$cn) or die(mysql_error());
echo("<p align='right'><font color='blue'size='5' face='Times New Roman'>User: ".$_SESSION['Std'])."</font>";
echo"<a href='signout.php'> <input type='button' class='btn btn-info' id='logout' value='Logout'></a>"."</p>";
echo "<h1 class=head1> Result </h1>";
if(mysql_num_rows($rs)<1)
{
	echo "<br><br><h1 class=head1> You have not given any quiz</h1>";
	exit;
}
echo "<table border=1 align=center><tr class=style2><td width=300>stdnName </td><td width=300>Test Name </td><td> Total<br> Question</td> <td> Score</td>";
while($row=mysql_fetch_row($rs))
{
echo "<tr class=style8><td>$row[0] <td align=center> $row[1] <td align=center> $row[2]<td align=center> $row[3]";
}
echo "</table>";
include("footer.php");
?>
</body>
</html>
