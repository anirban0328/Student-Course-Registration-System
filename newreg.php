<?php
session_start();
if($_SESSION['authuser']!=1)
{
echo"ACCESS DENIED";
exit();
}
$connect = mysql_connect("localhost","root","") or die ("check your server connection.");

mysql_select_db("2008b4a5723p");


?>
<html>
<head>
<title>NEW REGISTRATION</title>
</head>
<body>
<form method="post" action="insert_data.php">
Name :<input type="text" name="name"><br/>
Password :<input type="password" name="pass"><br/>
Branch :<input type="text" name="branch"><br/>
Year of passing :<input type="text" name="year"><br/>


<input type="submit" name="submit" value="submit">

</form>
</body>
</html>	

<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" /> 
</head>
<body>
<div id="div1"></div>
</body>
</html>	

