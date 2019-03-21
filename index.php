<html>
<head>
<title>
Credit_management
</title>
</head>
<body style="padding:1px;background:#e6ffff">
<h1 align="center" style="color:blue;align:center;margin:auto;padding:10px;">Credit-Management</h1>
<hr>
<h3>Welcome to <u>Credit-Management</u> these is the home page you can access the users and transfer the credits to user and also you 
    can view the users credits. Here below you can see the buttons like view users,select user,transfer credit etc... 
</h3>
<ul>
   <li><form method="post" action="viewusers.php">
       <p>For viewing all details of user click these</p>
       <input type="submit" value="View Users">
       </form>
	</li>
   <li><form method="post" action="viewuser.php">
       <p>Select a user and by searching user name</p>
       <input type="text" name="name"><br><input type="submit" value="search" >
       </form>
	</li>
    <li><form method="get" action="transfercredit.html">
	    <p>To transfer the credits click these.</p>
		<input type="submit" value="Transfer Credit">
		</form>
	</li>	
	<li>
	   <form method="post" action="transferdb.php">
	   <p> To view the pervious transactions click it</p>
	   <input type="submit" value="Transactions">
	   </form>
	</li>   
</ul>
</body>
</html>
