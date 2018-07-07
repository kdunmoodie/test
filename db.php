<?php


$dbServername="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="DB_users";


$con=mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName) or die("Error " . mysqli_error($con));

?>
