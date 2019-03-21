<?php
$host='localhost';
$user='root';
$pass='';
$dbname='credit_management';
if($mycon=@mysqli_connect($host,$user,$pass))
{
	if($mydb=@mysqli_select_db($mycon,$dbname))
	{
	}
	else
	{
		echo 'selected the db!';
	}
}
else
{
	echo 'error';
}
?>