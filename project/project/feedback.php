<html>
<head>
<title>FEEDBACK</title>
<h1 style="color:red;font-family=bodoniMTblack;text-align:center;">COURSE FEEDBACK </br></h1>

<left>
<form action="thanks.php" method="post">
<p><b></b> How do you rate the instructors teaching</p>
<select name="teaching">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select>

<p><b></b> How do you rate the relevance of the course to you in the future</p>
<select name="future">
<option value="useless">useless</option>
<option value="not sure">not sure</option>
<option value="neutral">neutral</option>
<option value="useful">useful </option>
<option value="very useful">very useful</option>
</select>

<p><b></b> How do you rate the instructors preparation before coming to the class</p>
<select name="instrutor_preparation">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select>

<p><b></b> How do you rate the difficulty of the course</p>
<select name="difficulty">
<option value="very easy">very easy</option>
<option value="easy">easy</option>
<option value="neutral">neutral</option>
<option value="hard">hard</option>
<option value="very hard">very hard</option>
</select>

<p><b></b> How do you rate your preparation before going to class</p>
<select name="student_preparation">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select>
<br>
<br>
<br>




<input type="hidden" name="course" value=<?php echo $_GET['course'];?>>
<input type="submit" name="submit" value="submit">
</form>


</head>
<body>