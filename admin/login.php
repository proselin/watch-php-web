<?php session_start();//khoi tao session
 if ($_SERVER['REQUEST_METHOD'] == 'POST'){
 	include('../inc/conn.php');
 	$username = $_POST['name'];
 	$password = $_POST['pass'];

 	$user = mysqli_fetch_assoc( mysqli_query($conn, "SELECT * FROM user WHERE username ='{$username}' and password='{$password}'") );

 	if($user){
 		$_SESSION['user'] = $username['username'];
 		header('location:index.php');
 		die;
 	}else{
 		echo " wrong information ";

 	}

 }

 ?>
 <!DOCTYPE html>
<html>
<head>
  <title>Login form</title>
  <link rel="stylesheet" type="text/css" href="asset/login.css">

</head>
<body>
<h1 style="text-align: center;size: 20px;margin-top: 20px">Login vao he thong</h1>
<div class="login">
<form method="POST" class="login-form" style="background-color: lightblue; border-radius: 10px;">
	<div style="padding: 20px;border-radius: 10px">
		<label style="">UserName</label>
  <input type="text" name="name" style="float: right;font-family: cursive;padding: 5px"><br>
</div>
  <div style="border-radius: 10px;padding: 20px;font-family: cursive; "> 
  	<label>Password</label>
  <input type="Password" name="pass" class="input-box" style="float: right;font-family: cursive; padding: 5px"><br>
</div>
 
  <button type="submit" style="text-align: center; border-radius: 5px; padding: 20px; margin-left: 20px;">login</button> 
</div>

</form>
</body>
</html>