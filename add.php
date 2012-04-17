<?php
session_start();
if($_SESSION['authuser']!=1)
{
echo"ACCESS DENIED";
exit();
}
?>
<form method="post" action="modify.php">

Add the name of new field information :<input type="text" name="info"><br/>
Add its corresponding value :<input type="text" name="value"><br/>
<input type="submit" name="submit" value="submit">
</form>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" /> 
</head>
<body>
<div id="div1"></div>
</body>
</html>	