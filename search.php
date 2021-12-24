<?php 
  require_once("inc/conn.php");
  include('inc/header.php');

  $timkiem = "";
 if(!empty($_GET['s']))
  {
    $timkiem = $_GET['s'];
  } 
?>

<div class="row">
  <div class="leftcolumn">
    
    <h3 class="title">Search Result: <?= $timkiem ?></h3>

    <?php 
      if( !empty($timkiem)){
        $rs = mysqli_query( $conn , "SELECT * FROM product WHERE ten LIKE '%{$timkiem}%'");
        while ( $row = mysqli_fetch_assoc( $rs)) {
        ?>
        <a href="single-product.php?id=<?php echo $row['id']?>" class="product">
          <h2 class="product-title"><?php echo $row['ten']?></h2>
          <div class="product-image"><img src="images/<?php echo $row['anh']?>"></div>
          <p class="product-price"><?php echo $row['giatien'] . "VND"?></p>
        </a>
    <?php
      }

    }
    ?>
  </div>
  <?php 
include("inc/footer.php") ?>
</div>
