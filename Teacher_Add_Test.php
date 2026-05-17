 <!DOCTYPE html>
<!--[if lt IE 7]><html class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--><html><!--<![endif]-->
<head>
<title>OTS | Add Subject</title>
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
<body>
<?php
include("header1.php");

error_reporting(1);
session_start();
?>

<?php
error_reporting(1);
$cn=mysql_connect("localhost","root","") or die("Could not Connect My Sql");
mysql_select_db("OTS",$cn)  or die("Could connect to Database");
echo(" <br><p align='right'><font color='blue'size='5' face='Times New Roman'> User: ".$_SESSION['Teach']);
echo"</font><a href='signout.php'> <input type='button'class='btn btn-info' id='logout' value='Logout'></a>"."</p>";

echo "<br><h2><div  class=head1>Add Test</div></h2>";
if($_POST[submit]=='Save' || strlen($_POST['subid'])>0 )
{
extract($_POST);
mysql_query("insert into ots_test(sub_id,test_name,total_que) values ('$subid','$testname','$totque')") or die(mysql_error());
echo "<p align=center>Test <b>\"$testname\"</b> Added Successfully.</p>";
unset($_POST);
}
?>
<SCRIPT LANGUAGE="JavaScript">
function check() {
mt=document.form1.testname.value;
if (mt.length<1) {
alert("Please Enter Test Name");
document.form1.testname.focus();
return false;
}
tt=document.form1.totque.value;
if(tt.length<1) {
alert("Please Enter Total Question");
document.form1.totque.value;
return false;
}
return true;
}
</script>
<form name="form1" method="post" onSubmit="return check();">
  <table width="58%"  border="0" align="center">
    <tr>
      <td width="49%" height="32"><div align="left"><strong>Select Subject ID </strong></div></td>
      <td width="3%" height="5">  
      <td width="48%" height="32"><select class="form-control custom"  name="subid">
<?php
$rs=mysql_query("Select * from ots_subject order by  sub_name");
	  while($row=mysql_fetch_array($rs))
{
if($row[0]==$subid)
{
echo "<option value='$row[0]' selected>$row[1]</option>";
}
else
{
echo "<option value='$row[0]'>$row[1]</option>";
}
}
?>

      </select>
        
    <tr>
        <td height="26"><div align="left"><strong> Enter Test Name </strong></div></td>
        <td>&nbsp;</td>
	  <td><input name="testname" type="text"class="form-control" placeholder="Test Name:" id="testname"></td>
    </tr>
    <tr>
      <td height="26"><div align="left"><strong>Enter Total Question </strong></div></td>
      <td>&nbsp;</td>
      <td><input name="totque" type="text" class="form-control" placeholder="Total Number Of Questions" id="totque"></td>
    </tr>
    <tr>
      <td height="26"></td>
      <td>&nbsp;</td>
      <td><input type="submit"class="btn btn-primary btn-lg active"   name="submit" value="Add" ></td>
    </tr>
	<tr>
    
    <td align='center' > <p class='style7'><a href='Teacher_Add_Question.php'><img src='images/add questions.png'> </a></p></td>
  </tr>
  </table>
</form>
<p>&nbsp; </p>
<?php
include("footer.php");
?>