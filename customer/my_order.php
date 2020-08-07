<?php 

      

      if(!isset($_SESSION['c_email'])){
          echo "<script>alert('Register Or log In!')</script>";
        echo "<script>window.open('../checkout.php','_self')</script>";
      }else{


      
    



?>


  <div class="col-md-9 order-2 mb-1 mb-md-0 float-md-left">
<div class="border p-1 rounded mb-4">


<div class="p-4  mb-3 text-center">
              <h3 class=" text-primary h3 text-uppercase">My Order</h3>
              <p class="mb-0 text-info">All Your Order Status</p>
            </div>

	 




	 		<div class=" col-md-12 ">
              <table class="table table-bordered text-center ">
                
               

                <thead>
                  <tr>
                    <!---<th class="product-thumbnail">Image</th>--->
                    <th class="text-black">Sr.No</th>
                    <th class="text-black">Price</th>
                    <th class="text-black">Invoce</th><!---new Add Invoice--->
                    <th class="text-black">Qty</th>
                    <th class="text-black">Size</th><!---new Add size --->
                    <th class="text-black">Order Date</th><!---new Add order date--->
                    <th class="text-black">Payment</th><!---new Add paid unp--->
                    <th class="text-black">Status</th><!---new Add stutus--->
                    <!---<th class="product-total">Total</th>
                    <th class="product-remove">Remove</th>--->
                  </tr>
                </thead>

				<tbody>

          <?php 

          $session_c=$_SESSION['c_email']; 
         $get_details_c="SELECT c_id FROM customers WHERE c_email='$session_c'";
         $run_details=mysqli_query($conn,$get_details_c);
         $fetch_details=mysqli_fetch_array($run_details);

          $c_id=$fetch_details['c_id']; 


            $get_o="SELECT * FROM c_order WHERE c_id='$c_id'";
            $run_o=mysqli_query($conn,$get_o);

                $i=0;

             while ($row_o=mysqli_fetch_array($run_o)) {
                  
                  $o_id=$row_o['o_id'];
                  $due_amount=$row_o['due_amount'];
                  $invoice_no=$row_o['invoice_no'];
                  $p_qty=$row_o['p_qty'];
                  $size=$row_o['size'];
                  $o_date=substr($row_o['o_date'], 0,11);
                  $o_status=$row_o['o_status'];

                  $i++;

                  if($o_status=="pendding"){

                      $o_status="Unpaid";

                  }else{
                    $o_status="Paid";
                  }
            

           ?>


                  <tr>
                    <td class="product-name"><?php echo $i; ?></td>

                    <td><?php echo $due_amount; ?></td>
                   	
                   	<td class="product-name"><?php echo $invoice_no; ?></td>
					
					<td class="product-name"><?php echo $p_qty; ?></td>

                    <td class="product-name"><?php echo $size; ?></td>
                    	
                     <td class="product-name"><?php echo $o_date; ?></td>

                    <td class="product-name"><?php echo $o_status; ?></td>

                   <?php
                        
                        if($o_status=="Unpaid"){


                            echo  "<td class='product-name'><a href='confirm.php?order_id=$o_id;'' target='_blank' class=' btn-primary btn-sm'>Confirm if paid</a></td>";

                            }else {


                            echo  "<td class='product-name'><a href='#' target='_self' class=' btn-success btn-sm'>Confirmed</a></td>";
                            }

                    ?> 

                    
                 

                   
                  </tr>

<?php  } ?>
                  
               </tbody>




              </table>
            </div>


    

</div>
</div>

<?php } ?>