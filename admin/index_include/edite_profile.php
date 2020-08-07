<?php    
        include('includes/db-connect.php');

       if(!isset($_SESSION['a_email'])){

          echo "<script>window.open('login.php','_self')</script>";
      }else{



           
        if(isset($_GET['edite_profile'])){

            $e_id=$_GET['edite_profile'];
            $get_a_info="SELECT * FROM admins WHERE a_id='$e_id'";
            $run_ai=mysqli_query($conn,$get_a_info);
            $rows_a=mysqli_fetch_array($run_ai);
            
            $a_name=$rows_a['a_name'];
            $a_email=$rows_a['a_email'];
            $a_country=$rows_a['a_country'];
            $a_contact=$rows_a['a_contact'];
            $a_job=$rows_a['a_job'];
            
            $a_about=$rows_a['a_about'];
            $a_id1=$rows_a['a_id'];
            $a_img1=$rows_a['a_img']; }  


 ?>

       <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"> <a href="index.php?dashboard"><span class="icon-dashboard"></span> Dashboard</a> <span class="mx-2 mb-0">/</span> <a href="index.php?view_user"><strong class="text-black">Update User</strong></a></div>
        </div>
      </div>
    </div>


 <div class="container px-3 ">
            

            <div class=" border mb-5 mb-md-0 center responsive"> <!-- <div class="col-md-6 col-lg-6 mb-4 mb-lg-0">-->
             <div class=" py-3">
              <h2 class="h3 mb-0 pt-3 text-center text-black site-section-heading">Update User info</h2>
             </div>
             <div class="p-3 p-lg-5 ">
         
         <!-- <div class="col-md-">my new-->

          <form action="#" method="POST" enctype="multipart/form-data">



              
                <div class="form-group row">

                       <div class="col-md-12"> 
                      <label class="text-black h6" >User Name:</label>  
                      <input type="text" name="a_name" class="form-control" value="<?php echo $a_name ?>">
                     </div>

                </div>
                <div class="form-group row">
                   <div class="col-md-12"> 
                     <label  class="text-black h6">User Email:</label>
                     <input type="text" name="a_email" class="form-control" required="" value="<?php echo $a_email ?>">
                   </div>
                </div>   

                    <div class="form-group row">
                   <div class="col-md-12"> 
                     <label  class="text-black h6">User Country:</label>
                     <input type="text" name="a_country" class="form-control" required="" value="<?php echo $a_country ?>">
                   </div>
                </div>


                   <div class="form-group row">
                   <div class="col-md-12"> 
                     <label  class="text-black h6">User Contact:</label>
                     <input type="text" name="a_contact" class="form-control" required="" value="<?php echo $a_contact ?>">
                   </div>
                </div>

 

                 <div class="form-group row">
                   <div class="col-md-12"> 
                     <label  class="text-black h6">User Job:</label>
                     <input type="text" name="a_job" class="form-control" required="" value="<?php echo $a_job ?>">
                   </div>
                </div>   




                    <div class="form-group px-3">
                      <div class="form-group row mb-0">
                        <label class="text-black h6 ">Product Images:</label>
                       </div> 
                    
                     <div class="row border">
                      <div class="col-md-4">
                        <label class="text-black h6"> </label>
                        
                        <img class="img-fluid rounded mb-4" src="../admin/index_include/user_images/<?php echo $a_img1 ?>"><input type="file" name="a_img1" class="form-group">
                      </div>
                    </div>
                 </div>


 

                 <div class="form-group row">
                   <div class="col-md-12"> 
                     <label  class="text-black h6">User About:</label>
                     <textarea type="text" name="a_about" class="form-control" required="" value="<?php echo $a_about ?>"></textarea>
                   </div>
                </div>  
 

              <div class="form-group col-md-12 py-3"> 
                <input type="submit" name="update" value="Update User" class="btn btn-info btn-lg btn-block">
              </div> 

          </form>
     <!--   </div>my new-->
 
       </div>      
                 
             </div>

          </div><!--- row--- >
         <!---  </div>--->


 <?php


          if(isset($_POST['update'])){

              $e_id=$_GET['edite_profile'];
             $a_name=mysqli_real_escape_string($conn,$_POST['a_name']);
              $a_email=mysqli_real_escape_string($conn,$_POST['a_email']);
              
                $a_country=mysqli_real_escape_string($conn,$_POST['a_country']);
                 $a_job=mysqli_real_escape_string($conn,$_POST['a_job']);
                  $a_about=mysqli_real_escape_string($conn,$_POST['a_about']);


                    // name = store in server 
              $p_img1=$_FILES['a_img1']['name']; $e_img1=$_FILES['a_img1']['error'];
            
              //temprory name = store in server 
              $t_name1=$_FILES['a_img1']['tmp_name']; $s_img1=$_FILES['a_img1']['size'];
              
              //explode file name and ext. type
              $f_ext1=explode('.', $p_img1);
           
              //actual file extention
              $f_exta1=strtolower(end($f_ext1));
             
              //allowed file extention
              $allowed=array('jpg','jpeg','png');

              //condition

              if(!empty($p_img1) ){
              if(in_array($f_exta1, $allowed)){
                //if error conditon  3,051,973 
                echo "aarray";
                if ($e_img1===0 ) {
                  echo "error";
                  if($s_img1 <= 999999  ){
                        echo "size";

                          $filenew1=uniqid('',true).".".$f_exta1;
                          $f_destination1='../admin/index_include/user_images/'.$filenew1;
                         move_uploaded_file($t_name1, $f_destination1);

                         

                            //upload image in folder 
                         echo "<script>alert(' Successfully uploaded Image !');</script>";
                  }else{ echo "<script>alert(' This File is to big !');</script>";
                         echo "<script>window.open('index.php?view_user','_self')</script>";
                          exit();
                          }

                }else{ echo "<script>alert(' There was an error  uploading file !');</script>";
                       echo "<script>window.open('index.php?view_user','_self')</script>";
                        exit();
                        }

              }else{
                echo "<script>alert('You can not upload this type file !');</script>";
                echo "<script>window.open('index.php?view_user','_self')</script>";
                exit();
              }
            }else{
                  
                  echo "<script>alert('please Upload images of product.!');</script>";
                  echo "<script>window.open('index.php?view_user','_self')</script>";
                  exit();
            } 

         

            $insert_a_query="UPDATE admins SET a_name='$a_name', a_email='$a_email', a_img='$filenew1', a_contact='$a_contact', a_country='$a_country', a_job='$a_job', a_about='$a_about' WHERE a_id='$e_id'";
              $run_a_result=mysqli_query($conn,$insert_a_query);

              // image type is different.
              //enctype=multipart/form-data

              



              if($run_a_result){
                echo "<script>alert('product details Updated Successfully !');</script>";
                echo "<script>window.open('index.php?view_user','_self')</script>";
              }else{
                echo "Database Access Failed:".mysqli_error($conn);
              }

              mysqli_free_result($run_p_result);
              mysqli_close($conn);
} 

}
 ?>