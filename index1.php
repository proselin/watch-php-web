
<?php require_once("inc/conn.php") ?>
 <!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width">
  <title>test! </title>
  <link rel="stylesheet" type="text/css" href="main.css">
</head>
<style type="text/css">
  .w1{
    width: 100%;
  }
         .footer1{
   background: #222222;
   padding: 50px;
   
}

.footer1 .footer_menu{

  display: flex;
  margin-bottom: 25px;
  justify-content: space-between;
}

.footer1 .footer_menu .title{
  margin-bottom: 10px;
  color: #adadad;
}

.footer1 .footer_menu ul li a{
  display: block;
  margin-bottom: 6px;
  color: #fff;
}

.footer 1.footer_menu ul li a:hover{
  text-decoration: underline;
}
@media (max-width:768px) {

  .footer1 .footer_menu{
    flex-direction: column;
    width: 220px;
    margin: 0 auto 25px;
  }
  .footer1 .footer_menu div{
    margin: 10px 0;
  }
  .cart{
  width: 100%;
  }
  .home img{
    max-width: 100%;
   height: auto;
  }
  .search{
    float: none;
    display: block;
    
  }
  .search input {
    width: 100%;
    float: none;
    text-align: center;

  }
  }
</style>
<body>

<div class="header" >

  <img src="images/border/logo_BTEC.png">
  <h1 style="float: right;">WatchShop</h1>
 <marquee> W  E  L  C  O  M  E</marquee> 
</div>


<!-- navigation -->
<div class="topnav" style="width: 100%">
  <a href="index.php">Home </a>
  <a href="product.php">Product</a>
  <a href="https://www.rolex.com/vi">News</a>
  <a href="#cont1">Contact</a>
  <a href="cart.php">Cart</a>
  <div class="search" style="float:right; ">
      <form id="search-form" method="GET" action="search.php">
          <input  type="text" name="s" placeholder="Enter something"  />
          <button type="submit"  >Search</button>
      </form>
  </div>
</div>


 <div class="row" >
  <div class="home"> 
      <img src="images/border/ssda.jpg" style="max-width: 50%;">
      <p> "Better three hours too soon than a minute too late." </p>
      <p> - William Shakespeare - </p>
    </div>
     <h2 style="text-align: center; color:#C8A157; padding: 50px 50px; ">Product</h2>
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
          <a href="single-product.php?id=<?php echo $row['id']?>" class="product" style="width:31,5% ">
            <h2 class="product-title"><?php echo $row['ten'] ?></h2>
            <div class="product-image"><img src="images/<?php echo $row['anh'] ?>" /></div>
            <p class="product-price"><?php echo $row['giatien'] . " vnd "  ?></p>
          </a>
    <?php 

        }//end while 

      }//check so hang tra ve > 0 
?>
   <div style="border:2px solid #C8A157 "></div> 
  
</div>
<div style="width: 100%; margin-bottom: 100px; padding: 20px; text-align: center;">
  <?php  include('inc/pagination.php')?>
    
  </div>

  
  

<div class="homefooter" style="width: 100%;">

       <div class="cardhome" style="width: 100%">
      <h3>Popular Post</h3>
      <div class="Popular">
         <h2 class="product-title" >ORIENT STAR XL0921</h2>
        <div class="product-image" ><img src="images/anh10.png "> </div>
      </div>
    </div>

        <div class="cardhome" style="width: 100%;">
       <h3 id="cont1">Contact me at</h3>
       <h4>Gmail: quochung9401@gmail.com</a></h4>
       <h4>Facebook: <a href="https://www.facebook.com/levanda.fv.94/">Nguyễn Quốc Hưng</a></h4>
       <h4>Address: <p>No.42A, 2/16/18 Alley, Hoang Liet Ward, Hoang Mai district, Hanoi</p> </h4>
        </div>


    </div>   
  </div>
<div class="w1 " >
  <div class="footer1">
        <div class="footer_menu">
           <div class="col_1">
              <div class="title">
                Company  
              </div>  
              <ul>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Blog</a></li>
              </ul>
           </div>
           <div class="col_2">
             <div class="title">
                Help & Support 
              </div>  
              <ul>
                <li><a href="#">Support Center</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Call Center</a></li>
                <li><a href="#">Terms & Conditions</a></li>
              </ul>
           </div>
           <div class="col_3">
             <div class="title">
                Services  
              </div>  
              <ul>
                <li><a href="#">Business Consultancy</a></li>
                <li><a href="#">Digital Marketing</a></li>
                <li><a href="#">Market Analysis</a></li>
                <li><a href="#">Web Development</a></li>
              </ul>
           </div>
           <div class="col_4">
             <div class="title">
                Solutions  
              </div>  
              <ul>
                <li><a href="#">Facilities Services</a></li>
                <li><a href="#">Workplace Staffing</a></li>
                <li><a href="#">Project Management</a></li>
                <li><a href="#">Wordpress Management</a></li>
              </ul>
          </div>
        </div>
      </div>
    </div>
  </body>
  </html>


 <!-- END left column -->
 