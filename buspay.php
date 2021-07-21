<?php
include 'connect.php';
include 'head2.php';
session_start();
if ($_SESSION['log'] == '')
{
    header("location:index.php");
}
?>

<html>
<head>
  <style >
    .formm{
       font-family: Montserrat, sans-serif;
     font-size: 18px !important;
     
    }
  </style>
<link rel='stylesheet' href='index.css'>
<link rel="shortcut icon" href="logofig.jpg" />
<title> Registration Page </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body style="background-color: F5F1F0;">


  <div class="formm">
<h2 align="center"><b>Enter Payment Details :</b>  </h2>


<!--<center><img src="logohead.png" width='35%'></center> -->
<form method='post' action ='buspayaction.php' >
<table align="center">
<tr><td><h3>Card No.: </h3></td> <td colspan='2'><input type="Number" name="cno"  placeholder="1111-2222-3333-4444" maxlength='50'></td></tr>
<tr><td><h3>Name on Card: </h3></td> <td colspan='2'><input type="Text" name="name" placeholder="Prajwal N. Sutar" maxlength='50'></td></tr>
<tr><td><h3>Expiry Date : </h3></td> <td><input type="Number" name="Em" placeholder='MM' maxlength='2'></td>
<td><input type="Number" name="Ey" placeholder='YY' maxlength='2'></td></tr>
<tr><td><h3>CVV No: </td> </h3><td colspan='2'><input type="Password" name="Cvv" maxlength='3'></td></tr>
<tr><td><h3>PIN NO: </h3> </td> <td colspan='2'><input type="Password" name="Pin" maxlength='4'></td></tr>


<tr><td colspan='3'><center><button style="background-color:black ;  border-color:black" type='Submit' name='register_submit' >Complete Payment</Button></center></td></tr>
</table>
</form>
<br>
<br>


</div>
<?php include 'footer.php';
?> 


</html>