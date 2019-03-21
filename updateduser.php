<html>
<body style="background:#e6ffff">
<center>
<h1> Updated details of users</h1>
<?php
require 'dbusers.php';
$query="SELECT * FROM `user` ORDER BY current_credit ASC";
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
while($row=@mysqli_fetch_array($myrun))
{ $field1=$row[0];
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