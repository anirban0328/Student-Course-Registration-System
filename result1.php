<?php
session_start();
if($_SESSION['authuser']!=1)
{
echo"ACCESS DENIED";
exit();
}

$name= $_POST['myusername'];
$pass= $_POST['mypassword'];


if($name!="admin" && $pass!="admin")
  {
echo"ACCESS DENIED";
exit();
}
?>
<html>
<body>
<form method="post" action="select_course.php">
COURSE NAME :<input type="text" name="cname">
<input type="submit" name="submit" value="submit">
</form>

<form method="post" action="select_student.php">
STUDENT NAME :<input type="text" name="name">
<input type="submit" name="submit" value="submit">
</form>

<form method="post" action="add_course.php">
<input type="submit" name="wel" value="ADD NEW COURSE">
</form>
<form method="post" action="edit_course.php">
<input type="submit" name="submit" value="EDIT EXISTING STUDENT COURSE">
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

