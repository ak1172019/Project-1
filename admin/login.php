<?php session_start();
      include('includes/db-connect.php');

    
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ShopMax &mdash; Colorlib e-Commerce Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="../fonts/icomoon/style.css">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/jquery-ui.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">


    <link rel="stylesheet" href="../css/aos.css">

    <link rel="stylesheet" href="../css/style.css">
     <link rel="stylesheet" href="../css/mystyle.css">
    
  </head>
  <body>

    <div class="site-wrap">


         
      <div class="container">
        <div class="row align-items-center justify-content-between">

          <div class="col-md-5"></div>
          <div class="col-md-2 py-3">
            <div class="site-logo">
              <a href="index.php" class="js-logo-clone">ShopMax</a>
            </div>
          </div>
          <div class="col-md-5"></div>
          <div class="main-nav d-none d-lg-block">
          </div>
        </div>
     

    


    <div class="site-section">
      <div class="container">
        
        <!-- start billing details -->
        <div class="row justify-content-center py-1">
  
            <div class="col-md-6">
             <div class="row mb-5"><!---Your Order--->
              <div class="col-md-12">
                <h2 class="h3 mb-3 text-black text-center">Login</h2>
                <div class="p-3 p-lg-5 border rounded ">
                
                  <form action="login.php" method="POST" class="form-group">

                    <div class="form-group">
                       <input type="text" class="form-control" id="a_email_address" name="a_email" placeholder="Email" required="">
                     </div> 

                    <div class="form-group ">
                  <input type="password" class="form-control" id="l_account_password" name="a_password" placeholder="Password" required="">
                 </div> 

                  <div class="form-group">    
                    <input type="submit" class="btn btn-primary btn-sm btn-block" value="Login" name="a_login" >
                    </div>

                   </form>

                </div>

              </div>
            </div><!--your Order--->

          </div><!--col md 6 --->
    

          </div> <!-- End billing details(row) -->
    
      </div><!-- Container End -->
    </div>

  </div>

  <script src="../js/jquery-3.3.1.min.js"></script>
  <script src="../js/jquery-ui.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/aos.js"></script>

  <script src="../js/main.js"></script>
    
  </body>
</html>

<?php 

      if(isset($_POST['a_login'])){

        $a_email=mysqli_real_escape_string($conn,$_POST['a_email']);
        $a_password=mysqli_real_escape_string($conn,$_POST['a_password']);
        $get_check="SELECT * FROM admins WHERE a_email='$a_email' AND a_password='$a_password'";
        $run_check=mysqli_query($conn,$get_check);

        if($count=mysqli_num_rows($run_check)==1){

              $_SESSION['a_email']=$a_email;

                echo "<script>alert('you are Loged In !')</script>";
                 echo "<script>window.open('index.php?dashboard','_self')</script>";
        }else{
              
              echo "<script>alert('Username And password not matched !')</script>";
        }

      }

?>
