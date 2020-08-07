<?php    
 

       if(!isset($_SESSION['a_email'])){

          echo "<script>window.open('login.php','_self')</script>";
      }else{



              

 
 ?>

     <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"> <a href="index.php?dashboard"><span class="icon-dashboard"></span> Dashboard</a> <span class="mx-2 mb-0">/</span> <a href="index.php?view_slider"><strong class="text-black">View Slider</strong></a></div>
        </div>
      </div>
    </div>







<!---
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li class="active">
              
            </li>
          </ol>
        </div>
      </div>
--->
<!---
      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">View slides</h3>
              </div>
              <div class="panel-body">
<?php    
       

/*
              
      if(isset($_GET['view_slider'])){

        
        $view_slider="SELECT * FROM slider ";
        $run_slider=mysqli_query($conn,$view_slider);

        while($slider_result=mysqli_fetch_array($run_slider)){

            $s_img=$slider_result['s_img'];
            $s_id=$slider_result['s_id'];
            $s_name=$slider_result['s_name'];
*/

?> 
               <div class="col-md-3">
                 <div class="panel panel-primary">
                   <div class="panel-heading">
                     <h3 class="panel-title" align="center"><?php/// echo $s_name ?>  </h3>
                   </div>
                    <div class="panel-body">
                     <img class="img-fluid rounded mb-4" src="index_include/slider/slider_images/<?php /// echo $s_img ?>">
                    </div>
                   <div class="panel-footer">
                     <center>
                      <a href="index?delete_slide=<?php ///echo $s_id; ?>"><span class="icon-cancel"></span></a>
                      <a href="index?edit_slide=<?php ///echo $s_id; ?>"><span class="icon-pencil"></span></a>
                     </center>
                   </div>
                 </div>
                 </div>
<?php ///}} ?>
               </div> 

           
          </div>
        </div>
      </div>--->


  <!---                  
                    <div class="form-group px-3 border">
                      <div class="form-group row mb-0">
                        <label class="text-black h6 ">Product Images:</label>
                       </div> 
                    
                     <div class="row ">
                   
                               <div class="col-md-6 px-3 ">
                        <label class="text-black h6"> </label>
                        <img class="img-fluid rounded mb-4" src="index_include/slider/slider_images/<?php /// echo 'about_1.png' ?>">
                      </div>

                    <div class="col-md-6 px-3 ">
                       <label class="text-black h6"> </label>
                       <img class="img-fluid rounded mb-4" src="index_include/slider/slider_images/<?php ///echo 'about_1.png' ?>">
                    </div>
                    </div>

                    <div class="row ">
                   
                               <div class="col-md-6 px-3 ">
                        <label class="text-black h6"> </label>
                        <img class="img-fluid rounded mb-4" src="index_include/slider/slider_images/<?php ///echo 'about_1.png' ?>">
                      </div>

                    <div class="col-md-6 px-3 ">
                       <label class="text-black h6"> </label>
                       <img class="img-fluid rounded mb-4" src="index_include/slider/slider_images/<?php ///echo 'about_1.png' ?>">
                    </div>
                     
                     
                     
                    </div>
                 </div>

                 --->






 <?php
         
} 

 ?>