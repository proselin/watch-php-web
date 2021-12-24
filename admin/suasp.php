<?php 
include("../inc/conn.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	# code...
	$id = $_GET['id'];
	$tensp = $_POST['ten'];
	$giasp = $_POST['giatien'];
	$mota = $_POST['noidung'];

	$file = $_FILES['anhsp'];
	if (!empty($file)) {
		# code...
		$tenFile = rand().$file['tmp_name'];
		if (move_uploaded_file($file['tmp_name'], "../images/".$tenfile)) {
			
			$sql = "UPDATE product SET anh = ? WHERE id = ?";
			$stmt = mysqli_prepare($conn, $sql);
			mysqli_stmt_bind_param($stmt, "sd", $tenfile, $id);
			echo "Image update success <br>";
		}
		else
		{
			echo "Image update error <br>";
		}
	}
	$sql = "UPDATE product SET ten=?, noidung=?, giatien=? WHERE id=?";
	$stmt = mysqli_prepare($conn, $sql);
	mysqli_stmt_bind_param($stmt, "ssdd", $tensp, $mota, $giasp, $id);
	if (mysqli_stmt_execute($stmt))
	 {
		# code...
		echo "Update successful";
	}
	else
	{
		echo "Error: ".mysqli_error($conn);
	}
}
$id = $_GET['id'];
$sql = mysqli_query($conn, "SELECT * FROM product WHERE id={$id}");
$product = mysqli_fetch_assoc($sql);
include("inc/header.php");
?>

	</div>
	<div class="rightcolumn">
		<h2>Update: <?= $product['id'] ?></h2>
	<form class="form" method="POST" enctype="multipart/form-data">
		Product Name: <input type="text" name="ten" value="<?= $product['ten'] ?>"><br>
		Product Price: <input type="text" name="giatien" value="<?= $product['giatien'] ?>"><br>
		Product Desc: <input type="text" name="noidung" value="<?= $product['noidung'] ?>"><br>
		Product Image: <input type="file" name="anhsp"><br>
	<input type="submit" name="submit" value="Update">
	</form>
	</div>
</div>

<?php 
include("inc/footer.php");
?>