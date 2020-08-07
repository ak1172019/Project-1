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
          <div class="col-md-12 mb-0"> <a href="index.php?dashboard"><span class="icon-dashboard"></span> Dashboard</a> <span class="mx-2 mb-0">/</span> <a href="index.php?view_product"><strong class="text-black">View User</strong></a></div>
        </div>
      </div>
    </div>
          <div class="panel panel-primary">


 	  <div class=" py-3">
              <h2 class="h3 mb-0 pt-3 text-center text-black site-section-heading">View User</h2>
             </div>
<div class="panel-body py-0 ">
            <div class=" table-responsive">
             <table class="table table-bordered">  

                <thead class="text-center text-primary">
                  <tr>
        <!---====================================table start====================================--->
      				
      				      <th class="product-name">Sr.No</th>
      			        <th class="product-name">Name</th>
                    <th class="product-name">Email</th>
                    <th class="product-thumbnail">Image</th><!---new Add Invoice--->
                     <th class="product-name">Contact</th>
                    <th class="product-name">Country</th>
                    <th class="product-name">Job</th>
                    <th class="product-name">Edite</th>
                     <th class="product-name">Delete</th>
                    </tr>
                </thead>

        <tbody class="text-center text-black">
                  <?php 

                        $i=0;
                        	$get_a="SELECT * FROM admins";
      						$run_a=mysqli_query($conn,$get_a);
      						
      						while($row_a=mysqli_fetch_array($run_a)){

                  $a_id=$row_a['a_id'];
      						$a_name=$row_a['a_name'];
      						$a_email=$row_a['a_email'];
      						$a_img=$row_a['a_img'];
      						$a_contact=$row_a['a_contact'];
      						$a_country=$row_a['a_country'];
      						$a_job=$row_a['a_job'];
      				
                            $i++;
                  ?>
                  <tr>
                    <td class="product-name"><?php echo $i; ?></td>

                      <td><?php echo $a_name; ?></td>
                    
              

                    <td class="product-name"><?php  echo $a_email; ?></td>
          
                    <td class="product-thumbnail" style="width:120px; height:120px; "><img src="../admin/index_include/user_images/<?php echo $a_img ?>" class="img-fluid"></td> 

                   <td class="product-name"><?php echo  $a_contact; ?></td> 

                    <td class="product-name"><?php echo $a_country; ?></td> 

                    <td class="product-name"><?php echo $a_job; ?></td> 

                  <!---  <td class="product-name"><?php  ///echo $p_date; ?></td>--->
                    <td>
                      
                        <a href="index.php?edite_profile=<?php echo $a_id; ?>" ><span class="btn btn-primary height-auto btn-sm icon-pencil"></span></a>
                      </td>

                      <td>
                        <a href="index.php?del_user=<?php echo $a_id ?>" ><span class="btn btn-primary height-auto btn-sm">X</span></a>
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