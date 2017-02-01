<html>
  <head>
      <title>Registration</title>
  </head>
	  <style type='text/css'>
	   body{
	  background:url('register.jpg');
	   }
	  </style>
  <body>	  
          <form method='post' action='registration.php'>
  
             <table width='500' border='5' align='center'>
			 
			 
			 <tr>
			    <td colspan='3' align='center'><h1>Registration Form</h1></td>
				
			</tr>
			
			 <tr>
			    <td align='center'>User Name:</td>
				<td><input type='text' name='name'/></td>
			</tr>
			
			 <tr>
			    <td align='center'>User Password:</td>
				<td><input type='password' name='pwd'/></td>
			</tr>
			
			 <tr>
			    <td align='center'>Email</td>
				<td><input type='text' name='email'/></td>
			</tr>
			
			 <tr>
			    <td colspan='3' align='center'><input type='submit' name='submit' value='SignUp'/></td>
				
			</tr>

		 </table>
  
  </form>
  <center><b></b>Already registered<br><a href='login.php'>Login Here</center>
  </body>
</html> 

<?php 
  
  $my_con=mysqli_connect('localhost','root');
  mysqli_select_db($my_con,'users_db');
  
   if(isset($_POST['submit']))
   {
	   $user_name=$_POST['name'];
	   $user_pass=$_POST['pwd'];
	   $user_email=$_POST['email'];
   
   if($user_name=='')
   {
	   echo "<script>alert('Please enter your name')</script>";
	   exit();
   }
    if($user_pass=='')
   {
	   echo "<script>alert('Please enter your password')</script>";
	   exit();
   }
    if($user_email=='')
   {
	   echo "<script>alert('Please enter your email')</script>";
	   exit();
   }
   $check_mail="select * from users where user_email='$user_email'";
   
   $run=mysqli_query($my_con,$check_mail);
   if(mysqli_num_rows($run)>0)
   {
	   echo "<script>alert('Email $user_email already exists.Please enter another one!')</script>";
   exit();
   }
   $query="insert into users(user_name,user_pass,user_email) values('$user_name','$user_pass','$user_email')";
     if(mysqli_query($my_con,$query))
	 {
   
   echo "<script>window.open('welcome.php','_self')</script>";
   
   }
   }
?> 