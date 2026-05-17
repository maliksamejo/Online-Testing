<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>OTS | Student </title>
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


<?php
include("header1.php");
$cn=mysql_connect("localhost","root","") or die("Could not Connect My Sql");
mysql_select_db("OTS",$cn)  or die("Could connect to Database");
extract($_POST);

if(isset($submit))
{
	$rs=mysql_query("select * from teacher_reg where UserID='$loginid' and Password='$pass'");
	if(mysql_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
	///////session////////
	
	$show="select * from teacher_reg where UserID='".$loginid."'";
$result=mysql_query($show);                                                                                             
$row=mysql_num_rows($result);
$id=0;
$Teach_Name=mysql_result($result,$id,"Name");
$_SESSION['Teach']=$Teach_Name;
echo(" <br><p align='right'><font color='blue'size='5' face='Times New Roman'> User: ".$_SESSION['Teach']);
echo"</font><a href='signout.php'> <input type='button'class='btn btn-info' id='logout' value='Logout'></a>"."</p>";
	
	
	


	//////Login Page///////////
echo "<h1 class='style8' align=center>Wel come to Online Test</h1>";
		echo "<table width='100%'  border='0' align='center'>
  <tr><td align='center'> <a href='Teacher_Add_Sub.php'><img src='images/add Subject.png'></a> </td>
  </tr>
  <tr>
    
    <td align='center' > <p class='style7'><a href='Teacher_Add_Test.php'><img src='images/add test.png'></a></p> </td>
  </tr>
  <tr>
    
    <td align='center' > <p class='style7'><a href='Teacher_Add_Question.php'><img src='images/add questions.png'> </a></p></td>
  </tr>
</table>";
   		
include('footer.php');
		exit;
		

}

}

?>









<table width="100%" border="0">
  <tr>
    <td width="70%" height="25">&nbsp;</td>
    <td width="1%" rowspan="2" bgcolor="#556B2F"><span class="style6"></span></td>
    <br><td width="29%" bgcolor="#556B2F"><div align="center" class="style2"><font color="white" size="5">Teacher Login</font> </div></br></td>
  </tr>
  <tr>
    <td height="296" valign="top"><div align="center">
        <h1 class="style8">Welcome to Teacher Login</h1>
      <span class="style5"><img src="images/book.jpg" width="129" height="100"><span class="style7"><img src="images/quiz.jpg" width="50" height="50"><img src="images/quiz2.jpg" width="43" height="43"></span>        </span>
        <param name="movie" value="english theams two brothers.dat">
        <param name="quality" value="high">
        <param name="movie" value="Drag to a file to choose it.">
        <param name="quality" value="high">
        <param name="BGCOLOR" value="#FFFFFF">
<p align="left" class="style5">&nbsp;</p>
      <blockquote>
          <p align="left" class="style5"><span class="style7">Wel Come to Teacher Login.This is Online Testing Service
            . This Site will provide the access to Add Subject,Add Test, Add Questions related to your subject and to see the Students result how have given your test.</span></p>
      </blockquote>
    </div></td>
    <td valign="top"><form name="form1" method="post" action="">
      <table width="200" border="0">
        <tr>
          <td><span class="style2">Login ID </span></td>
          <td><input name="loginid" class="form-control" placeholder="LoginID"  type="text" id="loginid2"></td>
        </tr>
        <tr>
          <td><span class="style2">Password</span></td>
          <td><input name="pass" class="form-control"  type="password" id="pass2"></td>
        </tr>
        <tr>
          <td colspan="2"><span class="errors">
             
<?php
		  if(isset($found))
		  {
		  	
			echo "<div class='alert alert-info'><font color='red' size='2'> Invalid Username or Password</font></div>";
		  }
		  ?>
          </span></td>
          </tr>
        <tr>
          <td colspan=2 align=center class="errors">
		  <input name="submit" class="btn btn-primary btn-lg active" type="submit" id="submit"   value="Login">		  </td>
        </tr>
        <tr>
          <td colspan="2" bgcolor="#556B2F"><div align="center"><span class="style4">New User ? <a href="Teacher_Signup.php"><font color="white" size="3">Signup Free</font></a></span></div></td>
          </tr>
      </table>
      <div align="center">
        <p class="style5"><img src="images/topleft.png" width="134" height="128">          </p>
        </div>
    </form></td>
  </tr>
</table>
<?php


include("footer.php");
?>
</body>
</html>
