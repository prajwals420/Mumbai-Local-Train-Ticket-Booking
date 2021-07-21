<?php
include 'connect.php' ;


session_start();
if ($_SESSION['log'] == '')
{
    header("location:index.php");
}
include 'header.php';
?>
<style>
	#font{
      font-family: Montserrat, sans-serif;
     font-size: 18px !important;

}</style>

 <link rel='stylesheet' href='index.css'>


           
           
           
           <script type="text/javascript">
        
           </script>
          

</head>
 <?php 
   $result = mysqli_query($connect , "SELECT * FROM `transactions` WHERE `email`='".$_SESSION['email']."' ORDER BY `T_No.` DESC LIMIT 1");
  while ($row = mysqli_fetch_assoc($result)): 
    $tno = $row["T_No."];
    $_SESSION['tno']= $tno ;
  ?>

<body style="background-color: F5F1F0;">
	 <h2 align="center"><b><img src="https://img.icons8.com/ios-filled/50/000000/summary-list.png"/> Booking Summary</b></h2>
           <br>


				<table class="table table-striped" id="font">

				<tr>
					<th>Booking ID</th>
					<td><?php echo $row['T_No.']; ?></td>
				</tr>
			
				<tr>
					<th>Name</th>
					<td><?php echo $_SESSION['name'] ?></td>
				</tr>

				<tr>
					<th>Email</th>
					<td><?php echo $_SESSION['email'] ?></td>
				</tr>

				

				<tr>
					<th>Source Station</th>
					<td><?php echo $_SESSION['source'] ?></td>
				</tr>

				<tr>
					<th>Destination</th>
					<td><?php echo $_SESSION['dest'] ?></td>
				</tr>

				<tr>
					<th>Route</th>
					<td><?php echo $_SESSION['Route'] ?></td>
				</tr>

				<tr>
					<th>Amount</th>
					<td>₹&nbsp&nbsp<?php echo $_SESSION['final'] ?></td>
				</tr>

				
			</table>
	


<table align = "Center">
<tr>
<td>
<div><td><a  href="print.php?pid='<?php echo $_SESSION['tno']?>' " target="_blank" ><button style="background-color: black ; border-color:black  "><h3><span style="color:white;"> Print Ticket<br> </span></h3></button></a></td></td>
</td>
</tr>
</body style="background-color: F5F1F0;">
</div>
 <?php endwhile; ?>


 </html>

