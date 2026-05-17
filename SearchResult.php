<?php	
$login=$_POST['login'];



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
<tr><td>Name:</td><td><input type='text' value='".$name."'> </td></tr>
<tr>
<td>Roll No. </td>
<td><input type='text' value='".$roll."'>
</tr>
<tr>
<td> Address: </td>
<td><input type='text' value='".$address."'></td>
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
<td><input type='text' value='".$score."'></td>
</tr>";
$id++;
}
echo"</table>";
//echo"<center><a  href='login.php'>RETURN BACK;</a></p>";

?>