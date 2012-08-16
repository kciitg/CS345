<?php
setcookie("user","",time()-3600);
session_start();
session_destroy();
?>
<html>
<bopdy>

<h1 style="color:red;font-family=bodoniMTblack;text-align:center;">YOU HAVE REGISTERED FOR THESE COURSES </h1>

<br\>
<br\>
<br\>

<?php

$x =$_POST["CS"];
foreach ($x as $value)
{	 
	echo $value;
	echo PHP_EOL;
	
}

//$fp=fopen("list.txt","r");
$fs=fopen("1.txt","r");
//fclose($fp);
$ft=fgets($fs);
/*echo $ft;

$pos=-1;
$arr=fgets($fp);
$pos=strpos($arr,$ft);
echo $pos;
fclose($fp);

if($pos != -1)
{*/
	$fp=fopen("list.txt","a");
	fputs($fp,$ft);
	fputs($fp," ");
	foreach($x as $value)
	{
		fputs($fp,$value);
		fputs($fp," ");
	}
	fputs($fp,PHP_EOL);
	fclose($fp);

fclose($fs);
?>
<br/>
<br/>
<br/>

<form name = "login" action = "login.php">
<input type = "submit" value = "logout" /><br/>

</body>
</html>