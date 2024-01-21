<?php
$server="localhost";
$username="root";
$password="";
$db_name="bca_4th";
try{
    $con=new PDO("mysql:host=$server;dbname=$db_name",$username,$password);

}
catch(Exception $e){
die($e->getMessage());

}
?>