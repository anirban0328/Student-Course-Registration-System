<?php
session_start();
if($_SESSION['authuser']!=1)
{
echo"ACCESS DENIED";
exit();
}
$connect = mysql_connect("localhost", "root", "") or die ("check your server connection");
$name= $_POST['myusername'];
$pass= $_POST['mypassword'];
mysql_select_db ("2008b4a5723p");
$query="SELECT * FROM members WHERE username='$name' and password='$pass'";

$results=mysql_query($query) or die(mysql_error());

if($row = mysql_fetch_array($results))
  {
  echo "<table border='1'>
<tr>
<th>ID</th>
<th>USERNAME</th>
<th>PASSWORD</th>
<th>BRANCH</th>
<th>YEAR OF PASSING</th>
</tr>";
  
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['username'] . "</td>";
  echo "<td>" . $row['password'] . "</td>";
  echo "<td>" . $row['branch'] . "</td>";
  echo "<td>" . $row['year'] . "</td>";
  echo "</tr>";
  }
  else{
  echo"LOGIN FAILED(INVALID USERNAME OR PASSWORD)";
  exit();
  }
echo "</table>";

?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" /> 
</head>
<body>
<div id="div1"></div>
</body>
</html>	

<form method="post" action="add.php">
<input type="submit" name="add" value="ADD NEW INFROMATION">
</form>
<form method="post" action="welcome(main page).php">
<input type="submit" name="add" value="LOGOUT">
</form>
<form method="post" action="new_course_reg.php">
<input type="submit" name="add" value="COURSE REGISTRATION">
</form>


<?php
echo"COURSES TAKEN BY YOU ARE:";
echo"</br>";
$query="SELECT cname FROM regis WHERE uname='$name'";
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
<form method="post" action="edit_course.php">
<input type="submit" name="add" value="Click here to edit your course(s)">
</form>

<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" /> 
</head>
<body>
<div id="div1"></div>
</body>
</html>	

















