<div class="site-wrap">

 <div class="site-navbar bg-white py-2">
      <div class="search-wrap">
        <div class="container">
          <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
          <form action="#" method="post">
            <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
          </form>  
        </div>
      </div>

      <div class="container">
        <div class="d-flex align-items-center justify-content-between">

         <div class="logo">
            <div class="site-logo">
              <a href="../index.php" class="js-logo-clone">ShopMax</a>
            </div>
          </div> 
          
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              
              <ul class="site-menu js-clone-nav d-none d-lg-block">
              <li class="has-children active">
                  <a href="../index.php">Home</a>
                  <ul class="dropdown">
                    <li><a href="../shop.php">Shop</a></li>
                    <li><a href="../cart.php">Cart</a></li>
                    <li><a href="../checkout.php">Checkout</a></li>
                    <li class="has-children">
                      <a href="#">Products</a>
                      <ul class="dropdown">
                         <?php    

                             $get_p_cats="SELECT * FROM p_categories" ;
                             $run_p_cats=mysqli_query($conn,$get_p_cats);
                             $row=mysqli_num_rows($run_p_cats);                       
                              while( $rows=mysqli_fetch_array($run_p_cats)) {
                      
                             $p_cat_id=$rows['p_cat_id'];
                              $p_cat_title=$rows['p_cat_title'];
                      
                              ?>
                        <li><a href="../shop.php?pcat_id=<?php echo $p_cat_id ?>"><?php echo "$p_cat_title"; ?></a></li>  <?php  } ?>
                       <!--- <li><a href="#">Menu Two</a></li>
                        <li><a href="#">Menu Three</a></li>--->
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="../shop.php">Shop</a></li>
               <!--- <li><a href="#">Catalogue</a></li>
                <li><a href="#">New Arrivals</a></li> --->
                <li><a href="index.php?my_order">Account</a></li>
                <li><a href="../contact.php">Contact</a></li>
              </ul>
            </nav>
          </div>

          
          <div class="icons">
            <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
            
            <!---cart icon start --->
            <?php/// if(!isset($_SESSION['c_email'])){ ?>
            <!---<a href="checkout.php" class="icons-btn d-inline-block bag">---><?php ///}else{ ?>

              <a href="../cart.php" class="icons-btn d-inline-block bag"><?php/// } ?>
            <span class="icon-shopping-bag"></span>
              <span class="number"><?php items(); ?></span>
            </a>
            <!---cart icon end --->

            <a href="index.php?my_fav" class="icons-btn d-inline-block"><span class="icon-heart-o"></span></a>
            <?php
                  if(!isset($_SESSION['c_email'])){  ?>
                          
                        <?php // echo "GUEST";?>

                       
                          <span>
                      <a href="../checkout.php" class="dropdown"> LogIn </a></span>
   
                 <?php  }else{  ?>
                   <a href="../logout.php" class="icons-btn d-inline-block has-children active">
                    <button class="icon-person" data-toggle="tooltip" title="click logout">
                    <?php
                        $c_email=$_SESSION['c_email'];

                        //$substring = substr($string,$start,$length);
                        //$username = substr($_GET['username'],0,8);

                        $user_name="SELECT c_fname FROM customers WHERE c_email='$c_email'";
                        $run_un=mysqli_query($conn,$user_name);
                        $row=mysqli_fetch_assoc($run_un);
                        //print_r($row);
                        $c_fname=$row['c_fname'];
                    echo "".$c_fname.""; ?>
                      </button></a>
                     <!---  <span>
                      <a href="logout.php" class="dropdown"> Logout </a></span> --->
                 <?php }
            ?>

            <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span class="icon-menu"></span></a>
 
          </div>

        </div>

      </div>
    </div>
</div>

