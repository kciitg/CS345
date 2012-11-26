<html>
<head>
<title>Selecting MySQL Database</title>
</head>
<body>
<?php
$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = 'nani1991';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(!$conn )
{
  die('Could not connect: ' . mysql_error());
}

mysql_select_db('test',$conn);
$result = mysql_query("SELECT * FROM users where username ='ram'");

/*echo "<table border='1'>
<tr>
<th>Firstcourse</th>
<th>secondcourse</th>
<th>thirdcourse</th>
</tr*/

//<a<> href="url">Link text
while($row = mysql_fetch_array($result))
  {
  //<a href="feedback.php">$row['course1']</a>
  $test1=$row['course1'];
   $test2=$row['course2'];
    $test3=$row['course3'];
  echo "<a href='feedback.php'> $test1 </a>";
  echo "<br>";
//echo "<tr>";
 echo "<a href='feedback.php'>$test2 </a>";
 echo "<br>";
  echo "<a href='feedback.php'>$test3 </a>";
  echo "<br>";
  
  }
echo "</table>";

mysql_close($conn);
?>
</body>
</html>