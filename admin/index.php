<?php
include('../inc/conn.php');
if ($_SERVER['REQUEST_METHOD'] == 'GET' && (!empty($_GET['idxoa'])))
{
	$idxoa = $_GET['idxoa'];
	$sql = "DELETE from product WHERE id= {$idxoa} limit 1";
	if ( mysqli_query($conn, $sql)){
		echo "Delete successful".$idxoa;
		

	}else {
		echo "Fail ". mysqli_error($conn);

	}
} 
include('inc/header.php');
include('listsp.php');
include('inc/footer.php'); 
?>

 