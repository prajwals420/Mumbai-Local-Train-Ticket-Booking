<?php
$hostname  = 'localhost';
$username = 'root';
$password='';
$dbname = 'train';
$connect =  mysqli_connect($hostname , $username , $password ,$dbname) or die("Error Connecting");
?>