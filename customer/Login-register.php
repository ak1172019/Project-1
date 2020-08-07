 <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <a href="customer/myaccount.php">Account</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">login/register</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        

        <div class="row mb-5">
          <div class="col-md-12">
            <div class="border p-4 rounded text-center" role="alert">
             <h1 class="display-5 "> Login / Register<h1>
            </div>
          </div>
        </div>
       
        <!-- start billing details -->
        <div class="row">

          <div class="col-md-6 mb-5 mb-md-0">
            <h2 class="h3 mb-3 text-black">New? Register Now !</h2>
            
            <div class="p-3 p-lg-5 border">

              <form  action="checkout.php" method="POST" enctype="multipart/form-data">


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

              <div class="form-group">
                 <label class="text-black ">Profile Image</label>
                  <input type="file" name="profile" class="form-control " >
               </div>

               <div class="form-group row">
                <div class="col-md-12">
                  <label for="c_address" class="text-black">Address <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_address" name="c_address" placeholder="Street address">
                </div>
              </div>

               <div class="form-group row">
                <div class="col-md-6">
                  <label for="c_state_country" class="text-black">State - City <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_state_country" name="c_state" placeholder="State-city">
                </div>
                <div class="col-md-6">
                  <label for="c_postal_zip" class="text-black">Posta / Zip <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_postal_zip" name="c_postal" placeholder="Postal Code">
                </div>
              </div>

        <!--      <div class="form-group row">
                <div class="col-md-12">
                  <label for="c_companyname" class="text-black">Company Name </label>
                  <input type="text" class="form-control" id="c_companyname" name="c_companyname">
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
                  <label for="c_state_country" class="text-black">State / Country <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_state_country" name="c_state_country">
                </div>
                <div class="col-md-6">
                  <label for="c_postal_zip" class="text-black">Posta / Zip <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_postal_zip" name="c_postal_zip">
                </div>
              </div> -->

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
            
                <input type="submit" name="register" value="Register" class="btn btn-primary btn-lg btn-block">
              </div>

                  </div>
                </div>

              </div><!--form group -->
     </form>
</div>
 </div>

 <?php 

       if(isset($_POST['register'])){

              
              $ip_add=get_user_IP();

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

              move_uploaded_file($c_img_t,"customer/customer_images/$c_img_n");

              $insert_customer="INSERT INTO customers (c_fname, c_lname, c_email, c_password, c_country, c_state, c_contact, c_add, c_postal,c_img,c_ip) value ('$c_fname','$c_lname','$c_email','$c_password','$c_country','$c_state','$c_phone','$c_add','$c_postal','$c_img_n','$ip_add')";

              $run_c_insert=mysqli_query($conn,$insert_customer);
              
       

              //checking cart 

              $sel_cart="SELECT * FROM cart WHERE ip_add='$ip_add'";
              $run_cart=mysqli_query($conn,$sel_cart);
              $check_cart=mysqli_num_rows($run_cart);


              

              

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

 ?>
            
            <div class="col-md-6">

             <div class="row mb-5"><!---Your Order--->
              <div class="col-md-12">
                <h2 class="h3 mb-3 text-black">Login</h2>
                <div class="p-3 p-lg-5 border">
                
                  <form action="checkout.php" method="POST">

                    <div class="form-group row mb-5">
                     <div class="col-md-12">
                       <input type="text" class="form-control" id="c_email_address" name="l_email" placeholder="Email">
                      </div>
                     </div> 

                    <div class="form-group row mb-5 ">
                   <div class="col-md-12">
                  <input type="password" class="form-control" id="l_account_password" name="l_password" placeholder="Password">
                </div>
                 </div> 

                  <div class="form-group">    
                   <div class="col-lg-6">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Login" name="login" >
                     </div>
                    </div>

                   </form>

                </div>
              </div>
            </div><!--your Order--->

          </div><!--col md 6 --->
      






      

          </div> <!-- End billing details(row) -->
    
      </div><!-- Container End -->
    </div>

<?php

    if(isset($_POST['login'])){


          $c_email=$_POST['l_email'];
          $password=$_POST['l_password'];

          $sel_customer="SELECT * FROM customers WHERE c_email='$c_email' AND c_password='$password'";
          $run_sel=mysqli_query($conn,$sel_customer);
          $check_customer=mysqli_num_rows($run_sel);
          $ip_add=get_user_IP();

          $cart="SELECT * FROM cart WHERE ip_add='$ip_add'";
          $cart_run=mysqli_query($conn,$cart);
          $check_cart=mysqli_num_rows($cart_run);

          if($check_customer==0){
            echo "<script>alert('email and password not valid !')</script>";
            exit();
          }

          if($check_customer==1 AND $check_cart==0){

            $_SESSION['c_email']=$c_email;
            echo "<script>alert('You are logged In !')</script>";
            echo "<script>window.open('index.php','_self')</script>";

          }else{

            $_SESSION['c_email']=$c_email;
            echo "<script>alert('You are logged In!')</script>";
            echo "<script>window.open('cart.php' ,'_self')</script>";
          }

    }


?>    