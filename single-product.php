<?php session_start();
require_once("inc/conn.php");
include("inc/header.php");
 ?>

 <div class="row">
 	<div class="leftcolumn">

 		<?php 
 		$id = $_GET['id'];
 		$sql = "SELECT * FROM product WHERE id = {$id}";
 		$rs = mysqli_query($conn, $sql);
 		while ($row = mysqli_fetch_assoc($rs))
 		 { ?>
 		 	<div class="single-product">
            <h2 class="product-title" ><?php echo $row['ten']?></h2>
            <div class="product-image" style><img src="images/<?php echo $row['anh'] ?>" style="height: 100%" /></div>
            <p class="product-price"><?php echo $row['giatien']." VND "  ?></p>
         
          <form method="POST" action="cart.php" style="color: #C8A157;" >
          	Enter quantity:
          	<input type="number" name="sl" value="1"> <br>
          	<input  type="hidden" name="id" value="<?= $id ?>" >
          	<button type="submit" class="button" style="border: 1px solid #C8A157;background-color: #282828; color:#C8A157; margin-top:10px;  " >Buy</button>
          </form>

          <div class="product-content" style="">
          	<?php echo $row['noidung']; ?>
          </div>
          </div>
           <?php 
          }
         
           ?>
 		
 	</div>
  <?php include("inc/footer.php") ?>
 </div> 
 
