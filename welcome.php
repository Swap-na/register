<?php 
session_start();
if(!($_SESSION['email']))
header("location:login.php");
	
	?>


<html>
  <head>
      <title>Welcome page</title>
  </head>
	  <style type='text/css'>
	   body{
	  background:url('welcome.jpg');
	   }
	  </style>
  <body>	

  <center><font color="red" size='6'>Welcome to my page</font></center>
  
 <h3 align='right' style='margin-right:30px;margin-top:30px;' > <a href='logout.php' >LogOut</a></h3>
  </body>
</html> 