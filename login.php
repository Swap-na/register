<?php

session_start();


?>





<html>
  <head>
      <title>Login</title>
  </head>
	  <style type='text/css'>
	   body{
	  background:url('login.jpg');
	   }
	  </style>
  <body>	  
          <form method='post' action='login.php'>
  
             <table width='500' border='5' align='center'>
			 
			 
			 <tr>
			    <td colspan='3' align='center'><h1>Log In</h1></td>
				
			</tr>
			
			 
			
			 <tr>
			    <td align='center'>Password:</td>
				<td><input type='password' name='pwd'/></td>
			</tr>
			
			 <tr>
			    <td align='center'>Email</td>
				<td><input type='text' name='email'/></td>
			</tr>
			
			 <tr>
			    <td colspan='3' align='center'><input type='submit' name='login' value='Login'/></td>
				
			</tr>

		 </table>
  
  </form>
  <center>
  <font size='6'>Not registered yet?
  
  </font>
  <a href='registration.php'>SignUp Here</a>
  </center>
  
  </body>
</html> 
<?php
$my_con=mysqli_connect('localhost','root');
  mysqli_select_db($my_con,'users_db');

   if(isset($_POST['login']))
   {
	   
	   $user_pass=$_POST['pwd'];
	   $user_email=$_POST['email'];
   
   
   $check_user="select * from users where user_pass='$user_pass' AND user_email='$user_email'";
   
   $run=mysqli_query($my_con,$check_user);
  



  if(mysqli_num_rows($run)>0)
   {
	   
	   $_SESSION['email']=$user_email;
	   echo "<script>window.open('welcome.php','_self')</script>";
   }
   else
   {
	   echo "<script>alert('Email or password is incorrect!')</script>";
   }
   
   
   }


?>











