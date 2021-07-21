<?php
include 'connect.php' ;
session_start();
if ($_SESSION['log'] == '')
{
    header("location:sindex.php");
}
include 'header.php';
?>

                        <h2><center><img src="https://img.icons8.com/dusk/50/000000/checked-user-male.png"/><b>USER PROFILE DETAILS</center></b></h2>

           </script>
           <br>


				<table class="table table-striped">

			
				<tr>
					<th>Name</th>
					<td><?php echo $_SESSION['name'] ?></td>
				</tr>

				<tr>
					<th>Email</th>
					<td><?php echo $_SESSION['email'] ?></td>
				</tr>

				

				<tr>
					<th>User Id</th>
					<td><?php echo $_SESSION['userid'] ?></td>
				</tr>

				<tr>
					<th>Gender</th>
					<td><?php echo $_SESSION['Gender'] ?></td>
				</tr>

				<tr>
					<th>Date of Birth</th>
					<td><?php echo $_SESSION['dob'] ?></td>
				</tr>
				<tr>
					<th>Contact Number</th>
					<td><?php echo $_SESSION['phone'] ?></td>
				</tr>

				
			</table>
			<?php include 'footer.php';
?> 

	