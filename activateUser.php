<?php
include "menu.php";
$id=$_GET['id'];
$q="UPDATE `user` SET `status`='active' WHERE id=$id";
include "dbConnection.php";
$result=mysqli_query($con,$q);
echo "User activated  Successfully";

 ?>