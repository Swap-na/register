
<html>
  <head>
      <title>Admin panel</title>
  </head>
	  <style type='text/css'>
	   body{
	  background:url('login.jpg');
	   }
	  </style>
  <body>	  
          <form method='post' action='admin.php'>
  
             <table width='500' border='5' align='center'>
			 
			 
			 <tr>
			    <td colspan='3' align='center'><h1>Log In</h1></td>
				
			</tr>
			
			 			 <tr>
			    <td align='center'>Admin Name:</td>
				<td><input type='text' name='admin_name'/></td>
			</tr>
			
			 <tr>
			    <td align='center'>Admin Password:</td>
				<td><input type='password' name='admin_pwd'/></td>
			</tr>
			

			
			 <tr>
			    <td colspan='3' align='center'><input type='submit' name='admin_login' value='Login'/></td>
				
			</tr>

		 </table>
  
  </form>
 
  
  </body>
</html> 
<?php
$my_con=mysqli_connect('localhost','root');
  mysqli_select_db($my_con,'users_db');

   if(isset($_POST['admin_login']))
   {
	   	   $admin_name=$_POST['admin_name'];

	   $admin_pass=$_POST['admin_pwd'];
   
   
   $check_user="select * from admin where admin_name='$admin_name' AND admin_pass='$admin_pass'";
   
   $run=mysqli_query($my_con,$check_user);
  



  if(mysqli_num_rows($run)>0)
   {
	   
	  
	   echo "<script>window.open('view.php','_self')</script>";
   }
   else
   {
	   echo "<script>alert('Admin details are incorrect!')</script>";
   }
   
   
   }


?>











