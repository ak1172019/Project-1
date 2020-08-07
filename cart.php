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
    
  </head>
  <body>
    
  <div class="site-wrap">
          
      <?php require_once("include/navbar.php"); ?>
    
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black"><a href="cart.php">Cart</a></strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">

 
         <form class="" action="cart.php" method="POST" enctype="multipart/form-data">
        <div class="row mb-5 ">

      
            
            <div class="site-blocks-table col-md-12 ">
              <table class="table table-bordered">
                
               

                <thead>
                  <tr>
                    <th class="product-thumbnail">Image</th>
                    <th class="product-name">Product</th>
                    <th class="product-price">Price</th>
                    <th class="product-quantity">Quantity</th>
                    <th class="product-total">Total</th>
                    <th class="product-remove">Remove</th>
                  </tr>
                </thead>

<?php 
            $sub_total=0;

            $ip_add=get_user_IP();
            $t_cart="SELECT * FROM cart WHERE ip_add='$ip_add'";
            $cart_result=mysqli_query($conn,$t_cart);
          

           while ($rows_cart=mysqli_fetch_array($cart_result)) {
                                
                   $p_id=$rows_cart['p_id'];
                   $p_qty=$rows_cart['p_qty'];
                   $p_size=$rows_cart['size'];

                   $t_products="SELECT * FROM products WHERE p_id='$p_id'";
                   $p_result=mysqli_query($conn,$t_products);
                            

                     while ($row_product=mysqli_fetch_array($p_result)) {
                                

                             $pro_id=$row_product['p_id'];
                             $pro_cat_id=$row_product['p_cat_id'];
                             $cat_id=$row_product['cat_id'];
                             $date=$row_product['date'];
                             $p_title=$row_product['p_title'];
                             $p_img1=$row_product['p_img1'];
                            //$p_img2=$row_product['p_img2'];
                            //$p_img3=$row_product['p_img3'];
                             $p_price=$row_product['p_price'];
                             $p_keyword=$row_product['p_keyword'];
                             $p_description=$row_product['p_description'];
                             $sub_total=$p_price*$p_qty
                              
          ?>

                <tbody>
                  <tr>
                    <td class="product-thumbnail">
                      <a href="shop-single.php?pro_id=<?php echo $pro_id ?>"><img src="admin/index_include/product_images/<?php echo $p_img1 ?>" alt="Image" class="img-fluid"></a>
                    </td>
                    <td class="product-name">
                      <a href="shop-single.php?pro_id=<?php echo $pro_id ?>"><h2 class="h5 text-black"><?php echo $p_title; ?></h2>
                    </td></a>
                    <td><?php echo $p_price; ?></td>
                   
                    <td>
                      <div class="input-group mb-3" style="max-width: 120px;">
                        <div class="input-group-prepend">
                      <!--    <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>--->
                        </div> 
                        <input type="text" class="form-control text-center" name="p_qty" value="<?php echo $p_qty; ?>" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                          <!---<button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>--->
                        </div>
                      </div>
                    </td>

                    <td><?php echo $sub_total; ?></td>
                      <td>
                       <!-- <input class="btn btn-primary height-auto btn-sm" type="checkbox" name="remove[]" value="<?php echo $pro_id ?>"> -->
                        <a href="cart.php?del_p=<?php echo $pro_id; ?>" ><span class="btn btn-primary height-auto btn-sm">X</span></a>
                      </td>
                  </tr>
          <?php             } }

        ?>
                </tbody>




              </table>
            </div>
        
        </div>
                  <!--- row start --->
        <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
              <div class="col-md-6 mb-3 mb-md-0">
                <button class="btn btn-primary btn-sm btn-block" type="submit" name="update">Update Cart</button>
              </div>               



              <div class="col-md-6"><a href="shop.php"><span onclick="window.location='shop.php'" class="btn btn-outline-primary btn-sm btn-block">Continue Shopping</span></a>
          
              </div>
            </div>
          </div>
            <!---
            <div class="row">
              <div class="col-md-12">
                <label class="text-black h4" for="coupon">Coupon</label>
                <p>Enter your coupon code if you have one.</p>
              </div>
              <div class="col-md-8 mb-3 mb-md-0">
                <input type="text" class="form-control py-3" id="coupon" placeholder="Coupon Code">
              </div>
              <div class="col-md-4">
                <button class="btn btn-primary btn-sm px-4">Apply Coupon</button>
              </div>
            </div> 
          </div> row end here--->

          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <span class="text-black">Subtotal</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black"><?php  totalprice(); ?></strong>
                  </div>
                </div>
                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">Total</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black"><?php totalprice();  ?></strong>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <a href="checkout.php"><span class="btn btn-primary btn-lg btn-block" onclick="window.location='checkout.php'">Proceed To Checkout</span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!---row end--->
  </form>
  <?php    

                            ?>

      </div>
      <!---container--->
    </div>
    
    <?php 
    include("include/footer.php");

     function update_cart(){

                                global $conn;
                                $ip_add=get_user_IP();

                             /* if(isset($_POST['update'])){
                
                                foreach($_POST['remove'] as $remove_id) {
                                    
                              $p_delete="DELETE FROM cart WHERE p_id='$remove_id'";
                            
                              $delete_run=mysqli_query($conn,$p_delete);
                                          }

                                }  */

                              if(isset($_GET['del_p'])){
                                $remove_id=$_GET['del_p'];
                              $p_delete="DELETE FROM cart WHERE p_id='$remove_id'";
                            
                              $delete_run=mysqli_query($conn,$p_delete);
                            }

                                if($delete_run){
                                   
                                  echo "<script>window.open('cart.php','_self')<script>";

                                }

                             
                         }
                                 
                                  //update qty start
                                  if(isset($_POST['update'])){
                                
                                $qty_add=$_POST['p_qty'];
                        
                                $ip_add=get_user_IP();

                              if($qty_add>0){
                          $update_qty="UPDATE cart SET p_qty='$qty_add' WHERE ip_add='$ip_add' AND p_id='$pro_id' ";
                          $run_update=mysqli_query($conn,$update_qty);
                          echo "<script>window.open('cart.php', '_self')</script>";
                              }
                          }//update qty end    

                            echo @$up_cart=update_cart();

     ?>
    
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