<?php
        
                             //creating connection 
       require_once("include/db-connect.php");
       require_once("function/functions.php");


                            // form validation  

         $c_fname = $c_lname = $c_email = $c_subject = $c_massage = $email_subscribe ='';                  
         $errors = array('c_fname'=>'', 'c_lname'=>'', 'c_email'=>'', 'c_subject'=>'', 'c_message'=>'','email_subscribe'=>'','success'=>'');                 
        

          if(isset($_POST['submit'])){

                          //checking first name 

                if(empty($_POST['c_fname'])){

                    $errors['c_fname'] = "first name is require";
                }else{

                    $c_fname = $_POST['c_fname'];
                    /*if(!preg_match('/^[a-zA-Z\s]+$/',$c_fname)){
                        
                        $errors['c_fname'] = "First name must be letter and spaces";
                    }*/

                }

                         //checking last name

                if(empty($_POST['c_lname'])){

                    $errors['c_lname'] = "Last name is require";
                }else{

                    $c_lname = $_POST['c_lname'];
                   /* if(!preg_match('/^[a-zA-Z\s]+$/',$c_lname)){
                        
                        $errors['c_lname'] = "Last name must be letter and spaces";
                    }*/

                }

                //email checking 

                if(empty($_POST['c_email'])){

                    $errors['c_email'] = "Email is require";
                }else{

                        $c_email = $_POST['c_email'];
                    if(!filter_var($c_email, FILTER_VALIDATE_EMAIL)){

                        $errors['c_email'] = "enter a valid email";
                    }
                }

                //check subject 
                if(empty($_POST['c_subject'])){

                    $errors['c_subject'] = "Subject is require";
                }else{

                    /*$c_subject = $_POST['c_subject'];
                    if(!preg_match('/^[a-zA-Z\s]+$/',$c_subject)){
                        
                        $errors['c_subject'] = "Subject must be letter or in line ";
                    }*/

                }

                //checking message

                if(empty($_POST['c_message'])){

                    $errors['c_message'] = "message is require";
                }else{
                    /*
                    $c_message = $_POST['c_message'];
                    if(!preg_match('/^[a-zA-Z\s]+$/',$c_message)){
                        
                        $errors['c_message'] = "message must be letter or in line ";
                    }
                        */
                }
           

          //insert data into database.

          if(array_filter($errors)){
              
            //
          }else{

            $c_fname = mysqli_real_escape_string($conn, $_POST['c_fname']);
            $c_lname  = mysqli_real_escape_string($conn, $_POST['c_lname']) ;  
            $c_email  = mysqli_real_escape_string($conn, $_POST['c_email']);
            $c_subject = mysqli_real_escape_string($conn, $_POST['c_subject']);
            $c_message  = mysqli_real_escape_string($conn, $_POST['c_message']);
          

          //insert data into database

          $sql = "INSERT INTO contact(c_fname, c_lname, c_email, c_subject, c_message) VALUES('$c_fname','$c_lname','$c_email','$c_subject','$c_message') ";

          
          if(mysqli_query($conn,$sql)){

                $errors['success'] = "Submited Suceessfully";
                header("Location:index.php");   
                }else{
                        echo "Error In Submiting :".mysqli_error($conn);
                }
          }


        } //form validation end


       


         


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
  
     <?php require_once("include/navbar.php"); ?>
    
    <div class="site-blocks-cover inner-page" style="background-image: url('images/hero_2.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center" data-aos="fade">
      <div class="container">
        <div class="row">
        
        </div>
      </div>
    </div>

    <div class="custom-border-bottom py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Contact</strong></div>
        </div>
      </div>
    </div>


    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="h3 mb-3 text-black">Get In Touch</h2>
          </div>
          <div class="col-md-7">

            <form action="#" method="post">
              
              <div class="p-3 p-lg-5 border">
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="c_fname" class="text-black"> First Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_fname" name="c_fname" value="<?php echo htmlspecialchars($c_fname); ?>">
                    <?php echo htmlspecialchars($errors['c_fname']); ?>
                  </div>
                  <div class="col-md-6">
                    <label for="c_lname" class="text-black">Last Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_lname" name="c_lname" value="<?php echo htmlspecialchars($c_lname); ?>">
                    <?php echo htmlspecialchars($errors['c_lname']); ?>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_email" class="text-black">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="c_email" name="c_email" placeholder="" value="<?php echo htmlspecialchars($c_email); ?>">
                    <?php echo htmlspecialchars($errors['c_email']); ?>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_subject" class="text-black">Subject </label>
                    <input type="text" class="form-control" id="c_subject" name="c_subject" value="<?php echo htmlspecialchars($c_subject); ?>">
                    <?php echo htmlspecialchars($errors['c_subject']); ?>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_message" class="text-black">Message </label>
                    <textarea name="c_message" id="c_message" cols="30" rows="7" class="form-control" value="<?php echo htmlspecialchars($c_message) ?>"></textarea>
                    <?php echo htmlspecialchars($errors['c_message']); ?>
                  </div>
                </div>
                <div class="form-group row">    
                  <div class="col-lg-12">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Send Message" name="submit" >
                    <?php echo htmlspecialchars($errors['success']); ?>
                  </div>
                </div>
              </div>
            </form>
          </div>

          <div class="col-md-5 ml-auto">
            <div class="p-4 border mb-3">
              <span class="d-block text-primary h6 text-uppercase">New York</span>
              <p class="mb-0">203 Fake St. Mountain View, San Francisco, California, USA</p>
            </div>
            <div class="p-4 border mb-3">
              <span class="d-block text-primary h6 text-uppercase">London</span>
              <p class="mb-0">203 Fake St. Mountain View, San Francisco, California, USA</p>
            </div>
            <div class="p-4 border mb-3">
              <span class="d-block text-primary h6 text-uppercase">Canada</span>
              <p class="mb-0">203 Fake St. Mountain View, San Francisco, California, USA</p>
            </div>
         </div>

        </div>
      </div>
    </div>


    <footer class="site-footer custom-border-top">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <h3 class="footer-heading mb-4">Promo</h3>
            <a href="#" class="block-6">
              <img src="images/about_1.jpg" alt="Image placeholder" class="img-fluid rounded mb-4">
              <h3 class="font-weight-light  mb-0">Finding Your Perfect Shirts This Summer</h3>
              <p>Promo from  July 15 &mdash; 25, 2019</p>
            </a>
          </div>
          <div class="col-lg-5 ml-auto mb-5 mb-lg-0">
            <div class="row">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Quick Links</h3>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="#">Sell online</a></li>
                  <li><a href="#">Features</a></li>
                  <li><a href="#">Shopping cart</a></li>
                  <li><a href="#">Store builder</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="#">Mobile commerce</a></li>
                  <li><a href="#">Dropshipping</a></li>
                  <li><a href="#">Website development</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="#">Point of sale</a></li>
                  <li><a href="#">Hardware</a></li>
                  <li><a href="#">Software</a></li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Contact Info</h3>
              <ul class="list-unstyled">
                <li class="address">203 Fake St. Mountain View, San Francisco, California, USA</li>
                <li class="phone"><a href="tel://23923929210">+2 392 3929 210</a></li>
                <li class="email">emailaddress@domain.com</li>
              </ul>
            </div>

            
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" class="text-primary">Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
          
        </div>
      </div>
    </footer>
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
<!---<?php

/*
  if(isset($_POST['submit'])){

    $sender_name=$_POST['c_name'];
    $sender_email=$_POST['c_email'];
    $sender_subject=$_POST['c_subject'];
    $sender_message=$_POST['c_message'];
    $receiveremail="example@email.com";

    mail($receiveremail, $sender_name,  $sender_subject, $sender_message,$sender_email);

    //custome mail 

    $email=$_POST['c_email'];
    $subject="Welcome to Shopmax";
    $msg="Shop on the Website.";
    $from="example@email.com";

    mail($email, $subject, $msg, $from);
    echo "<h2 align='center'>Your mail is send!</h2>";


  }
  */

?>--->