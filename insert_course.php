<?php
session_start();
if($_SESSION['authuser']!=1)
{
echo"ACCESS DENIED";
exit();
}
$connect = mysql_connect("localhost", "root", "") or die ("check your server connection.");


mysql_select_db("2008b4a5723p");
$id = $_POST['id'];
$name = $_POST['name'];
$credit = $_POST['credit'];
$instructor = $_POST['instructor'];

if($id=='' or $name=='' or $credit=='' or $instructor=='')
echo"ERROR IN REGISTRATION";

else{
$insert = "INSERT INTO course(id,name,credit,instructor)
values('$id','$name','$credit','$instructor')";

$results=mysql_query($insert) or die(mysql_error());

echo " SUCESSFULLY ADDED INFORMATION";
}
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" /> 
</head>
<body>
<div id="div1"></div>
</body>
</html>	