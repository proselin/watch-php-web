<!--luu y: Trang nay minh hoa day du, sau do cat ra thanh tung phan la file index-->
<!--luu y: Trang nay minh hoa day du, sau do cat ra thanh tung phan la file index-->
<?php
 require_once("inc/conn.php");
 ?>

<div class="row">
  <div class="leftcolumn">
   
    <?php
      // ?page=2 => $_GET['page'] = 3 => 
 
        if(!empty($_GET['page']))
        {
          $page=$_GET['page']-1;
        }
        else
        {
          $page =0;
        }

    //$page = !empty($_GET['page']) ? ($_GET['page'] - 1): 0 ; //lay page hien tai
      $product_per_page = 6; //1 trang 3 sp 
            $offset = $product_per_page * $page; //offset chinh la phan can bo qua 

      $sql = "SELECT * FROM product LIMIT $offset,$product_per_page"; 
      $rs = mysqli_query($conn, $sql);

      if( mysqli_num_rows($rs) > 0 ){
        while( $row = mysqli_fetch_assoc($rs) ){
      ?>
          <a href="single-product.php?id=<?php echo $row['id']?>" class="product">
            <h2 class="product-title"><?php echo $row['ten'] ?></h2>
            <div class="product-image"><img src="images/<?php echo $row['anh'] ?>" /></div>
            <p class="product-price"><?php echo $row['giatien'] . " vnd "  ?></p>
          </a>
    <?php 

        }//end while 

      }//check so hang tra ve > 0 
?>

 <?php  include('inc/pagination.php');?>
  </div>
 <!-- END left column -->

