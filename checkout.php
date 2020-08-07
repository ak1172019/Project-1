<?php 

session_start();

include("include/db-connect.php");
include("function/functions.php");
    

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
          
            <?php require_once("include/navbar.php"); 
    
    

           if(!isset($_SESSION['c_email'])){ 

          include('customer/login-register.php');

       }else{   ?>



        <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <a href="cart.php">Cart</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Checkout</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">

        <div class="row mb-5">
          <div class="col-md-12">
            <div class="border p-4 rounded text-center" role="alert">
             <h1 class="display-5 "> Shipping And Payment<h1>
            </div>
          </div>
        </div>
       
        <!-- start billing details -->
        <div class="row">

          <div class="col-md-6 mb-5 mb-md-0">
            <h2 class="h3 mb-3 ">Ship Address</h2>
            
            <div class="p-3 p-lg-5 border">

              <form  action="checkout.php" method="POST" enctype="multipart/form-data">

              <div class="form-group">

                <label for="c_ship_different_address" class="text-black" data-toggle="collapse" href="#ship_different_address" role="button" aria-expanded="false" aria-controls="ship_different_address"><input type="checkbox" value="1" id="c_ship_different_address"> Ship To A Different Address?</label>
                <div class="collapse" id="ship_different_address">
                  <div class="py-2">

                    <div class="form-group">
                <label for="c_country"  class="text-black " >Country <span class="text-danger">*</span></label>
                <select id="c_country" class="form-control" name="c_country">
                  <option value="1">Select a country</option>    
                  <option value="2">bangladesh</option>    
                  <option value="3">Algeria</option>    
                  <option value="4">Afghanistan</option>    
                  <option value="5">Ghana</option>    
                  <option value="6">Albania</option>    
                  <option value="7">Bahrain</option>    
                  <option value="8">Colombia</option>    
                  <option value="9">India</option>  
                  <option value="10">Dominican Republic</option>    
                </select>
              </div>


             <div class="form-group row ">
                <div class="col-md-6">
                  <label for="c_fname" class="text-black ">First Name <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_fname" name="c_fname" placeholder="First Name">
                </div>
                <div class="col-md-6">
                  <label for="c_lname" class="text-black">Last Name <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_lname" name="c_lname" placeholder="Last Name">
                </div>
              </div>

                    <div class="form-group row">
                      <div class="col-md-12">
                        <label for="c_diff_companyname" class="text-black">Company Name </label>
                        <input type="text" class="form-control" id="c_diff_companyname" name="c_diff_companyname">
                      </div>
                    </div>

                    <div class="form-group row">
                <div class="col-md-12">
                  <label for="c_address" class="text-black">Address <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_address" name="c_address" placeholder="Street address">
                </div>
              </div>

                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Apartment, suite, unit etc. (optional)">
                    </div>

                    <div class="form-group row">
                <div class="col-md-6">
                  <label for="c_state_country" class="text-black">State - City <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_state_country" name="c_state" placeholder="State-city">
                </div>
                <div class="col-md-6">
                  <label for="c_postal_zip" class="text-black">Postal / Zip <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_postal_zip" name="c_postal" placeholder="Postal Code">
                </div>
              </div>


                    <div class="form-group row mb-5">
                <div class="col-md-6">
                  <label for="c_email_address" class="text-black">Email Address <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_email_address" name="c_email" placeholder="Email Address">
                </div>

                <div class="col-md-6">
                  <label for="c_phone" class="text-black">Phone / Mobile <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_phone" name="c_phone" placeholder="Mobile Number">
                </div>
              </div>

              <div class="form-group"><!--form group-->

                <label for="c_create_account" class="text-black" data-toggle="collapse" href="#create_an_account" role="button" aria-expanded="false" aria-controls="create_an_account"><input type="checkbox" value="1" id="c_create_account"> Create an account?</label>
               
                <div class="collapse" id="create_an_account">
                  <div class="py-2">
                    <p class="mb-3">Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                    
                    <div class="form-group">
                      <label for="c_account_password" class="text-black">Account Password</label>
                      <input type="password" class="form-control" id="c_account_password" name="c_password" placeholder="Enter a password">
                    </div>

                     <div class="form-group">
            
                <input type="submit" name="submit" value="Register" class="btn btn-primary btn-lg btn-block">
              </div>
                </div>
                 </div>
                  </div>
                  
                  </div>
                </div>
               </form>  
              </div>

              <div class="form-group">
                <label for="c_order_notes" class="text-black">Order Notes</label>
                <textarea name="c_order_notes" id="c_order_notes" cols="30" rows="5" class="form-control" placeholder="Write your notes here..."></textarea>
              </div>

             
              
            </div>
          </div>

          <div class="col-md-6">

            <!--<div class="row mb-5">
              <div class="col-md-12">
                <h2 class="h3 mb-3 text-black">Coupon Code</h2>
                <div class="p-3 p-lg-5 border">
                  
                  <label for="c_code" class="text-black mb-3">Enter your coupon code if you have one</label>
                  <div class="input-group w-75">
                    <input type="text" class="form-control" id="c_code" placeholder="Coupon Code" aria-label="Coupon Code" aria-describedby="button-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary btn-sm px-4" type="button" id="button-addon2">Apply</button>
                    </div>
                  </div>

                </div>
              </div>
            </div> -->
            
<?php 

                  $c_email=$_SESSION['c_email'];
                  $c_id_get="SELECT c_id FROM customers WHERE c_email='$c_email'";
                  $run_ci=mysqli_query($conn,$c_id_get);
                  $row=mysqli_fetch_assoc($run_ci);
                  $c_id=$row['c_id'];
                   //print_r($row);

     

                    ?>


            <div class="row mb-5"><!---Your Order--->
              <div class="col-md-12">
                <h2 class="h3 mb-3 ">Your Order</h2>
                <div class="p-3 p-lg-5 border">
                  <table class="table site-block-order-table mb-5">
                    <thead>
                      <th>Product</th>
                      <th>Total</th>
                    </thead>
                    <tbody>
<?php
                

                   $ip_add=get_user_IP();
 
                   $sel_cart="SELECT * FROM cart WHERE ip_add='$ip_add'";
                   $run_cart=mysqli_query($conn,$sel_cart);

                   if(!$row_cart_check=mysqli_num_rows($run_cart)>0){
                         echo "<script>alert('Cart is Empty')</script>";
                         echo "<script>window.open('shop.php','_self')</script>";
                   }else{

                    while ($row_cart=mysqli_fetch_array($run_cart)){

                    $pro_id=$row_cart['p_id'];
                    $p_qty=$row_cart['p_qty'];
                    $sizes=$row_cart['size'];

                    $get_p="SELECT * FROM products WHERE p_id = ' $pro_id' ";
                    $p_run=mysqli_query($conn,$get_p);

                    while($row_p=mysqli_fetch_array($p_run)){

                    $p_title=$row_p['p_title'];
                    $p_price=$row_p['p_price'];
                    $sub_total=$p_price*$p_qty;




                   
                    
                    echo "<tr>
                        <td>$p_title<strong class='mx-2'>x</strong>$p_qty</td>
                        <td>  $p_price </td>
                      </tr>";

           }
}
}//else end
 ?>                 
                    
                      <tr>
                        <td class="text-black font-weight-bold"><strong>Cart Subtotal</strong></td>
                        <td class="text-black"><?php echo $sub_total; ?></td>
                      </tr>
                      <tr>
                        <td class="text-black font-weight-bold"><strong>Order Total</strong></td>
                        <td class="text-black font-weight-bold"><strong><?php echo $sub_total; ?></strong></td>
                      </tr>
                    </tbody>
                  </table>


                    <div class="border p-3 mb-3">
                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="" href="order.php?c_id=<?php echo $c_id ?>" role="button" aria-expanded="false" aria-controls="collapsebank">Offline Payment</a></h3>

                    <div class="" id="">
                      <div class="py-2">
                        <p class="mb-0">Make your payment directly into our hand. Please show your ID to our Delivery person. Your get order after recieving a payment.<!---<a href="order.php?c_id=<?php// echo $c_id; ?>">Click here.</a>---></p>
                      </div>
                    </div>
                  </div>
                  
                  <div class="border p-3 mb-3">
                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="" href="order.php?c_id=<?php echo $c_id ?>" role="button" aria-expanded="false" aria-controls="collapsebank">Direct Bank Transfer</a></h3>

                    <div class="" id="">
                      <div class="py-2">
                        <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.<!---<a href="order.php?c_id=<?php// echo $c_id; ?>">Click here.</a>---></p>
                      </div>
                    </div>
                  </div>


                  <div class="border p-3 mb-5">
                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="" href="order.php?c_id=<?php echo $c_id ?>" role="button" aria-expanded="false" aria-controls="collapsepaypal">Paypal</a></h3>

                    <div class="" id="">
                      <div class="py-2">
                        <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.<!---<a href="order.php?c_id=<?php //echo $c_id; ?>">Click here.</a>---></p>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                   <!--- <button class="btn btn-primary btn-lg btn-block" onclick="window.location='order.php?c_id=<?php /// echo $c_id; ?>'">Place Order</button>--->
                  </div>

                </div>
              </div>
            </div><!--your Order--->

          </div><!--col md 6 --->
      

        </div> <!-- End billing details(row) -->
<?php } ?>    
      </div><!-- Container End -->
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

<?php





/*

  


     $errors = array('c_fname'=>'','c_lname'=>'','c_country'=>'','c_state'=>'','c_city'=>'','c_contact'=>'','c_add'=>'');


    if(isset($_POST['submit'])){

              
              

              $c_country=$_POST['c_country'];
              $c_fname=$_POST['c_fname'];
              $c_lname=$_POST['c_lname'];
              $c_add=$_POST['c_address'];
              $c_state=$_POST['c_state'];
              $c_postal=$_POST['c_postal'];
              $c_email=$_POST['c_email'];
              $c_phone=$_POST['c_phone'];
              $c_password=$_POST['c_password'];
              
              $c_img_n=$_FILES['profile']['name'];
              $c_img_t=$_FILES['profile']['tmp_name'];
              
              $ip_add=get_user_IP();

              move_uploaded_file($c_img_t,"customer/customer_images/$c_img_n");

              $insert_customer="INSERT INTO customers (c_fname, c_lname, c_email, c_password, c_country, c_state, c_contact, c_add, c_postal, c_img,c_ip) value ('$c_fname','$c_lname','$c_email','$c_password','$c_country','$c_state','$c_phone','$c_add','$c_postal','$c_img_n','$ip_add')";

              $run_c_insert=mysqli_query($conn,$insert_customer);
              

              //checking cart 

              $sel_cart="SELECT * FROM cart WHERE ip_add='$ip_add'";
              $run_cart=mysqli_query($conn,$sel_cart);
              $check_cart=mysqli_num_rows($run_cart);

              print_r($check_cart);

              if($check_cart>0){

                  $_SESSION['c_email']=$c_email;

                  echo "<script>alert('Register Successfully!')</script>";
                  echo "<script>window.open('checkout.php','_self')</script>";


              }else{

                      $_SESSION['c_email']=$c_email;
                     

                      echo "<script>alert('New Register Successfully!')</scripy>";

                      echo "<script>window.open('index.php','_self')</script>";
              }


    } 
*/
?>