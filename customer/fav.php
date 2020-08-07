 <?php 
          if(isset($_SESSION['c_email'])){  ?>

  <div class="col-md-9 order-2 mb-1 mb-md-0 float-md-left">
<div class="border p-1 rounded mb-4">


<div class="p-4  mb-3 text-center">
              <h3 class=" text-primary h3 text-uppercase">My Favorite</h3>
              <p class="mb-0 text-info">All Your Favorite</p>
            </div>
             </div>

             <div class="row mb-5 border">

 <?php   


         $i=0;             
         $c_email=$_SESSION['c_email']; 
         $get_details_c="SELECT c_id FROM customers WHERE c_email='$c_email'";
         $run_details=mysqli_query($conn,$get_details_c);
         $fetch_details=mysqli_fetch_array($run_details);

          $c_id=$fetch_details['c_id']; 


            $get_fav="SELECT * FROM fav WHERE c_id='$c_id'";
            $run_fav=mysqli_query($conn,$get_fav);

             
             while($row_fav=mysqli_fetch_array($run_fav)) {
                  
                  $fav_id=$row_fav['fav_id'];
                  $p_id=$row_fav['p_id'];
                  
                 $get_p="SELECT * FROM products WHERE p_id='$p_id'";
                 $run_p =mysqli_query($conn,$get_p);
                

                  while ($row_p=mysqli_fetch_array($run_p)){

                            $p_title=$row_p['p_title'];
                            $p_img=$row_p['p_img1'];
                            $p_price=$row_p['p_price'];
                            $p_desc=$row_p['p_description'];
                            $i++
    
?>



             <div class="col-md-4 item-entry mb-4">
                <a href="#" class="product-item sm-height bg-gray d-block">
                  <img src="../admin/index_include/product_images/<?php echo $p_img ?>" alt="Image" class="img-fluid" >
                </a>
                <h2 class="item-title"><a href="#"><?php echo $p_title; ?></a></h2>
                <strong class="item-price"><?php echo $p_price; ?></strong>
                <span class="icon-star2 text-warning"></span>
                  <span class="icon-star2 text-warning"></span>
                  <span class="icon-star2 text-warning"></span>
                  <a href="index.php?del_fav=<?php echo $fav_id  ?>" ><span class="btn btn-primary height-auto btn-sm">X</span>
              </div>

               
<?php       }  
              

             }
}else{  
        
           echo "<script>alert('Please login Or Registe For Add To Favourite!')</script>";
             echo "<script>window.open('../checkout.php','_self')</script>";
 }
 
           ?>



              </div>




         </div>
     </div>


            

    























