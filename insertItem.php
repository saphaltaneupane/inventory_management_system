<?php 
$itemName= $_POST['itemName'];
$price= $_POST['price'];
$photo= $_POST['photo'];
$remarks= $_POST['remarks'];
$stock= 0;
$query="INSERT INTO `item`( `itemName`, `price`, `stock`, `photo`, `remarks`) VALUES ('$itemName','$price','$stock','$photo','$remarks')";
include "dbConnection.php";
$result=mysqli_query($con,$query);
include "menu.php";
echo "data inserted successfully";


?>