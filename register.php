<!--Registration Page-->


<?php     
include 'connect.php';                           
include 'head2.php'
?>



<html>
<head>
 <style >  .table{  font-family: Montserrat, sans-serif;}
</style>	
<link rel='stylesheet' href='index.css'>
<title> Registration Page </title>
</head>
<div><center><img src="https://img.icons8.com/bubbles/250/000000/add-user-male.png"/></center></div>
<div>
	<h2><center><b>User Registeration</center></b></h2>

<body style="background-color: F5F1F0;">
<form method='post' action ='register_insert.php' >
<table align="center" class="table">
<tr><td><h3>Name : </h3></td> <td colspan='2'><input type="Text" name="name" maxlength='50' required></td></tr>
<tr><td><h3>Email Id : </h3></td> <td colspan='2'><input type="email" name="email" maxlength='50' required></td></tr>
<tr><td><h3>Gender :</h3></td><td><br><input type="Radio" name="Gender" value="M">Male</td><td><br><input type="Radio" name="Gender" value="F" required>Female</td></tr>
<tr><td><h3>Date of Birth :</h3></td><td colspan='2'><input type="Text" name="dob" maxlength='50' placeholder='yyyy-mm-dd' required></td></tr>
<tr><td><h3>Password : </h3></td> <td  colspan='2'><input type="password" name="password" maxlength='50' required></td></td></tr>
<tr><td><h3>Contact No.</h3></td> <td  colspan='2'><input type="tel"  name="phone"  maxlength='10' required></td></td></tr>

<tr><td colspan='3'><center><button type='Submit'  style="background-color:black ; border-color:black" name='register_submit' required >Submit</Button></center></td></tr>
</div>
</table>
</form>
<div align="center" >
<h3><a href='sindex.php' style="color: black">Registered?  Sign In !</a></h3>
</div>
</body style="background-color: F5F1F0;">



<?php include 'footer.php';
?> 

</html>