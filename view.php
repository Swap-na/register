<html>
   <head>
      <title>View</title>
	  </head>

<body>
<h1>All the users information</h1>

<table align='center' border='5' width='800'>

 <tr bgcolor='yellow'>
  <th>User no</th>
  <th>User name</th>
  <th>User password</th>
  <th>User email</th>
  <th>Delete User</th>

</tr>


 
 <?php
 $my_con=mysqli_connect('localhost','root');
  mysqli_select_db($my_con,'users_db');
  $check_user="select * from users";
   
   $run=mysqli_query($my_con,$check_user);
  while($row=mysqli_fetch_array($run)){
	  
	  $user_id=$row[0];
	  $user_name=$row[1];
	  $user_pass=$row[2];
	  $user_email=$row[3];
 
 ?>
 <tr align='center'>
<td><?php echo $user_id ?></td>
<td><?php echo $user_name ?></td>
<td><?php echo $user_pass ?></td>
<td><?php echo $user_email ?></td>
<td>Delete</td>



</tr>
  <?php } ?>
</table>
</body>

</html>