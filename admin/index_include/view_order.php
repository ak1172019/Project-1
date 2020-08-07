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
          <div class="col-md-12 mb-0"> <a href="index.php?dashboard"><span class="icon-dashboard"></span> Dashboard</a> <span class="mx-2 mb-0">/</span> <a href="index.php?view_product"><strong class="text-black">View Order</strong></a></div>
        </div>
      </div>
    </div>
          <div class="panel panel-primary">


 	  <div class=" py-3">
              <h2 class="h3 mb-0 pt-3 text-center text-black site-section-heading">View order</h2>
             </div>
          <div class="panel-body py-0 ">
            <div class=" table-responsive">
             <table class="table table-bordered">  

                <thead class="text-center text-primary">
                  <tr>
        <!---====================================table start====================================--->
      				
      				<th class="product-name">Sr.No</th>
      				<th class="product-name">Customer Email</th>
      				<th class="product-name">Invoice No.</th>
      			    <th class="product-name">Product Title</th>
                 
                   
                    <th class="product-name">Product Qty</th><!---new Add Invoice--->
                    <th class="product-name">Product Size</th>
                    <th class="product-name">Order Date</th>
                   <!--- <th class="product-name">Date</th>--->
                    <th class="product-name">Total Amount</th>
                    <th class="product-name">order Status</th>
                    <th class="product-name">Delete</th>
                   
                    
                    </tr>
                </thead>

        <tbody class="text-center text-black">
                  <?php 

                        $i=0;
                        	$get_co="SELECT * FROM c_order";
      						$run_co=mysqli_query($conn,$get_co);
      						
      						while($row_co=mysqli_fetch_array($run_co)){

      						$c_id=$row_co['c_id'];
      						$o_id=$row_co['o_id'];
      						$p_id=$row_co['p_id'];
      						$due_amount=$row_co['due_amount'];
      						$invoice_no=$row_co['invoice_no'];
      						$p_qty=$row_co['p_qty'];
      						$sizes=$row_co['size'];
                  			$o_date=$row_co['o_date']; 
                   			$o_status=$row_co['o_status'];

                  	$get_p="SELECT * FROM products WHERE p_id='$p_id'";
      					   $run_p=mysqli_query($conn,$get_p);
      					   $row_p=mysqli_fetch_array($run_p);

      					   $p_title=$row_p['p_title'];
      					   $p_price=$row_p['p_price'];

      					   $get_c="SELECT c_email FROM customers WHERE c_id='$c_id'";
      					   $run_c=mysqli_query($conn,$get_c);
      					   $row_c=mysqli_fetch_array($run_c);

      					   $c_email=$row_c['c_email'];


                 		   $i++;

                         
                  ?>
                  <tr>
                    <td class="product-name"><?php echo $i; ?></td>

                      <td><?php echo $c_email ?></td>
                  
          
                    <td><?php echo $invoice_no; ?></td> 

                     <td><?php echo $p_title; ?></td> 

                      <td><?php echo $p_qty; ?></td> 

                       <td><?php echo $sizes; ?></td> 


                   <td class="product-name"><?php echo  $o_date; ?></td> 

                    <td class="product-name">INR.<?php echo $due_amount; ?></td> 

                  <!---  <td class="product-name"><?php  ///echo $p_date; ?></td>--->

                    <td class="product-name"><?php  echo $o_status; ?></td>

                      <td>
                      
                        <a href="index.php?del_order=<?php echo $o_id ?>" ><span class="btn btn-primary height-auto btn-sm">X</span></a>
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