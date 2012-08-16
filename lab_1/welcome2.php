<?php
setcookie("user","",time()-3600);
session_start();
session_destroy();
?>
<html>
<body>
<h1 style="color:red;font-family=bodoniMTblack;text-align:center;"> SELECT THE COURSE YOU WANT TO REGISTER </h1>

<?php 
//echo "welcome";
$username=$_POST['user'];
$password=$_POST['pass'];

$fs=fopen("1.txt","w");
fputs($fs,$username);

$row=0;
$col=0;
$temp=0;
$fp=fopen("user_data.txt","r");
$ch='a';
while(!feof($fp))
{
	$ch = fgetc($fp);
	if($ch != " ")
	{
		$data[$row][$col] = $ch;
		$col++;
	}
	else
	{
		$data[$row][$col] = '&';
		$col=0;
		//echo "di";
		$row++;
	}
}
$data[$row][$col] = '&';
fclose($fp);

for($i=0;$i<=$row;$i++)
{
	$ver_user="";
	$ver_pass="";
	$col=0;
	while(($data[$i][$col]!='|'))
	{
		$ver_user = $ver_user . $data[$i][$col];
		$col++;
	}
	
	$col++;
	
	while(($data[$i][$col]!='&'))
	{
		$ver_pass = $ver_pass . $data[$i][$col];
		$col++;
	
	}
	
	$x=strcmp($username,$ver_user);
	$y=strcmp($password,$ver_pass);
	if(($x==0)&&($y==0))
	{
		//echo "HELLO";
	    $temp=1;
		break;
	}else if($x==0)
	{
		echo "VERIFY PASSWORD";
		$temp=2;
	    break;
	}
}
if($temp==0)
echo "VERIFY USERNAME AND PASSWORD";
if($temp == 1) : ?>
<html>
<body>
<form name="courses" action="final2.php" method="post">
<input type = "checkbox" name="CS[]" value="CS344" /> CS344 <br/> <br/>
<input type = "checkbox" name="CS[]" value="CS345" /> CS345 <br/> <br/>
<input type = "checkbox" name="CS[]" value="MA101" /> MA101 <br/> <br/>
<input type = "checkbox" name="CS[]" value="CS101" /> CS101 <br/> <br/>
<input type = "checkbox" name="CS[]" value="CS201" /> CS201 <br/> <br/>
<input type = "submit" value = "submit" /><br/>
</body>
</html>
<?php endif; ?>
</body>
</html>