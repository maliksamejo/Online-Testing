
<?php



include("header1.php");



error_reporting(1);
session_start();

mysql_connect('localhost','root','') or die("not connect....");
mysql_select_db('OTS') or die("not found db...");
echo(" <p align='right'><font color='blue'size='5' face='Times New Roman'> User: ".$_SESSION['Teach']);
echo"</font><a href='signout.php'> <input type='button'class='btn btn-info' id='logout' value='Logout'></a>"."</p>";
extract($_POST);

echo "<BR> <center><h3 class=head1>Subject Add </h3></center>";

echo "<table width=100%>";
echo "<tr><td align=center></table>";
if($submit=='submit' || strlen($subname)>0 )
{
$rs=mysql_query("select * from OTS_Subject where sub_name='$subname'");
if (mysql_num_rows($rs)>0)
{
	echo "<br><br><br><div class=head1>Subject is Already Exists</div>";
	exit;
}
mysql_query("insert into OTS_Subject(sub_name) values ('$subname')") or die(mysql_error());
echo"<p align=center>Subject  <b> \"$subname \"</b> Added Successfully.</p>";
$submit="";

}
?>

<SCRIPT LANGUAGE="JavaScript">
function check() {
mt=document.form1.subname.value;
if (mt.length<1) {
alert("Please Enter Subject Name");
document.form1.subname.focus();
return false;
}
return true;
}
</script>
<!DOCTYPE html>
<!--[if lt IE 7]><html class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--><html><!--<![endif]-->
<head>
<title>350Media | Contact</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/foundation.min.css">
<link rel="stylesheet" href="css/superfish.css">
<link rel="stylesheet" href="css/stylesheet.css">
<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700' rel='stylesheet' type='text/css'>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">


<!--[if lt IE 9]>

<link rel="stylesheet" href="css/ie-fixes.css">
<![endif]-->
<script src="js/custom.modernizr.js"></script>
<script>
Modernizr.load({
    // test if browser understands media queries
    test: Modernizr.mq('only all'),
    // if not load ie8-grid
    nope: 'css/ie8-grid-foundation-4.css'
});
</script>
</head>

<div style="margin:auto;width:90%;height:500px;box-shadow:2px 1px 2px 2px #CCCCCC;text-align:left">
<title>Add Subject</title>
<form name="form1" method="post" onSubmit="return check();">
  <table width="41%"  border="0" align="center">
    <tr>
      <td width="45%" height="32"><div align="center"><strong>Enter Subject Name </strong></div></td>
      <td width="2%" height="5">  
      <td width="53%" height="32">
        <input name="subname" class="form-control"   placeholder="enter language name" type="text" id="subname">
    <tr>
        <td height="26"> </td>
        <td>&nbsp;</td>
	  <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="26"></td>
      <td>&nbsp;</td>
      <td><input type="submit"class="btn btn-primary btn-lg active"   name="submit" value="Add" ></td>
    <table width='100%'  border='0' align='center'>
  
  
  <tr>
    
    <td align='center' > <p class='style7'><a href='Teacher_Add_Test.php'><img src='images/add test.png'></a></p> </td>
  </tr>
  <tr>
    
    <td align='center' > <p class='style7'><a href='Teacher_Add_Question.php'><img src='images/add questions.png'> </a></p></td>
  </tr>
</table>";
	
	
	</tr>
  </table>
</form>
<p>&nbsp; </p>
</div>
<?php
include("footer.php");
?>