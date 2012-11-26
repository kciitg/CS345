<html>
<head>
<title>Showing Results</title>
</head>
<body>
<?php
$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = 'nani1991';
$course= $_GET['course'];
echo "FEEDBACK OF '$course' ";
  echo "<br>";
    echo "<br>";
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(!$conn )
{
  die('Could not connect: ' . mysql_error());
}

mysql_select_db('test',$conn);


$sql = "SELECT teaching, future, instructor_preparation, difficulty, student_preparation FROM FEEDBACK where c_id='$course'";
if (!mysql_query($sql,$conn))
  {
  die('Error: ' . mysql_error());
  }
$result=mysql_query($sql);


echo "<table border='1'>
<tr>

<th>How do you rate the instructors teaching</th>
<th>How do you rate the relevance of the course to you in the future</th>
<th>How do you rate the instructors preparation before coming to the class</th>
<th>How do you rate the difficulty of the course</th>
<th>How do you rate your preparation before going to class</th>

</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['teaching'] . "</td>";
  echo "<td>" . $row['future'] . "</td>";
    echo "<td>" . $row['instructor_preparation'] . "</td>";
  echo "<td>" . $row['difficulty'] . "</td>";
  echo "<td>" . $row['student_preparation'] . "</td>";

  echo "</tr>";
  }
echo "</table>";
  echo "<br>";
    echo "<br>";
mysql_close($conn);
?>

<center>
<font size=6>
<form action="faculty.php" method="post">
<input type="submit" name="logout" value="logout">
</body>
</html>