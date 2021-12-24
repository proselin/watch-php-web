<?php 
$servername= "localhost";
$username= "root";
$pass="";
$dbname= "flower";
$conn = mysqli_connect($servername,$username,$pass,$dbname);
if(!$conn){
	die("Connection fail ").mysqli_connect_error();
}


 ?>