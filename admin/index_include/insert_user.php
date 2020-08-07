<?php

        include('includes/db-connect.php');

       if(!isset($_SESSION['a_email'])){

          echo "<script>window.open('login.php','_self')</script>";
      }else{
 
  
?>
      


     <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"> <a href="index.php?dashboard"><span class="icon-dashboard"></span> Dashboard</a> <span class="mx-2 mb-0">/</span> <a href="index.php?insert_p_cat"><strong class="text-black">Insert User</strong></a></div>
        </div>
      </div>
    </div>

     
          <div class="row px-3 py-3">
            <div class=" col-md-12 border mb-5 mb-md-0 center responsive "> <!-- <div class="col-md-6 col-lg-6 mb-4 mb-lg-0">-->
              <div class=" py-3">
              <h2 class="h3 mb-0 pt-3 text-center text-black site-section-heading">Insert User</h2>
             </div>
             <div class="p-3 p-lg-5 ">
         
         <!-- <div class="col-md-">my new-->
        
               <form action="" method="POST" enctype="multipart/form-data">

                
                <div class="form-group row">
                       <div class="col-md-12"> 
                      <label class="text-black h6" >User Name:</label>  
                      <input type="text" name="a_name" class="form-control">
                     </div>

                </div>
                <div class="form-group row">
                   <div class="col-md-12"> 
                     <label  class="text-black h6">User Email:</label>
                     <input type="text" name="a_email" class="form-control" required="">
                   </div>
                </div>   


                   <div class="form-group row">
                   <div class="col-md-12"> 
                     <label  class="text-black h6">User Password:</label>
                     <input type="password" name="a_password" class="form-control" required="">
                   </div>
                </div>


                  <div class="form-group row">
                   <div class="col-md-12"> 
                     <label  class="text-black h6">User Country:</label>
                     <input type="text" name="a_country" class="form-control" required="">
                   </div>
                </div>

                 <div class="form-group row">
                   <div class="col-md-12"> 
                     <label  class="text-black h6">User Job:</label>
                     <input type="text" name="a_job" class="form-control" required="">
                   </div>
                </div>       

                 <div class="form-group row">
                   <div class="col-md-12"> 
                     <label  class="text-black h6">User Image:</label>
                     <input type="file" name="a_img1" class="form-control" required="">
                   </div>
                </div>  
 

                 <div class="form-group row">
                   <div class="col-md-12"> 
                     <label  class="text-black h6">User About:</label>
                     <textarea type="text" name="a_about" class="form-control" required=""></textarea>
                   </div>
                </div>  
 

              <div class="form-group col-md-12 py-3"> 
                <input type="submit" name="submit" value="Insert User" class="btn btn-info btn-lg btn-block">
              </div> 

          </form>
     <!--   </div>my new-->
 
       </div>      
                 
             </div>

          </div><!--- row--- >
         <!---  </div>--->

    
  
<?php




if(isset($_POST['submit'])){

           
             $a_name=mysqli_real_escape_string($conn,$_POST['a_name']);
              $a_email=mysqli_real_escape_string($conn,$_POST['a_email']);
               $a_password=mysqli_real_escape_string($conn,$_POST['a_password']);
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
                         echo "<script>window.open('index.php?insert_product','_self')</script>";
                          exit();
                          }

                }else{ echo "<script>alert(' There was an error  uploading file !');</script>";
                       echo "<script>window.open('index.php?insert_product','_self')</script>";
                        exit();
                        }

              }else{
                echo "<script>alert('You can not upload this type file !');</script>";
                echo "<script>window.open('index.php?insert_product','_self')</script>";
                exit();
              }
            }else{
                  
                  echo "<script>alert('please Upload images of product.!');</script>";
                  echo "<script>window.open('index.php?insert_product','_self')</script>";
                  exit();
            } 
            

          
                 //insert without size.
          $insert_admins="INSERT INTO admins(a_name, a_email, a_password, a_img, a_contact, a_country, a_job, a_about) VALUES ('$a_name','$a_email','$a_password','$filenew1','$a_contact', '$a_country','$a_job','$a_about')";

          $run_a_result=mysqli_query($conn,$insert_admins);

             
              
              // image type is different.
              //enctype=multipart/form-data

              



              if($run_a_result){
                echo "<script>alert('User Inserted Successfully !');</script>";
                echo "<script>window.open('index.php?view_user','_self')</script>";
              }else{
                echo "Database Access Failed:".mysqli_error($conn);
              }

             // mysqli_free_result($run_p_result);
             // mysqli_close($conn);
} 


 ?>
     

  




<?php } 
?>