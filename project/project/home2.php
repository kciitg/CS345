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
$result = mysql_query("SELECT * FROM users");


while($row = mysql_fetch_array($result))
  {
  
  $us = $row['username'] ;
  $pass = $row['password'];
  if($username==$us && $password==$pass)
  {
	echo "login successfull";
	break;
	}
  
  }
//echo "</table>";

mysql_close($conn);
?>
</body>
</html>