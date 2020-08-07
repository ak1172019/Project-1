<?php 
        
       session_start();
       
        include('includes/db-connect.php');

       if(!isset($_SESSION['a_email'])){

          echo "<script>window.open('login.php','_self')</script>";
      }else{
  

                $a_email=$_SESSION['a_email'];

                $a_info="SELECT * FROM admins WHERE a_email='$a_email'";
                $run_info=mysqli_query($conn,$a_info);
                $fetch_info=mysqli_fetch_array($run_info);

                $a_id=$fetch_info['a_id'];
                $a_name=$fetch_info['a_name'];
                $a_contact=$fetch_info['a_contact'];
                $a_img=$fetch_info['a_img'];
                $a_job=$fetch_info['a_job'];
                $a_country=$fetch_info['a_country'];
                $a_about=$fetch_info['a_about'];


            
                  //products count
                $get_p="SELECT * FROM products";
                $run_p=mysqli_query($conn,$get_p);
                $count_p=mysqli_num_rows($run_p);

                //custome count
                $get_c="SELECT * FROM customers";
                $run_c=mysqli_query($conn,$get_c);
                $count_c=mysqli_num_rows($run_c);                


                //customer count
                $get_p_c="SELECT * FROM p_categories";
                $run_p_c=mysqli_query($conn,$get_p_c);
                $count_p_c=mysqli_num_rows($run_p_c);  

                  //custome count
                $get_c_order="SELECT * FROM c_order";
                $run_c_order=mysqli_query($conn,$get_c_order);
                $count_c_order=mysqli_num_rows($run_c_order);               

         


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

   <div class="site-wrap ">

      <?php require_once("includes/navbar_admin.php"); ?>


    <div class="site-section py-3">
      <div class="container">
        <div class="row mb-5">
          
        
      

          
          <div class="col-md-3 py-5 order-1 mb-3 mb-md-0 site-navbar ">  
            
            <div class=" border border-dark p-3 rounded mb-1 text-center site-section-heading">
              <h3 class=" h4 text-uppercase text-primary ">ADMIN PANLE</h3> 
               <a href="index.php?dashboard"> <h3 class=" h5 text-primary text-center py-0"> Dashboard </h3></a> 
            </div>

            <div class="border border-dark p-3 rounded mb-4 ">
              
            
             
              <div class="p-0 py-3">
                <ul>

                 <div class="mb-5"> 
                <h4><a href="#" data-toggle="collapse" data-target="#products">Products</a></h4>
                <ul class="collapse" id="products">
                  <li><a href="index.php?insert_product">Insert Product</a></li>
                  <li><a href="index.php?view_product">View Product</a></li>
                </ul>
                </div>

                <div class="mb-5">   
              <h4><a href="#" data-toggle="collapse" data-target="#products_c">Product Categories</a></h4>
              <ul class="collapse" id="products_c">
                 <li><a href="index.php?insert_p_cat">insert product categories </a></li>
                 <li><a href="index.php?view_p_cat">View product categories</a></li>
               </ul>
             </div>

             <div class="mb-5">
             <h4 ><a href="#" data-toggle="collapse" data-target="#categories">Categories</a>  </h4>
              <ul class="collapse" id="categories">
              <li><a href="index.php?insert_cat">insert  categories </a></li>
              <li><a href="index.php?view_cat">View categories</a></li>
             </ul>
              </div>

              

              <div class="mb-5">
              <h4><a href="#" data-toggle="collapse" data-target="#Order"> Order </h4>
                  <p>
              <ul class="collapse" id="Order">
              <li><a href="index.php?view_order">View  Order </a></li>
            
             </ul>
             </p>
             </div>

             <div class="mb-5">
              <h4><a href="#" data-toggle="collapse" data-target="#Customers"> Customers </h4>
              <p>
              <ul class="collapse" id="Customers">
              <li><a href="index.php?view_customer">View  Customer </a></li>
                   
             </ul>
             </p>
             </div>

             <div class="mb-5">
             <h4><a href="#" data-toggle="collapse" data-target="#Payment"> Payment </h4>
              <p>
              <ul class="collapse" id="Payment">
              <li><a href="index.php?view_payment">View  Payment </a></li>
              <!---<li><a href="index.php?delete_payment">Delete Payment </a></li>--->
             </ul>
             </p>
             </div class="mb-5">

             <div class="mb-5">
             <h4><a href="#" data-toggle="collapse" data-target="#User"> User </h4>
              <p>
              <ul class="collapse" id="User">
              <li><a href="index.php?insert_user">Insert User</a></li>
              <li><a href="index.php?view_user">View User </a></li>
              
             </ul>
             </p>
             </div>

             <!---<div class="mb-5">
              <h4><a href="#" data-toggle="collapse" data-target="#Slider"> Slider </h4>
               <p>
              <ul class="collapse" id="Slider">
              <li><a href="index.php?insert_slider">insert  Slider </a></li>
              <li><a href="index.php?view_slider">View  Slider </a></li>
             </ul>
             </p>
              </div> --->

             <ul>
           </div>
            </div>
          </div>




         

         <!--- <div class="site-section">
            <div class="container">
        <div class="row mb-5">--->
          <div class=" col-md-9 order-2 px-3 py-5">

            <?php 
                    if(isset($_GET['dashboard'])){

            include('dashboard.php'); 
              }

                    /// product  end

                    if(isset($_GET['insert_product'])){

            include('index_include/insert_product_one.php'); 
              }

                    if(isset($_GET['view_product'])){

            include('index_include/view_product.php'); 
              }

            
                  if(isset($_GET['del_p'])){

            include('index_include/delete_product.php'); 
              }


                  if(isset($_GET['edit_product'])){

            include('index_include/edit_product_one.php'); 
              }
                    /// product  end



                    /// product categories start

                      if(isset($_GET['insert_p_cat'])){

            include('index_include/insert_p_cat.php'); 
              }

                      if(isset($_GET['view_p_cat'])){

            include('index_include/view_p_cat.php'); 
              }

                        if(isset($_GET['del_p_cat'])){

            include('index_include/delete_p_cat.php'); 
              }
              /// product categories end




                  /// Categories Start

                      if(isset($_GET['insert_cat'])){

            include('index_include/insert_cat.php'); 
              }


                      if(isset($_GET['view_cat'])){

            include('index_include/view_cat.php'); 
              }

                          if(isset($_GET['del_cat'])){

            include('index_include/delete_cat.php'); 
              }

                  /// categories end




                  /// slider Start

                      if(isset($_GET['insert_slider'])){

            include('index_include/insert_slider.php'); 
              }


                      if(isset($_GET['view_slider'])){

            include('index_include/view_slider.php'); 
              }

                          if(isset($_GET['del_slider'])){

            //include('category/delete_slider.php'); 
              }

                  /// slider end



                    /// Customer Start

               if(isset($_GET['view_customer'])){

            include('index_include/view_customer.php');
          }

          
                          if(isset($_GET['del_customer'])){

            include('index_include/delete_customer.php'); 
              }
                  /// customer end




              /// order Start
                          if(isset($_GET['view_order'])){

            include('index_include/view_order.php'); 
              }


                          if(isset($_GET['del_order'])){

            include('index_include/delete_order.php'); 
              }
                /// order end




                  /// payment Start
                           if(isset($_GET['view_payment'])){

            include('index_include/view_payment.php'); 
              }

                           if(isset($_GET['del_payment'])){

            include('index_include/delete_payment.php'); 
              }
               /// payment end




              ///Insert User Start
                           if(isset($_GET['insert_user'])){

            include('index_include/insert_user.php'); 
              }

                           if(isset($_GET['view_user'])){

            include('index_include/view_user.php'); 
              }

                           if(isset($_GET['edite_profile'])){

            include('index_include/edite_profile.php'); 
              }


                           if(isset($_GET['del_user'])){

            include('index_include/delete_user.php'); 
              }
               /// User end



?>

          </div> 
        <!---  </div>
          </div>       
          </div>--->
              
              

    </div>
  
  
 
      
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