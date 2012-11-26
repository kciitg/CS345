<?php
setcookie("user","",time()-3600);
session_start();
session_destroy();
?>

<html>
<head>
<title>Selecting MySQL Database</title>
</head>
<body>
<?php
$username=$_POST['user'];
$password=$_POST['pass'];
$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = 'nani1991';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(!$conn )
{
  die('Could not connect: ' . mysql_error());
}

mysql_select_db('test',$conn);

$result = mysql_query("SELECT * FROM faculty");

while($row = mysql_fetch_array($result))
  {
  
  $us = $row['username'] ;
  $pass = $row['password'];
  if($username==$us && $password==$pass)
  {
	echo "<h1 style='color:red;font-family=bodoniMTblack;text-align:center;'>COURSES TAKEN</br></h1>";
	$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = 'nani1991';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(!$conn )
{
  die('Could not connect: ' . mysql_error());
}

mysql_select_db('test',$conn);
$result = mysql_query("SELECT * FROM faculty where username = '$username'");

while($row = mysql_fetch_array($result))
  {
  
  $test1=$row['course1'];
   $test2=$row['course2'];
  echo "<font size=6>";
  echo "<a href='faculty3.php?course=$test1'> $test1 </a>";
  echo "<br>";
    echo "<br>";

 echo "<a href='faculty3.php?course=$test2'>$test2 </a>";
 echo "<br>";
   echo "<br>";
}

mysql_close($conn);
	break;
	}
  
  }
//echo "</table>";

//mysql_close($conn);
?>
<center>
<font size=6>
<form action="faculty.php" method="post">
<input type="submit" name="logout" value="logout">
</body>
</html>