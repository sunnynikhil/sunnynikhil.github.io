<?php
require 'dbusers.php';
if(isset($_POST['amount'])&&isset($_POST['name']))
{
	$amount=$_POST['amount'];
	$name=$_POST['name'];
	$query="INSERT INTO `transfers` (`name`, `amount`) VALUES ('$name', '$amount')";
	mysqli_query($mycon,$query);
	echo 'credits are transfered';
	$query1="SELECT current_credit FROM user WHERE name='$name'";
	$myrun=mysqli_query($mycon,$query1);
	$row=mysqli_fetch_array($myrun);
	$oldamount=$row[0];
	$update=$oldamount+$amount;
	$query3="UPDATE `user` SET current_credit='$update' WHERE name='$name'";
	mysqli_query($mycon,$query3);
	header('location:viewusers.php');
}
else
{
	echo 'enter all fields';
}
?>