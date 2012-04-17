<?php
session_start();
$_SESSION['authuser']=1;

?>

<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form name="form1" method="post" action="result.php" onsubmit="return validate(this);">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td colspan="3"><strong>Member Login </strong></td>
</tr>
<tr>
<td>Username:</td>
<td><input name="myusername" type="text" id="myusername"></td>
</tr>
<tr>
<td>Password:</td>
<td><input name="mypassword" type="password" id="mypassword"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="LOGIN"></td>
</form>
<form name="form2" method="post" action="newreg.php">
<td><input type="submit" name="newreg" value="SIGN IN"></td>
</form>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
</table>
</td>
</tr>
</table>

<html>
<head>
<script type="text/javascript">
function validate(form){
 var userName = form.myusername.value;
 var password = form.mypassword.value;

 if (userName.length === 0) {
  alert("You must enter a username.");
  return false;
 }

 if (password.length === 0) {
  alert("You must enter a password.");
  return false;
 }

 return true;
}
</script>
<link rel="stylesheet" type="text/css" href="style.css" /> 
</head>
<body>
<div id="div1"></div>
</body>
</html>	
