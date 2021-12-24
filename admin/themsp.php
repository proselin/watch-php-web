<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	$tensp = $_POST['tensp'];
	$mota = $_POST['noidung'];
	$giasp = $_POST['giasp'];
	include("../inc/conn.php");
	$sql = "INSERT INTO product(ten, noidung, giatien) VALUES (?, ?, ?)";
	$stmt = mysqli_prepare($conn, $sql);
	mysqli_stmt_bind_param($stmt, "ssd", $tensp, $mota, $giasp);
//s:string, d double , i integer;
if (mysqli_stmt_execute($stmt)){
	echo " insert success!";
} else{
	echo " fail" . mysqli_error($conn);
}
}
include("inc/header.php")

?>

	</div>
<div class="rightcolumn">
<form class="form" method="post">
	<label>Enter name product</label>
	<input type="text" name="tensp">
	<label>Product price</label>
	<input type="text" name="giasp">
	<label>Description</label>
	<textarea name="noidung"></textarea>
	<label>image</label>
	<input type="file" name="anhsp">
	<input type="submit" name="submit" value="Add">
</form> 		
</div>
<?php include('inc/footer.php') ?>
	

