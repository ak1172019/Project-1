<?php 

      session_start();

      if(!isset($_SESSION['c_email'])){
          echo "<script>alert('Register Or log In!')</script>";
        echo "<script>window.open('../checkout.php','_self')</script>";
      }else{


      require_once("includes/db-connect.php");
      require_once("../function/functions.php");
    
    



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
  
      <?php require_once("includes/navbar.php"); ?>


<div class="site-section py-5">

  <div class="container ">
    <div class="row ">
       
       <?php require_once("includes/sbma.php"); 


               if(isset($_GET['my_order'])){
            include('my_order.php'); ///order.php include
                  }

            //include pay_offline
               if(isset($_GET['pay_offline'])){
            include('pay_offline.php');   }


            //include edit_account
               if(isset($_GET['edit_act'])){
            include('edit_account.php');}

            //include edit_account
               if(isset($_GET['change_pass'])){
            include('change_password.php');}

            //include delete_account
               if(isset($_GET['delete_act'])){
            include('delete_ac.php');}

            //include logout page
              if(isset($_GET['logout'])){
            include('logout.php');}

             //include my_fav page
              if(isset($_GET['my_fav'])){
            include('fav.php');}

            //include my_fav page
              if(isset($_GET['del_fav'])){
            include('del_fav.php');}


       ?>
        </div>

     </div>      
    </div>

  <?php 

         

      ?>



  </div>
      
  </div>    

    <?php include("includes/footer.php"); ?>
    
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
<?php } ?>