<html>
<head>
<title>Thanks</title>
</head>
<body>

<?php
$x0=$_POST['course'];
$x1=$_POST['teaching'];
$x2=$_POST['future'];
$x3=$_POST['instrutor_preparation'];
$x4=$_POST['difficulty'];
$x5=$_POST['student_preparation'];

//echo $x1, $x2, $x3, $x4, $x5, $x6 ;

$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = 'nani1991';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(!$conn )
{
  die('Could not connect: ' . mysql_error());
}

mysql_select_db('test',$conn);
$sql = "INSERT INTO feedback (c_id, teaching, future, instructor_preparation, difficulty, student_preparation) VALUES ('$x0','$x1', '$x2', '$x3', '$x4', '$x5')";

if (!mysql_query($sql,$conn))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($conn);
?>


<h1 style="color:green;font-family=bodoniMTblack;text-align:center;">Thanks for giving the feedback </br></h1>
<center>
<font size=6>
<form action="home.php" method="post">
<input type="submit" name="logout" value="logout">


</body>
</html>
