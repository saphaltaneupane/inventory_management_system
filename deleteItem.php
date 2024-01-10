<?php
$id=$_GET['id'];

$q= "delete from item where id=$id";
include "menu.php";
include "dbConnection.php";
$result=mysqli_query($con,$q);
echo "data deleted Success";
?>