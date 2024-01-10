<?php
$server="localhost";
$username="root";
$password="";
$db_name="bca_4th";
$con=mysqli_connect($server,$username,$password);
$db=mysqli_select_db($con,$db_name);
?>