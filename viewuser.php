<html>
<body style="background:#e6ffff">
<h3><a href="Homepage.php" style="text-decoration:none;color:#66cc66;width:100px">Home Page</a>
</h3>
<center>
<?php
require 'dbusers.php';
$name=$_POST['name'];
echo '<h1> Details of '.$name.'</h1>';
$query="SELECT * FROM `user` WHERE `name`='$name'";
echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">Id</font> </td> 
          <td> <font face="Arial">Name</font> </td> 
          <td> <font face="Arial">Mail</font> </td> 
          <td> <font face="Arial">Current_credit</font> </td> 
          <td> <font face="Arial">Phoneno</font> </td> 
      </tr>';
if($myrun=mysqli_query($mycon,$query))
{    
$num_rows=mysqli_num_rows($myrun);
if($num_rows==1)
{
  $row=@mysqli_fetch_array($myrun);
  $field1=$row[0];
  $field2=$row[1];
  $field3=$row[2];
  $field4=$row[3];
  $field5=$row[4];
   echo '<tr> 
                  <td>'.$field1.'</td> 
                  <td>'.$field2.'</td> 
                  <td>'.$field3.'</td> 
                  <td>'.$field4.'</td> 
                  <td>'.$field5.'</td> 
              </tr>';
	   
}
}
?>
</center>
<body>
</html>