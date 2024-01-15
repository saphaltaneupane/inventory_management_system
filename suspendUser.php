<?php
include "menu.php";
$id=$_GET['id'];
$q="UPDATE `user` SET `status`='suspend' WHERE id=$id";
include "dbConnection.php";
$result=mysqli_query($con,$q);
echo "User suspended Successfully";

 ?>