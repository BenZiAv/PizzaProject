<?php
$sname= "localhost";
$uname= "root";
$password = "";

$db_name = "pizzaorder";

$con = mysqli_connect($sname,$uname,$password,$db_name);
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>