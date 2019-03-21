<html>
<body style="background:#e6ffff">
<h3><a href="Homepage.php" style="text-decoration:none;color:#66cc66;width:100px">Home Page</a>
</h3><center>
<h1> Transaction history</h1>
<?php
require 'dbusers.php';
$query="SELECT * FROM `transfers` ORDER BY amount ASC";
echo '<table border="0s" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">Name</font> </td> 
          <td> <font face="Arial">Amount</font> </td>  
      </tr>';
if($myrun=mysqli_query($mycon,$query))
{    
while($row=@mysqli_fetch_array($myrun))
{ $field1=$row[0];
  $field2=$row[1];
   echo '<tr> 
                  <td>'.$field1.'</td> 
                  <td>'.$field2.'</td> 
              </tr>';
	   
}
}

?>
</center>

<body>
</html>