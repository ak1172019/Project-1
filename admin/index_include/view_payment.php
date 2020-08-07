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
          <div class="col-md-12 mb-0"> <a href="index.php?dashboard"><span class="icon-dashboard"></span> Dashboard</a> <span class="mx-2 mb-0">/</span> <a href="index.php?view_product"><strong class="text-black">View Payment</strong></a></div>
        </div>
      </div>
    </div>
          <div class="panel panel-primary">


 	  <div class=" py-3">
              <h2 class="h3 mb-0 pt-3 text-center text-black site-section-heading">View Payment</h2>
             </div>
          <div class="panel-body py-0 ">
            <div class=" table-responsive">
             <table class="table table-bordered">  

                <thead class="text-center text-primary">
                  <tr>
        <!---====================================table start====================================--->
      				
      				<th class="product-name">Payment.No</th>
              <th class="product-name">Invoice No.</th>
                <th class="product-name">Amount Paid</th>
                <th class="product-name">Ref No.</th>
                <th class="product-name">payment Mode.</th>
                
      				
                    <th class="product-name">Payment Date</th>
                   <!--- <th class="product-name">Date</th>--->
                    <th class="product-name">Delete Payment</th>
                  
                   
                    
                    </tr>
                </thead>

        <tbody class="text-center text-black">
                  <?php 

                        $i=0;
                        	$get_payment="SELECT * FROM payment";
      						$run_payment=mysqli_query($conn,$get_payment);
      						
      						while($row_payment=mysqli_fetch_array($run_payment)){

      						$pmt_id=$row_payment['pmt_id'];
      						$pmt_mode=$row_payment['pmt_mode'];
      						$ref_no=$row_payment['ref_no'];
      						$amount=$row_payment['amount'];
      						$invoice_no=$row_payment['invoice_no'];
      						$pmt_date=$row_payment['pmt_date'];
      						



                 		   $i++;

                         
                  ?>
                  <tr>
                    <td class="product-name"><?php echo $i; ?></td>

                      <td><?php echo $invoice_no ?></td>
                  
          
                    <td><?php echo $amount; ?></td> 

                     <td><?php echo $ref_no; ?></td> 

                      <td><?php echo $pmt_mode; ?></td> 

            


                   <td class="product-name"><?php echo  $pmt_date; ?></td> 

                    

                      <td>
                      
                        <a href="index.php?del_payment=<?php echo $pmt_id ?>" ><span class="btn btn-primary height-auto btn-sm">X</span></a>
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