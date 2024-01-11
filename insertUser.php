<?php 
sleep(1);
$username=$_POST['username'];
$password=$_POST['password'];
$status="pending";
$query="INSERT INTO `user`( `username`, `password`, `status`) VALUES ('$username','$password','$status')";
include "dbConnection.php";
$result=mysqli_query($con,$query);
echo "data inserted successfully";
?>