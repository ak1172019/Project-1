<?php
session_start();


 require_once("include/db-connect.php");
 require_once("function/functions.php"); 

   
   add_to_fav();
     


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
    
    <div class="site-blocks-cover inner-page" data-aos="fade">
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
            <img src="images/model_4.png" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>

    <div class="custom-border-bottom py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span><a href="shop.php"><strong class="text-black">Shop</strong></a> </div>
        </div>
      </div>
    </div>


    <div class="site-section">
      <div class="container">

        <div class="row mb-5"><!--row container-mb-5  start  here -->
           <div class="col-md-9 order-1"> <!--row container-col-md9 order1  start  here -->


                <?php  if (!isset($_GET['pcat_id'])) {
                          if(!isset($_GET['cat_id'])){ ?>

            <div class="row align">
              <div class="col-md-12 mb-5">

                

                            <?php
                         echo "   <div class='float-md-left'><h2 class='text-black h5'>Shop All</h2></div>";
                ?>
  <div class="d-flex"><!--
                  <div class="dropdown mr-1 ml-md-auto">
                    <button type="button" class="btn btn-white btn-sm dropdown-toggle px-4" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Latest
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                       
                        <?php   /*
                             $get_cats="SELECT * FROM categories" ;
                             $run_cats=mysqli_query($conn,$get_cats);
                             
                              while($rows=mysqli_fetch_array($run_cats)) {

                              $c_id=$rows['cat_id'];
                              $c_title=$rows['cat_title'];
                              echo "<span class='dropdown-item' href='shop.php?c_id=$c_id'>$c_title</span>";  

                             } */?>
                     
                      <a class="dropdown-item" href="#">Men</a>
                      <a class="dropdown-item" href="#">Women</a>
                      <a class="dropdown-item" href="#">Children</a> 

                    </div>
                  </div>

                  <div class="btn-group">
                    <button type="button" class="btn btn-white btn-sm dropdown-toggle px-4" id="dropdownMenuReference" data-toggle="dropdown">Reference</button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                      <a class="dropdown-item" href="#">Relevance</a>
                      <a class="dropdown-item" href="#">Name, A to Z</a>
                      <a class="dropdown-item" href="#">Name, Z to A</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Price, low to high</a>
                      <a class="dropdown-item" href="#">Price, high to low</a>
                    </div>
                  </div>D-flex end here --->
                </div>

              </div>
            </div>  
                    <?php      }
                  
                }  ?>

            

            <!--<div class="row mb-5">row product print mb-5 start -->

              

<!---           <div class="col-lg-6 col-md-6 item-entry mb-4">
                <a href="#" class="product-item md-height bg-gray d-block">
                  <img src="images/prod_2.png" alt="Image" class="img-fluid">
                </a>
                <h2 class="item-title"><a href="#">Gray Shoe</a></h2>
                <strong class="item-price">$20.00</strong>
              </div>
              <div class="col-lg-6 col-md-6 item-entry mb-4">
                <a href="#" class="product-item md-height bg-gray d-block">
                  <img src="images/prod_3.png" alt="Image" class="img-fluid">
                </a>
                <h2 class="item-title"><a href="#">Blue Shoe High Heels</a></h2>
                <strong class="item-price"><del>$46.00</del> $28.00</strong>
              </div>

              <div class="col-lg-6 col-md-6 item-entry mb-4">
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
              <div class="col-lg-6 col-md-6 item-entry mb-4">
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

              <div class="col-lg-6 col-md-6 item-entry mb-4">
                <a href="#" class="product-item md-height bg-gray d-block">
                  <img src="images/model_1.png" alt="Image" class="img-fluid">
                </a>
                <h2 class="item-title"><a href="#">Smooth Cloth</a></h2>
                <strong class="item-price"><del>$46.00</del> $28.00</strong>
              </div>
              <div class="col-lg-6 col-md-6 item-entry mb-4">
                <a href="#" class="product-item md-height bg-gray d-block">
                  <img src="images/model_7.png" alt="Image" class="img-fluid">
                </a>
                <h2 class="item-title"><a href="#">Yellow Jacket</a></h2>
                <strong class="item-price">$58.00</strong>
              </div>
              <div class="col-lg-6 col-md-6 item-entry mb-4">
                <a href="#" class="product-item md-height bg-gray d-block">
                  <img src="images/prod_2.png" alt="Image" class="img-fluid">
                </a>
                <h2 class="item-title"><a href="#">Gray Shoe</a></h2>
                <strong class="item-price">$20.00</strong>
              </div>
              <div class="col-lg-6 col-md-6 item-entry mb-4">
                <a href="#" class="product-item md-height bg-gray d-block">
                  <img src="images/prod_3.png" alt="Image" class="img-fluid">
                </a>
                <h2 class="item-title"><a href="#">Blue Shoe High Heels</a></h2>
                <strong class="item-price"><del>$46.00</del> $28.00</strong>
              </div>

              <div class="col-lg-6 col-md-6 item-entry mb-4">
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

              <div class="col-lg-6 col-md-6 item-entry mb-4">
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
              </div>  --->

               <!-- <div class="col-lg-6 col-md-6 item-entry mb-4">
                <a href="#" class="product-item md-height bg-gray d-block">
                  <img src="images/model_1.png" alt="Image" class="img-fluid">
                </a>
                <h2 class="item-title"><a href="#">Smooth Cloth</a></h2>
                <strong class="item-price"><del>$46.00</del> $28.00</strong>
                </div>

                <div class="col-lg-6 col-md-6 item-entry mb-4">
                <a href="#" class="product-item md-height bg-gray d-block">
                  <img src="images/model_7.png" alt="Image" class="img-fluid">
                </a>
                <h2 class="item-title"><a href="#">Yellow Jacket</a></h2>
                <strong class="item-price">$58.00</strong>
                </div>-->

                
                     
              <?php 
                    get_pcat_p(); //product catogoreis wise product print
                    get_cat_p(); //catogoreis wise product print
              ?> 


            <!--condtion for Shop all-->

                  <?php  if (!isset($_GET['pcat_id'])) {
                          if(!isset($_GET['cat_id'])){ ?>
                        
        <div class='row mb-5'>
                
                          <?php
                            $per_page=6;
                                if(isset($_GET['page'])){
                                  $page=$_GET['page'];
                                  }else{
                                  $page=1;
                                }

                                $start_form=($page-1) * $per_page;

                                $get_product="SELECT * FROM products order by 1 DESC LIMIT $start_form, $per_page";
                                $run_product=mysqli_query($conn,$get_product);

                                  while ($row_p=mysqli_fetch_array($run_product)){
                                  
                                    $pro_id=$row_p['p_id'];
                                    $pro_cat_id=$row_p['p_cat_id'];
                                    $cat_id=$row_p['cat_id'];
                                    $date=$row_p['date'];
                                    $p_title=$row_p['p_title'];
                                    $p_img1=$row_p['p_img1'];
                                    ///$p_img2=$row_p['p_img2'];
                                    ///$p_img3=$row_p['p_img3'];
                                    $p_price=$row_p['p_price'];
                                    $p_keyword=$row_p['p_keyword'];
                                    $p_description=$row_p['p_description'];

                                    echo "
                <div class='col-lg-6 col-md-6 item-entry mb-4'>
                <a href='shop-single.php?pro_id=$pro_id' class='product-item md-height bg-gray d-block'>
                  <img src='admin/index_include/product_images/$p_img1' alt='Image' class='img-fluid'>
                </a> 
                <h2 class='item-title'><a href='shop-single.php?pro_id=$pro_id'>$p_title</a> <a href='shop.php?add_fav=$pro_id'><span class='icon-heart-o text-primary' data-toggle='tooltip' title='Add To Favourite'></span></a>
                <a href='shop-single.php?pro_id=$pro_id'><span class='icon-plus text-primary border rounded border-primary p-1' data-toggle='tooltip' title='Add To Cart'></span></a>
                  
             </h2>
                <strong class='item-price'>Rs. $p_price <del></del> </strong>
                <div class='star-rating'>
                 
                </div>
                </div> 
                "; } ?>  
</div>
               <!-- </div> row product print mb-5 end -->


 
                <!--pagination start--->
            <div class="row">
              <div class="col-md-12 text-center">
                <div class="site-block-27">
                  <ul>
                    <?php

                        $query='SELECT * FROM products';
                        $result=mysqli_query($conn,$query);
                        $total_record=mysqli_num_rows($result);
                        $total_pages=ceil($total_record/$per_page);
                        echo "<li><a href='shop.php?page=1'>".'<<'."</a></li>";
                          for ($i=1; $i <=$total_pages ; $i++) { 
                           echo "<li><a href='shop.php?page=".$i."'>".$i."</a></li>";
                          }

                          echo "<li><a href='shop.php?page=$total_pages'>".'>>'."</a></li>";
                    ?>
                                                
                  </ul>

                </div>
              </div>
            </div><!--pagination end--->

           <?php                            }//!issset cat_id end
                        }//!issset pcat_id  end   ?>

          </div><!--row container-col-md9 order1  end -->

   <!--=================================== product list show end===============================-->


  <!--=========== side bar start here==============-->
 

          <div class="col-md-3 order-2 mb-5 mb-md-0 float-md-right">
            <div class="border p-4 rounded mb-4">
              <h3 class="mb-3 h6 text-uppercase text-black d-block">Categories</h3>
              <ul class="list-unstyled mb-0">
               
               <?php get_cat(); ?>
                
              </ul>
            </div>

            <div class="border p-4 rounded mb-4">
              <h3 class="mb-3 h6 text-uppercase text-black d-block">Product Categories</h3>
              <ul class="list-unstyled mb-0">
               
               <?php get_p_cat(); ?>
                
              </ul>
            </div>

            <div class="border p-4 rounded mb-4">
              <div class="mb-4">
                <h3 class="mb-3 h6 text-uppercase text-black d-block">Filter by Price</h3>
                <div id="slider-range" class="border-primary"></div>
                <input type="text" name="text" id="amount" class="form-control border-0 pl-0 bg-white" disabled="" />
             </div>

              <div class="mb-4">
                <h3 class="mb-3 h6 text-uppercase text-black d-block">Size</h3>
                <label for="s_sm" class="d-flex">
                  <input type="checkbox" id="s_sm" class="mr-2 mt-1"> <span class="text-black">Small (2,319)</span>
                </label>
                <label for="s_md" class="d-flex">
                  <input type="checkbox" id="s_md" class="mr-2 mt-1"> <span class="text-black">Medium (1,282)</span>
                </label>
                <label for="s_lg" class="d-flex">
                  <input type="checkbox" id="s_lg" class="mr-2 mt-1"> <span class="text-black">Large (1,392)</span>
                </label>
              </div>

              <div class="mb-4">
                <h3 class="mb-3 h6 text-uppercase text-black d-block">Color</h3>
                <a href="#" class="d-flex color-item align-items-center" >
                  <span class="bg-danger color d-inline-block rounded-circle mr-2"></span> <span class="text-black">Red (2,429)</span>
                </a>
                <a href="#" class="d-flex color-item align-items-center" >
                  <span class="bg-success color d-inline-block rounded-circle mr-2"></span> <span class="text-black">Green (2,298)</span>
                </a>
                <a href="#" class="d-flex color-item align-items-center" >
                  <span class="bg-info color d-inline-block rounded-circle mr-2"></span> <span class="text-black">Blue (1,075)</span>
                </a>
                <a href="#" class="d-flex color-item align-items-center" >
                  <span class="bg-primary color d-inline-block rounded-circle mr-2"></span> <span class="text-black">Purple (1,075)</span>
                </a>
              </div>

            </div>
          </div>
                        <!--=========== sidebar end here==============-->

        </div><!--row container-mb-5 end here -->

      </div>
    </div>

    <?php if(!isset($_GET['pcat_id'])) {
             if(!isset($_GET['cat_id'])){ ?>
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
               <!---<a href="shop.php?p_cat_id=3" class="product-category">Shoes <span>25 items</span></a> check link error here show different product whay --->
              <img src="images/model_6.png" alt="Image" class="img-fluid">
            </div>
          </div>

          </div>

      </div>
    </div> <?php } }?>

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