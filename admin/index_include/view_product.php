  <?php      
      
       
        include('includes/db-connect.php');

       if(!isset($_SESSION['a_email'])){

          echo "<script>window.open('login.php','_self')</script>";
      }else{



 ?>

 <div class="row mb-5 py-0" data-aos="fade">
 	<div class="col-md-12 px-0">
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"> <a href="index.php?dashboard"><span class="icon-dashboard"></span> Dashboard</a> <span class="mx-2 mb-0">/</span> <a href="index.php?view_product"><strong class="text-black">View Products</strong></a></div>
        </div>
      </div>
    </div>
          <div class="panel panel-primary">


 	  <div class=" py-3">
              <h2 class="h3 mb-0 pt-3 text-center text-black site-section-heading">View Product</h2>
             </div>
<div class="panel-body py-0 ">
            <div class=" table-responsive">
             <table class="table table-bordered">  

                <thead class="text-center text-primary">
                  <tr>
        <!---====================================table start====================================--->
      				
      				<th class="product-name">Sr.No</th>
      			    <th class="product-name">Title</th>
                 
                    <th class="product-thumbnail">Image</th>
                    <th class="product-name">Price</th><!---new Add Invoice--->
                    <th class="product-name">Category</th>
                    <th class="product-name">Product Categry</th>
                   <!--- <th class="product-name">Date</th>--->
                    <th class="product-name">Product Description</th>
                    <th class="product-name">Delete</th>
                    <th class="product-name">Edite</th>
                    </tr>
                </thead>

        <tbody class="text-center text-black">
                  <?php 

                        $i=0;
                        	$get_p="SELECT * FROM products";
      						$run_p=mysqli_query($conn,$get_p);
      						
      						while($row_p=mysqli_fetch_array($run_p)){

      						$pro_id=$row_p['p_id'];
      						$p_title=$row_p['p_title'];
      						$p_price=$row_p['p_price'];
      						$p_img=$row_p['p_img1'];
      						$p_cat_id=$row_p['p_cat_id'];
      						$cat_id=$row_p['cat_id'];
      						$p_date=$row_p['date'];
      						$p_desc=$row_p['p_description'];
                            $i++;

                            $get_cat="SELECT * FROM categories WHERE cat_id='$cat_id'";
                            $run_cat=mysqli_query($conn,$get_cat);
                            $result_cat=mysqli_fetch_array($run_cat);
                            $cat_n=$result_cat['cat_title'];


                            $get_cat_p="SELECT * FROM p_categories WHERE p_cat_id='$p_cat_id'";
                            $run_cat_p=mysqli_query($conn,$get_cat_p);
                            $result_cat=mysqli_fetch_array($run_cat_p);
                            $p_cat_n=$result_cat['p_cat_title'];
                          
                  ?>
                  <tr>
                    <td class="product-name"><?php echo $i; ?></td>

                      <td><?php echo $p_title; ?></td>
                    
              

                    <td class="product-thumbnail"><img src="../admin/index_include/product_images/<?php echo $p_img ?>" style="height: 60px "></td>
          
                    <td><?php echo $p_price; ?></td> 

                   <td class="product-name"><?php echo  $cat_n; ?></td> 

                    <td class="product-name"><?php echo $p_cat_n; ?></td> 

                  <!---  <td class="product-name"><?php  ///echo $p_date; ?></td>--->

                    <td class="product-name"><?php  echo $p_desc; ?></td>

                    <td>
                      
                        <a href="index.php?edit_product=<?php echo $pro_id; ?>" ><span class="btn btn-primary height-auto btn-sm icon-pencil"></span></a>
                      </td>
                      
                      <td>
                      
                        <a href="index.php?del_p=<?php echo $pro_id ?>" ><span class="btn btn-primary height-auto btn-sm">X</span></a>
                      </td>

                     


                    </tr>





             <?php    }   ?>
                </tbody>
              </table>
              </div>
             </div>
         </div>
     </div>
 </div>




 <?php } ?> 