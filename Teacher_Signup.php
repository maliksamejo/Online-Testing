<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php
include('header1.php');
?>


<html>
<head>
<title>OTS|Teacher Signup </title>



<script language="javascript">
function check()
{

 if(document.form1.lid.value=="")
  {
    alert("Plese Enter Login Id");
	document.form1.lid.focus();
	return false;
  }
 
 if(document.form1.pass.value=="")
  {
    alert("Plese Enter Your Password");
	document.form1.pass.focus();
	return false;
  } 
  if(document.form1.cpass.value=="")
  {
    alert("Plese Enter Confirm Password");
	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.pass.value!=document.form1.cpass.value)
  {
    alert("Confirm Password does not matched");
	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.name.value=="")
  {
    alert("Plese Enter Your Name");
	document.form1.name.focus();
	return false;
  }
  if(document.form1.Subject.value=="")
  {
    alert("Plese Enter Subject");
	document.form1.Subject.focus();
	return false;
  }				 
  if(document.form1.Address.value=="")
  {
    alert("Plese Enter Address Name");
	document.form1.Address.focus();
	return false;
  }
  if(document.form1.phone.value=="")
  {
    alert("Plese Enter Contact No");
	document.form1.phone.focus();
	return false;
  }
  if(document.form1.email.value=="")
  {
    alert("Plese Enter your Email Subject");
	document.form1.email.focus();
	return false;
  }
  e=document.form1.email.value;
		f1=e.indexOf('@');
		f2=e.indexOf('@',f1+1);
		e1=e.indexOf('.');
		e2=e.indexOf('.',e1+1);
		n=e.length;

		if(!(f1>0 && f2==-1 && e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1))
		{
			alert("Please Enter valid Email");
			document.form1.email.focus();
			return false;
		}
  return true;
  }
  
</script>

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
<div class="form-group">
 <table align="center" class="table table-hover">
   <tr>
     
     <td align="center" class="form-group" width="118" height="57"><h1 align="center">New Teacher Signup</span></h1></td>
   </tr>
   <tr>
     <td class="form-group"><form name="form1" method="post" action="Teacher_Signup1.php" onSubmit="return check();">
       <table width="301" border="0" align="center">
         <tr>
           <td class="form-group"><div align="left" class="style7">Login Id </div></td>
           <td class="form-group"><input class="form-control" placeholder="loginid" type="text" name="lid"></td>
         </tr>
         <tr>
           <td class="form-group">Password</td>
           <td><input class="form-control" placeholder="Password" type="password" name="pass"></td>
         </tr>
         <tr>
           <td class="style7">Confirm Password </td>
           <td><input class="form-control" placeholder="Conform Password" name="cpass" type="password" id="cpass"></td>
         </tr>
         <tr>
           <td class="style7">Name</td>
           <td><input name="name" class="form-control" placeholder="Eg: Ali" type="text" id="name"></td>
         </tr>
         <tr>
           <td valign="top" class="style7">Subject</td>
           <td><input name="Subject"  placeholder="Eg: JAVA,PHP "name="Subject" id="Subject"></td>
         </tr>
         <tr>
           <td valign="top" class="style7">Address</td>
           <td><textarea class="form-control" placeholder="Eg: House#,Street." name="Address" id="Address"></textarea></td>
         </tr>
         <tr>
           <td valign="top" class="style7">Phone</td>
           <td><input name="phone" class="form-control" placeholder="eg:0300-0000000"type="text" id="phone"></td>
         </tr>
         <tr>
           <td valign="top" class="style7">E-mail</td>
           <td><input class="form-control" placeholder="Eg:example@gmai.com" name="email" type="text" id="email"></td>
         </tr>
         <tr>
           <td>&nbsp;</td>
           <td><input class="btn btn-primary btn-lg active" type="submit" name="Submit" value="Signup">
           </td>
         </tr>
       </table>
     </form></td>
   </tr>
 </table>
 <p>&nbsp; </p>
<?php
include('footer.php');
?>
</body>
</html>
