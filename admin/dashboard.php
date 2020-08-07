 <div class="site-section py-3 border border-dark rounded" data-aos="fade" >
      <div class="container ">
        <div class="row justify-content-center mb-3">
          <div class="col-md-7 site-section-heading text-center pt-3 ">
            <h2 class="text-primary">Dashboard</h2>
          </div>
        </div>
        <div class="row  p-1  py-0 border border-dark border-bottom-0 border-left-0 border-right-0">
          
       
          
          <div class="col-md-6 col-lg-3 px-1 ">
            <div class="block-38 text-center ">
              <div class="block-38-img ">
                <div class="block-38-header py-3 mb-0  ">
                  <div class="border border-dark py-3">
                  <img src="admin_images/ios7-paper.png" alt="Image placeholder" class="mb-4 bg-info">
                  </div>
                   <div class="border rounded bg-warning py-0 mb-0">
                  <h3 class="block-38-heading h4">Produscts</h3>
                  <span class="number text-dark"><?php echo $count_p; ?></span><p class="block-38-subheading p-1 mb-1 bg-info text-white "><a href="index.php?view_product" class="text-white"><strong> View Details</strong> </a> </p>
                </div>
                </div>
               <!--- <div class="block-38-body">
                  <p>There is nothing that escaped to the agony of the smallest of the duties of no difference between the accepted way of life or the pleasure of an unmarried woman. </p>
                </div>--->
              </div>
            </div>
          </div>


           <div class="col-md-6 col-lg-3 px-1">
            <div class="block-38 text-center">
              <div class="block-38-img">
                <div class="block-38-header py-3 mb-0">
                  <div class="border border-dark py-3">
                  <img src="admin_images/ios7-people-outline.png" alt="Image placeholder" class="mb-4 bg-info">
                  </div>
                  <div class="border rounded bg-warning py-0 mb-0">
                  <h3 class="block-38-heading h4">Customers</h3>
                  <span class="number text-dark"><?php echo $count_c; ?></span><p class="block-38-subheading p-1 mb-1 bg-info text-white "><a href="index.php?view_customer" class="text-white"><strong> View Details</strong> </a> </p>
                </div>
                </div>
               <!--- <div class="block-38-body">
                  <p>There is nothing that escaped to the agony of the smallest of the duties of no difference between the accepted way of life or the pleasure of an unmarried woman. </p>
                </div>--->
              </div>
            </div>
          </div>


             <div class="col-md-6 col-lg-3 px-1">
            <div class="block-38 text-center">
              <div class="block-38-img">
                <div class="block-38-header py-3 mb-0">
                  <div class="border border-dark py-3">
                  <img src="admin_images/filing.png" alt="Image placeholder" class="mb-4 bg-info">
                  </div>
                   <div class="border rounded bg-warning py-0 mb-0 ">
                  <h3 class="block-38-heading h4">Product Categories</h3>
                  <span class="number text-dark"><?php echo $count_p_c; ?></span><p class="block-38-subheading p-1 mb-1 bg-info text-white"><a href="index.php?view_p_cat" class="text-white"><strong> View Details</strong> </a> </p>
                  </div>
                </div>
               <!--- <div class="block-38-body">
                  <p>There is nothing that escaped to the agony of the smallest of the duties of no difference between the accepted way of life or the pleasure of an unmarried woman. </p>
                </div>--->
              </div>
            </div>
          </div>

         
          <div class="col-md-6 col-lg-3 px-1">
            <div class="block-38 text-center">
              <div class="block-38-img">
                <div class="block-38-header py-3 mb-0">
                  <div class="border border-dark py-3">
                  <img src="admin_images/ios7-cart-outline.png" alt="Image placeholder" class="mb-4 bg-info">
                  </div>
                  <div class="border rounded bg-warning py-0 mb-0">
                  <h3 class="block-38-heading h4">Orders</h3>
                  <span class="number text-dark"><?php echo $count_c_order; ?></span><p  class="block-38-subheading p-1 mb-1 bg-info"><a href="index.php?view_order" class="text-white"><strong> View Details</strong> </a></p>
                </div>
                </div>
               <!--- <div class="block-38-body">
                  <p>There is nothing that escaped to the agony of the smallest of the duties of no difference between the accepted way of life or the pleasure of an unmarried woman. </p>
                </div>--->
              </div>
            </div>
          </div>
         
         
        </div>
      </div>
    </div>





       
        <div class="container py-3">
        <div class=" row mb-5 py-5 border border-dark" data-aos="fade">


         <div class="col-md-8 px-3 ">
          <div class="panel panel-primary">

          <div class="panel-heading site-section-heading  pt-1">
            <h5 class="panel-title">NEW ORDERS</h5>
          </div>
        
        
        
             <div class="panel-body p-0  py-0 border">
            <div class=" table-responsive">
             <table class="table table-bordered ">  

                <thead class="text-center text-primary">
                  <tr>
        <!---====================================table start====================================--->
      
                    <th class="product-name">Order.No</th>
                    <th class="product-name">Customer Email</th>
                    <th class="product-name">Invoce No.</th><!---new Add Invoice--->
                    <th class="product-name">Product-Id</th>
                    <th class="product-name">size</th>
                    <th class="product-name">Qty</th>
                    <th class="product-name">total</th>
                    <th class="product-name">Date</th><!---new Add size --->
                    <th class="product-name">Status</th><!---new Add order date--->
                    
                    </tr>
                </thead>

        <tbody class="text-center text-black">
                  <?php 

                        $i=0;
                        $get_order="SELECT * FROM c_order ORDER BY 1 DESC LIMIT 0,5";
                        $run_order=mysqli_query($conn,$get_order);

                        while($row_o=mysqli_fetch_array($run_order)) {
                         
                              $o_id=$row_o['o_id'];
                              $c_id=$row_o['c_id'];
                              $p_id=$row_o['p_id'];
                              $invoice_no=$row_o['invoice_no'];
                              $due_amount=$row_o['due_amount'];
                              $p_qty=$row_o['p_qty'];
                              $sizes=$row_o['size'];
                              $o_status=$row_o['o_status'];
                              $o_date=$row_o['o_date'];
                              $i++;

                          $get_customer="SELECT c_email FROM customers WHERE c_id='$c_id' ";
                          $run_customer=mysqli_query($conn,$get_customer);
                          $fetch_c=mysqli_fetch_array($run_customer);
                          $c_email=$fetch_c['c_email'];
                          
                  ?>
                  <tr>
                    <td class="product-name"><?php echo $i; ?></td>

                      <td><?php echo $c_email; ?></td>
                    
                    <td class="product-name"><?php  echo $invoice_no; ?></td>
          
                    <td><?php echo $p_id; ?></td> 

                   <td class="product-name"><?php echo $sizes; ?></td> 

                    <td class="product-name"><?php echo $p_qty; ?></td> 

                    <td class="product-name"><?php echo $due_amount; ?></td>

                    <td class="product-name"><?php  echo $o_date; ?></td>

                    <td class="product-name"><?php  echo $o_status; ?></td>

                 
                      
                     

                    </tr>

                <?php  } ?>

                </tbody>
              </table>
              </div>
             </div> 

            </div>
            </div>
          
        <!---====================================table end====================================--->
          

       <!---====================================admin Info start====================================--->     
          <div class="col-md-4 px-1 py-0">
            <div class="block-38 text-center">
              <div class="block-38-img">
                <div class="block-38-header py-1 mb-0">
                   <div class="border rounded border-dark border-bottom-0">
                  <img src="index_include/user_images/<?php echo $a_img ?>" alt="Image placeholder" class="border mb-4">
                     </div>
                 
                  <div class="border rounded border-dark bg-info py-1 mb-0">
                  <h3 class="mx-2 mb-0 text-black h4"><?php echo $a_name; ?></h3>
                  <p class="block-38-subheading p-0 mb-0 text-white "><?php echo $a_job; ?></p>      
                  </div>

                <div class="site-navbar border border-dark border-top-0">
                <ul class="site-menu text-black" style="list-style: none;">
                  <li class=""><strong>E-mail:</strong> <span><?php echo $a_email; ?></span> </li>
                  <li class=""><strong>contry: </strong> <span><?php echo $a_country; ?></span></li>
                  <li class=""><strong>About:</strong> <span><?php echo $a_about; ?></span></li>
                  </ul>
                 </div>
                

                </div>
               <!--- <div class="block-38-body">
                  <p>There is nothing that escaped to the agony of the smallest of the duties of no difference between the accepted way of life or the pleasure of an unmarried woman. </p>
                </div>--->
              </div>
            </div>
          </div>

       <!---====================================admin Info end====================================--->

        
     
    </div>
</div>

   


   