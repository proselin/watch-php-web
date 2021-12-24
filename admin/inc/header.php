<?php
session_start();// khoi tao session
if (!empty($_SESSION['user'])){
  

}else{
  header('location:login.php');// dieu huong toi trang login.php
  die;
}
 ?> 

 <!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width">
  <title>test! </title>
  <link rel="stylesheet" type="text/css" href="asset/admin.css">
</head>
<body>

<div class="header">
  <h1>MANAGEMENT</h1>
 <marquee >   </marquee> 
</div>
<div class="column">
	<div class="leftcolumn">
		<div class="topnav">
			<a href="index.php">Product Management</a>
			<a href="themsp.php">Add Product</a>
			<a href="logout.php">Log Out</a>

		<!-- End Navigation -->
		</div>
	</div>
<!-- navigation -->
<!-- END navigation -->


