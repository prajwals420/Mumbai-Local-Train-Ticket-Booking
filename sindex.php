<?php
include 'connect.php';
include 'head2.php';
?>
<html>
<head>
 <link rel='stylesheet' href='index.css'>
 <style >  .table{  font-family: Montserrat, sans-serif;}
</style>
<title>M-Ticket</title>
</head>
<div><center><img src="https://img.icons8.com/bubbles/300/000000/user.png"/></center></div>

<h2><center><b>User Sign In</center></b></h2>
<body style="background-color: F5F1F0;">
<form method='post' action ='authenticate.php'  >
<div>
<table align="center" class="table">
<tr><td><h2><b>Email id: </b></h2></td> <td><input type="email" name="email" maxlength='50'></td></tr>
<tr><td><h2><b> Password: </b></h2></td> <td><input type="password" name="password" maxlength='50'></td></td></tr>
<tr><td colspan='2'><center><button type='Submit' style="background-color:black; border-color:black" name='login_submit' ><b>Sign In </b> </button></center></td></tr></table>
</div>
<div align="center" >
<h3><a href='register.php' style="color: black"><b>Register</b></a></h3>
<br>

</div>

</table>
</form>
<center><h3><a href='adminindex.php' style="color: black"><b>Admin Sign In ?</b></a></h3></center>

</body style="background-color: F5F1F0;">
<?php include 'footer.php';
?> 

</html>