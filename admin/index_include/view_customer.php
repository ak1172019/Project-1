  <?php      
      
      

       if(!isset($_SESSION['a_email'])){

          echo "<script>window.open('login.php','_self')</script>";
      }else{



 ?>

 <div class="row mb-5 py-0" data-aos="fade">
 	<div class="col-md-12 px-0">
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"> <a href="index.php?dashboard"><span class="icon-dashboard"></span> Dashboard</a> <span class="mx-2 mb-0">/</span> <a href="index.php?view_product"><strong class="text-black">View Customers</strong></a></div>
        </div>
      </div>
    </div>
          <div class="panel panel-primary">


 	  <div class=" py-3">
              <h2 class="h3 mb-0 pt-3 text-center text-black site-section-heading">View Customer</h2>
             </div>
          <div class="panel-body py-0 ">
            <div class=" table-responsive">
             <table class="table table-bordered">  

                <thead class="text-center text-primary">
                  <tr>
        <!---====================================table start====================================--->
      				
      				<th class="product-name">Sr.No</th>
      			    <th class="product-name">Name</th>
                 
                   
                    <th class="product-name">Email</th><!---new Add Invoice--->
                    <th class="product-name">Image</th>
                    <th class="product-name">Country</th>
                   <!--- <th class="product-name">Date</th>--->
                    <th class="product-name">State</th>
                    <th class="product-name">Phone No</th>
                    <th class="product-name">Delete</th>
                   
                    
                    </tr>
                </thead>

        <tbody class="text-center text-black">
                  <?php 

                        $i=0;
                        	$get_s="SELECT * FROM Customers";
      						$run_s=mysqli_query($conn,$get_s);
      						
      						while($row_s=mysqli_fetch_array($run_s)){

      						$c_id=$row_s['c_id'];
      						$c_fname=$row_s['c_fname'];$c_lname=$row_s['c_lname'];
      						$c_email=$row_s['c_email'];
      						$c_country=$row_s['c_country'];
      						$c_state=$row_s['c_state'];
      						$c_contact=$row_s['c_contact'];
                  $c_add=$row_s['c_add']; 
                  $c_postal=$row_s['c_postal'];
                  $c_img=$row_s['c_img'];
                  $i++;

                         
                  ?>
                  <tr>
                    <td class="product-name"><?php echo $i; ?></td>

                      <td><?php echo $c_fname." ".$c_lname; ?></td>
                  
          
                    <td><?php echo $c_email; ?></td> 

                      <td class=""><img src="../customer/customer_images/<?php echo $c_img ?>" class="img-fluid"></td>

                   <td class="product-name"><?php echo  $c_country; ?></td> 

                    <td class="product-name"><?php echo $c_state; ?></td> 

                  <!---  <td class="product-name"><?php  ///echo $p_date; ?></td>--->

                    <td class="product-name"><?php  echo $c_contact; ?></td>

                      <td>
                      
                        <a href="index.php?del_customer=<?php echo $c_id ?>" ><span class="btn btn-primary height-auto btn-sm">X</span></a>
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