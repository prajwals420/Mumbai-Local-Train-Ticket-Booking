<?php
include 'head2.php';

session_start();
?>
<html>
<head>
<link rel='stylesheet' href='index.css'>
 <link rel="shortcut icon" href="logofig.jpg" />
</head>
<body style="background-color: F5F1F0;">
<?php
session_destroy();
echo '<center><h2>Thank You for using M-Ticket Booking Application<h2></center><br>';
echo '<center><table><tr><td><A href="index.php"><button style="background-color:black; border-color:black">Sign in ! &nbsp&nbspAgain</button></a></td></tr></table></center>';
?>
</body style="background-color: F5F1F0;">
</html>