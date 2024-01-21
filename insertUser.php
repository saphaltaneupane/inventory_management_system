<?php 
sleep(2);
$username=$_POST['username'];
$password=$_POST['password'];
$status="pending";
// $query="INSERT INTO `user`( `username`, `password`, `status`) VALUES ('$username','$password','$status')";
$query="INSERT INTO `user`( `username`, `password`, `status`) VALUES (?,?,?)";
// include "dbConnection.php";
include "PDO/connection.php";
$stmt=$con->prepare($query);
$stmt->bindParam(1,$username);
$stmt->bindParam(2,$password);
$stmt->bindParam(3,$status);
$result=$stmt->execute();
// $result=mysqli_query($con,$query);
echo "data inserted successfully";
?>