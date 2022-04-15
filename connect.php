<?php 
$server = "localhost";
$username = "root";
$password = "";
$db_name = "registration";

$connect = mysqli_connect($server,$username,$password,$db_name);

if(!$connect){

	die("Failed to connect: " .mysql_error());
}


?>