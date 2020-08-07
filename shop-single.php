<?php

 session_start();
 require_once("include/db-connect.php");
 require_once("function/functions.php");
 
add_to_cart();

if(isset($_GET['pro_id'])){

  $pro_id=$_GET['pro_id']; //geting pro id 
  
  $get_produt="SELECT * FROM products WHERE p_id='$pro_id'";
  $run_product=mysqli_query($conn,$get_produt);
  
  $row_p=mysqli_fetch_array($run_product);
  
 
    $pp_cat_id=$row_p['p_cat_id'];
    $p_title=$row_p['p_title']; 
    $c_id=$row_p['cat_id'];
    $p_price=$row_p['p_price'];
    $p_desc=$row_p['p_description'];
    $p_img1=$row_p['p_img1'];
   // $p_img1=$row_p['p_img1'];
   // $p_img3=$row_p['p_img3'];

   // $get_p_cat="SELECT * FROM p_categories WHERE p_cat_id='$p_cat_id'";
    //$run_p_cat=mysql_query($conn,$get_p_cat);
    //$row_p_cat=mysqli_fetch_array($run_p_cat);

    //$p_cat_id=$row_p_cat['p_cat_id'];
    //$p_cat_id=$row_p_cat['p_cat_title'];
    //$p_cat_id=$row_p_cat['p_cat_desc'];
 
}


  
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ShopMax &mdash; Colorlib e-Commerce Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">
    

   
  <?php require_once("include/navbar.php"); ?>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <a href="shop.php">Shop</a> <span class="mx-2 mb-0">/</span> <strong class="text-black"><?php echo $p_title; ?></strong></div>
        </div>
      </div>
    </div>  

      

 <form action="shop-single.php?add_cart=<?php echo $pro_id ?>" method="POST">
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="item-entry">
              <a href="#" class="product-item md-height bg-gray d-block">
                <img src="admin/index_include/product_images/<?php echo $p_img1 ?>" alt="Image" class="img-fluid">
              </a>
              
            </div>

          </div>


          <div class="col-md-6">
            <h2 class="text-black"><?php echo $p_title; ?></h2>
            <p><?php echo $p_desc; ?></p>
           <!-- <p class="mb-4">Ex numquam veritatis debitis minima quo error quam eos dolorum quidem perferendis. Quos repellat dignissimos minus, eveniet nam voluptatibus molestias omnis reiciendis perspiciatis illum hic magni iste, velit aperiam quis.</p> -->
           
            <p><strong class="text-primary h4"><?php echo $p_price;  ?></strong></p>
            
            <div class="mb-1 d-flex">
              <label for="option-sm" class="d-flex mr-3 mb-3">
                <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-sm" name="sizes" value="small"></span> <span class="d-inline-block text-black">Small</span>
              </label>
              <label for="option-md" class="d-flex mr-3 mb-3">
                <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-md" name="sizes" value="medium"></span> <span class="d-inline-block text-black">Medium</span>
              </label>
              <label for="option-lg" class="d-flex mr-3 mb-3">
                <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-lg" name="sizes" value="large"></span> <span class="d-inline-block text-black">Large</span>
              </label>
              <label for="option-xl" class="d-flex mr-3 mb-3">
                <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-xl" name="sizes" value="xl"></span> <span class="d-inline-block text-black"> Extra Large</span>
              </label>              
              <label for="option-xxl" class="d-flex mr-3 mb-3">
                <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-sm" name="sizes" value="xxl"></span> <span class="d-inline-block text-black">XX Large</span>
              </label>

            </div>

           
            <div class="mb-5">
              <div class="input-group mb-3" style="max-width: 120px;">
              <div class="input-group-prepend">
                <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
              </div>
              <input type="text" class="form-control text-center" name="p_qty" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
              <div class="input-group-append">
                <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
              </div>
            </div>

            </div>
            <button class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary" type="submit">Add To Cart
            <!--<p><a href="shop-single.php?add_cart=<?php// echo $pro_id ?>" >Add To Cart</a></p> -->
            </button>
          </form>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section block-3 site-blocks-2">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 site-section-heading text-center pt-4">
            <h2>Featured Products</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-3">
            <div class="nonloop-block-3 owl-carousel">

               <?php
                    $get_product="SELECT * FROM products WHERE cat_id='$c_id' order by 1 LIMIT 0,12 ";
                                $run_product=mysqli_query($conn,$get_product);
                                  while ($row_product=mysqli_fetch_array($run_product)){
                                  
                                    $pro_id=$row_product['p_id'];
                                    $pro_cat_id=$row_product['p_cat_id'];
                                    $cat_id=$row_product['cat_id'];
                                    $date=$row_product['date'];
                                    $p_title=$row_product['p_title'];
                                    $p_img1=$row_product['p_img1'];
                                    ///$p_img2=$row_product['p_img2'];
                                    ///$p_img3=$row_product['p_img3'];
                                    $p_price=$row_product['p_price'];
                                    $p_keyword=$row_product['p_keyword'];
                                    $p_description=$row_product['p_description'];

                                    echo "<div class='item'>
                <div class='item-entry'>
                  <a href='shop-single.php?pro_id=$pro_id' class='product-item md-height bg-gray d-block'>
                    <img src='admin/index_include/product_images/$p_img1' alt='Image' class='img-fluid'>
                  </a>
                  <h2 class='item-title'><a href='shop-single.php?pro_id=$pro_id'>$p_title</a></h2>
                  <strong class='item-price'>Rs. $p_price <del></del></strong>
                  
                </div>
              </div>";

}
?>


              <!---
              <div class="item">
                <div class="item-entry">
                  <a href="#" class="product-item md-height bg-gray d-block">
                    <img src="images/model_1.png" alt="Image" class="img-fluid">
                  </a>
                  <h2 class="item-title"><a href="#">Smooth Cloth</a></h2>
                  <strong class="item-price"><del>$46.00</del> $28.00</strong>
                  <div class="star-rating">
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                  </div>
                </div>
              </div>

              <div class="item">
                <div class="item-entry">
                  <a href="#" class="product-item md-height bg-gray d-block">
                    <img src="images/prod_3.png" alt="Image" class="img-fluid">
                  </a>
                  <h2 class="item-title"><a href="#">Blue Shoe High Heels</a></h2>
                  <strong class="item-price"><del>$46.00</del> $28.00</strong>

                  <div class="star-rating">
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="item-entry">
                  <a href="#" class="product-item md-height bg-gray d-block">
                    <img src="images/model_5.png" alt="Image" class="img-fluid">
                  </a>
                  <h2 class="item-title"><a href="#">Denim Jacket</a></h2>
                  <strong class="item-price"><del>$46.00</del> $28.00</strong>

                  <div class="star-rating">
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                  </div>

                </div>
              </div>
              <div class="item">
                <div class="item-entry">
                  <a href="#" class="product-item md-height bg-gray d-block">
                    <img src="images/prod_1.png" alt="Image" class="img-fluid">
                  </a>
                  <h2 class="item-title"><a href="#">Leather Green Bag</a></h2>
                  <strong class="item-price"><del>$46.00</del> $28.00</strong>
                  <div class="star-rating">
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="item-entry">
                  <a href="#" class="product-item md-height bg-gray d-block">
                    <img src="images/model_7.png" alt="Image" class="img-fluid">
                  </a>
                  <h2 class="item-title"><a href="#">Yellow Jacket</a></h2>
                  <strong class="item-price">$58.00</strong>
                  <div class="star-rating">
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                  </div>
                </div>
              </div>-->

            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include("include/footer.php"); ?>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>