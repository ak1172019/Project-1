<?php 

      session_start();
      require_once("include/db-connect.php");
      require_once("function/functions.php"); 

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
     <link rel="stylesheet" href="css/mystyle.css">
    
  </head>
  <body>

    <div class="site-wrap">
  
      <?php require_once("include/navbar.php"); ?>

    <div class="site-blocks-cover" data-aos="fade">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto order-md-2 align-self-start">
            <div class="site-block-cover-content">
            <h2 class="sub-title">#New Summer Collection 2019</h2>
            <h1>Arrivals Sales</h1>
            <p><a href="shop.php" class="btn btn-black rounded-0">Shop Now</a></p>
            </div>
          </div>
          <div class="col-md-6 order-1 align-self-end">
            <img src="images/model_3.png" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="title-section mb-5">
          <h2 class="text-uppercase"><span class="d-block">Discover</span> The Collections</h2>
        </div>
        <div class="row align-items-stretch">
          <div class="col-lg-8">
            <div class="product-item sm-height full-height bg-gray">
             <a href="shop.php?cat_id=2" class="product-category">Women <span class="text-danger">
                <?php $check_w_product="SELECT p_id FROM products WHERE cat_id=2";
                      $run_wp=mysqli_query($conn,$check_w_product);
                    echo  $num_rows=mysqli_num_rows($run_wp);

                     ?> items
                </span></a>
              <img src="images/model_4.png" alt="Image" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-4">
            <div class="product-item sm-height bg-gray mb-4">
              <a href="shop.php?cat_id=1" class="product-category">Men <span class="text-danger">
                <?php $check_m_product="SELECT p_id FROM products WHERE cat_id=1";
                      $run_mp=mysqli_query($conn,$check_m_product);
                    echo  $num_rows=mysqli_num_rows($run_mp);

                     ?> items
                </span></a>
              <img src="images/model_5.png" alt="Image" class="img-fluid">
            </div>

            <div class="product-item sm-height bg-gray">
               <a href="shop.php?pcat_id=3" class="product-category">Shoes <span class="text-danger">
                <?php $check_shoe_p="SELECT p_id FROM products WHERE p_cat_id=3";
                      $run_sp=mysqli_query($conn,$check_shoe_p);
                    echo  $num_rows=mysqli_num_rows($run_sp);
                     ?> items</span></a>
              <img src="images/model_6.png" alt="Image" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </div>


    
    <div class="site-section">
      <div class="container">
        <div class="row">

          <div class="title-section mb-5 col-12">
            <h2 class="text-uppercase">Popular Products</h2>
          </div>
        </div>
        
          
        <div class="row">

          <?php 
                  get_pro();
                  
           ?>
          <!---
          <div class="col-lg-4 col-md-6 item-entry mb-4">
            <a href="#" class="product-item md-height bg-gray d-block">
              <img src="images/prod_2.png" alt="Image" class="img-fluid">
            </a>
            <h2 class="item-title"><a href="#">Gray Shoe</a></h2>
            <strong class="item-price">$20.00</strong>
          </div>
          <div class="col-lg-4 col-md-6 item-entry mb-4">
            <a href="#" class="product-item md-height bg-gray d-block">
              <img src="images/prod_3.png" alt="Image" class="img-fluid">
            </a>
            <h2 class="item-title"><a href="#">Blue Shoe High Heels</a></h2>
            <strong class="item-price"><del>$46.00</del> $28.00</strong>
          </div>

          <div class="col-lg-4 col-md-6 item-entry mb-4">
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
          <div class="col-lg-4 col-md-6 item-entry mb-4">
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

          <div class="col-lg-4 col-md-6 item-entry mb-4">
            <a href="#" class="product-item md-height bg-gray d-block">
              <img src="images/model_1.png" alt="Image" class="img-fluid">
            </a>
            <h2 class="item-title"><a href="#">Smooth Cloth</a></h2>
            <strong class="item-price"><del>$46.00</del> $28.00</strong>
          </div>
          <div class="col-lg-4 col-md-6 item-entry mb-4">
            <a href="#" class="product-item md-height bg-gray d-block">
              <img src="images/model_7.png" alt="Image" class="img-fluid">
            </a>
            <h2 class="item-title"><a href="#">Yellow Jacket</a></h2>
            <strong class="item-price">$58.00</strong>
          </div>
                  --->
        </div> 
      </div>
    </div>
<!--- MOST RATED START
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="title-section text-center mb-5 col-12">
            <h2 class="text-uppercase">Most Rated</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-3">
            <div class="nonloop-block-3 owl-carousel">
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
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>


  MOST RATED END --->

    <div class="site-blocks-cover inner-page py-5" data-aos="fade">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto order-md-2 align-self-start">
            <div class="site-block-cover-content">
            <h2 class="sub-title">#New Summer Collection 2019</h2>
            <h1>New Shoes</h1>
            <p><a href="shop.php?pcat_id=3" class="btn btn-black rounded-0">Shop Now</a></p>
            </div>
          </div>
          <div class="col-md-6 order-1 align-self-end">
            <img src="images/model_6.png" alt="Image" class="img-fluid">
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