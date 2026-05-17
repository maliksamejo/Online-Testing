<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<<html>
<head>
<title>OTS | Search</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/foundation.min.css">
<link rel="stylesheet" href="css/superfish.css">
<link rel="stylesheet" href="css/stylesheet.css">
<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700' rel='stylesheet' type='text/css'>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>

<?php
include('header1.php');
echo"<table align='center'>";
?>

<form action="" method="post">
  <div class="form-group">
   
<div class="col-md-6">
                                            <div class="form-inline" >
                                                <table align="center" ><tr><td>
												<div class="form-group">

                                                    <p class="form-control-static">User Name:</p>
                                                </div></td>
                                                <td><div class="form-group">
                                                
                                                    <input type="text"   name="login" id="seat" placeholder="" required>
                                                </div></td>
                                                <td><button type="submit" name="button" id="search" class="btn btn-info">Search</button>
                                                <img src="images/ajax-process-small.gif" id="ajax-ico" style="display: none;"/>

												</div></td></tr>
												</table>
</form>
<?php
if(isset($_POST['login']))
{
$login=$_POST['login'];	
	
}

echo "<table>";


if(isset($_POST['button']))
{
// Connect to the database
$con = mysql_connect("localhost","root","");
// Make sure we connected succesfully
if(! $con)
{
    die('Connection Failed'.mysql_error());
}

// Select the database to use
mysql_select_db("ots",$con);

$show ="SELECT * FROM stud_info where username='".$login."' " ;
$result= mysql_query($show);
$row=mysql_num_rows($result);
$id=0;

while($row>$id){

$ids=mysql_result($result,$id,"id");
$name=mysql_result($result,$id,"username");
$roll=mysql_result($result,$id,"roll_no");
$address=mysql_result($result,$id,"address");
			
Echo"<h1><center> Student Result Information </center><h1>
<table border='2' align='center'>
<tr><td>Name:</td><td>$name </td></tr>
<tr>
<td>Roll No. </td>
<td>$roll
</tr>
<tr>
<td> Address: </td>
<td>$address</td>
</tr>
";

$id++;
}
$show ="SELECT * FROM  ots_result where login='".$login."' " ;
$result= mysql_query($show);
$row=mysql_num_rows($result);
$id=0;
while($row>$id){

$ids=mysql_result($result,$id,"id");
$score=mysql_result($result,$id,"score");
echo"
<tr>
<td>Test Score</td>
<td>$score</td>
</tr>";
$id++;
}
echo"</table>";	
	
	
}else{
	
	echo"Result Not Found.....";
}
include('footer.php');
echo"</table>";
?>