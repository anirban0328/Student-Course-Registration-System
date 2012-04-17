<?php
session_start();
if($_SESSION['authuser']!=1)
{
echo"ACCESS DENIED";
exit();
}

?>
<html>
<head>
<title>NEW COURSE REGISTRATION</title>
</head>
<body>
<form method="post" action="insert_course.php">
Course ID :<input type="text" name="id"><br/>
Name :<input type="text" name="name"><br/>
Credit :<input type="text" name="credit"><br/>
Instructor :<input type="text" name="instructor"><br/>

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