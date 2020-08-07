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
          <div class="col-md-12 mb-0"> <a href="index.php?dashboard"><span class="icon-dashboard"></span> Dashboard</a> <span class="mx-2 mb-0">/</span> <a href="index.php?view_p_cat"><strong class="text-black">View product categories</strong></a></div>
        </div>
      </div>
    </div>

          <div class="panel panel-primary">


    <div class=" py-3">
              <h2 class="h3 mb-0 pt-3 text-center text-black site-section-heading">View Product Categories</h2>
             </div>
<div class="panel-body py-0 ">
            <div class=" table-responsive">
             <table class="table table-bordered">  

                <thead class="text-center text-primary">
                  <tr>
        <!---====================================table start====================================--->
              
              <th class="product-name">Sr.No</th>          
                   
                    <th class="product-name">title</th><!---new Add Invoice--->
                    <th class="product-name">Description</th>
                    <th class="product-name">Delete</th>
                   
                   
                    </tr>
                </thead>

        <tbody class="text-center text-black">
                  <?php 

                  $i=0;
                  $get_p_cat="SELECT * FROM p_categories ORDER BY 1 DESC ";
                  $run_p_cat=mysqli_query($conn,$get_p_cat);
                  
                  while($row_p_cat=mysqli_fetch_array($run_p_cat)){

                  $pro_cat_id=$row_p_cat['p_cat_id'];
                  $p_cat_title=$row_p_cat['p_cat_title'];
                  $p_cat_desc=$row_p_cat['p_cat_desc'];
                  $i++;
             

                    ?>       
                 
                  <tr>
                    <td class="product-name"><?php echo $i; ?></td>

                      <td><?php echo $p_cat_title; ?></td>
                    
              

                    <td class="product-name"><?php  echo $p_cat_desc; ?></td>
          
                 
                      <td>  <a href="index.php?del_p_cat=<?php echo $pro_cat_id ?>" ><span class="btn btn-primary height-auto btn-sm">X</span></a>
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