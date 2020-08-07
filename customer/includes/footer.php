<?php 
    require_once("db-connect.php");
  

  
?>


<footer class="site-footer custom-border-top">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <h3 class="footer-heading mb-4">Promo</h3>
            <a href="#" class="block-6">
              <img src="../images/about_1.jpg" alt="Image placeholder" class="img-fluid rounded mb-4">
              <h3 class="font-weight-light  mb-0">Finding Your Perfect Shirts This Summer</h3>
              <p>Promo from  July 15 &mdash; 25, 2020</p>
            </a>
          </div>
          <div class="col-lg-5 ml-auto mb-5 mb-lg-0">
            <div class="row">

              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Quick Links</h3>
              </div>
               

                <?php /*  
                    $get_q_links="SELECT * FROM q_links" ;
                    $run_q_links=mysqli_query($conn,$get_q_links);
                                                                           
                     $rows=mysqli_num_rows($run_q_links);


                     for ($j=0; $j <4 ; $j++) { 
                                         
                ?>

   
                <div class="col-md-6 col-lg-4">
                  <ul class="list-unstyled">

                  <?php   
                        
                      for($i=0; $i<4; $i++) { 
                       $row=mysqli_fetch_assoc($run_q_links);
                     
                         
                       $ql_id=$row['ql_id'];
                       $ql_title=$row['ql_title'];
                       echo "<li><a href='' value='php $ql_id'> $ql_title</a></li>";      
                       

                     } 
                       if($j==3){
                          get_cat();
                      }



                      ?>
                  </ul>

                 </div> 
              <?php } */ ?>

                
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                   <?php 

                   $get_cats="SELECT * FROM categories" ;
                   $run_cats=mysqli_query($conn,$get_cats);
                             
                   while( $row_cat=mysqli_fetch_array($run_cats)) {

                    $cat_id=$row_cat['cat_id'];
                    $cat_title=$row_cat['cat_title'];
                     echo "<li><a href='../shop.php?cat_id=$cat_id'>$cat_title</a></li>";
}
       ?>        
      
                </ul>
              </div>



              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                   <?php 
/*
                   $get_cats="SELECT * FROM p_categories" ;
                   $run_cats=mysqli_query($conn,$get_cats);
                             
                   while( $row_cat=mysqli_fetch_array($run_cats)) {

                    $p_cat_id=$row_cat['p_cat_id'];
                    $p_cat_title=$row_cat['p_cat_title'];
                     echo "<li><a href='shop.php?pcat_id=$p_cat_id'>$p_cat_title</a></li>";
}
      */ ?>  <li><a href='../cart.php'>Shopping Cart</a></li>
             <li><a href='../myaccount.php'>Dropshipping</a></li>
             <li><a href='../cart.php'>Sell Online</a></li>
             <li><a href='../cart.php'>Feature</a></li>
             
                </ul>
              </div>


               <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                   <li><a href='../cart.php'>Arrival Sale</a></li>
                   <li><a href='../cart.php'>Find Coupen Code</a></li>
                   <li><a href='../cart.php'>career</a></li>
             <li><a href='../about.php'>about us</a></li> 
                </ul>
              </div>
             <!-- 
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                   <?php /*

                      for($i=0; $i<4; $i++) { 
                       $row=mysqli_fetch_assoc($run_q_links);
                     
                         
                       $ql_id=$row['ql_id'];
                       $ql_title=$row['ql_title'];
                       echo "<li><a href='' value='php $ql_id'>$ql_title</a></li>";      
                       
                     }  ?>
                </ul>
              </div>
              

                
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <?php 

                      for($i=0; $i<3; $i++) { 
                       $row=mysqli_fetch_assoc($run_q_links);
                     
                         
                       $ql_id=$row['ql_id'];
                       $ql_title=$row['ql_title'];
                       echo "<li><a href='' value='php $ql_id'>$ql_title</a></li>";      
                       
                     }  ?>
                </ul>
              </div>

               <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                     <?php 
                        for($i=0; $i<3; $i++) { 
                      get_pcat();
                     } */ ?>
                </ul>
              </div>

--->
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