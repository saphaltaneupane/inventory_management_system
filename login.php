<?php
session_start();
include "dbConnection.php";
$username=$_POST['username'];
$password=$_POST['password'];
$q="SELECT * FROM `user` WHERE `username`='$username' and `password`='$password' and `status`='active'";
$result=mysqli_query($con,$q);
if($row=mysqli_fetch_array($result)){
    $_SESSION['username']=$row[1];
    header("location:menu.php");
}
else{
    echo "login failed";

}
?>