<?php session_start();
require_once("inc/conn.php");
include("inc/header.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST')
 {
	
	$id = $_POST['id'];

	if(empty($_SESSION['cart'][$id]))
	{
		$q = mysqli_query( $conn, "SELECT * FROM product WHERE id= {$id}");
		$product = mysqli_fetch_assoc($q);

		$_SESSION['cart'][$id] = $product;
		$_SESSION['cart'][$id]['sl'] = $_POST['sl'];
	}
	else
	{
		$slmoi = $_SESSION['cart'][$id]['sl'] + $_POST['sl'];
		$_SESSION['cart'][$id]['sl'] = $slmoi;
	}
}
 ?>
  <div class="row">
 	<link rel="stylesheet" type="text/css" href="css/cart.css">
 	<div class="leftcolumn">
 		<h3 style="text-align: center;" class="title">Cart</h3>
 		<?php
 		if (!empty($_SESSION['cart']))
 		foreach ($_SESSION['cart'] as $item) :
 		 ?>
 		 <a href="single-product.php?id=<?php echo $item['id']?>" class="product">
 		 	<h2 class="product-title"><?php echo $item['ten'] ?></h2>
 		 	<div class="product-image"><img src="images/<?php echo $item['anh'] ?>" /></div>
 		 	<p class="product-price"><?php echo $item['giatien'] ."VND" ?></p>
 		 		<p class="sl">Quantity: <?php echo $item['sl'] ?></p>
 		 </a>
 		 <?php
 		 endforeach;
 		 else{
 		 echo "Cart is empty!" ;
 		  ?>
 		  <div id="total" class="clearfix">
 		  	<?php
 		  	$tong = 0;
 		  	foreach( $_SESSION['cart'] as $item ){
 		  		$tong += $item['sl'] * $item['giatien'];
 		  	} 
 		  	 ?>
 		  	 <h3>Total: <?php echo number_format($tong) ?> VND</h3>
 		  </div> 
 	</div>
 	<?php include ("inc/footer.php"); ?>
 </div>

