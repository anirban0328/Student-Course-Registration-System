<?php
session_start();
if($_SESSION['authuser']!=1)
{
echo"ACCESS DENIED";
exit();
}
$connect = mysql_connect("localhost","root","") or die ("check your server connection.");

mysql_select_db("2008b4a5723p");
echo"courses available are :";

$query="SELECT course.name FROM course";
$results=mysql_query($query) or die(mysql_error());

echo "<table border=’2’>\n";
while ($rows=mysql_fetch_assoc($results)) {
echo "<tr>\n"; 
foreach($rows as $value) 
{
echo "<td>\n";  
echo $value; 
echo "</td>\n"; 
}
echo "</tr><br>\n"; 
}
echo "</table>\n";
?>

<html>
<body>
<form method="post" action="student_course.php">

Input your name   :<input type="text" name="name"><br/>
Input your course :<input type="text" name="course">

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