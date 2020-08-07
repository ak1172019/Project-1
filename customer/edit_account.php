<?php 


      if(!isset($_SESSION['c_email'])){
          echo "<script>alert('Register Or log In!')</script>";
        echo "<script>window.open('../checkout.php','_self')</script>";
      }else{
    
    
    
        $c_email=$_SESSION['c_email']; 
        
        $get_customers="SELECT * FROM customers WHERE c_email='$c_email'";
        $run_customer=mysqli_query($conn,$get_customers);

         $rows_c=mysqli_fetch_array($run_customer);

          $c_id=$rows_c['c_id'];
          $c_fname=$rows_c['c_fname'];
          $c_lname=$rows_c['c_lname'];
          $c_add=$rows_c['c_add'];
          $c_postal=$rows_c['c_postal'];
          $c_email=$rows_c['c_email'];
          $c_state=$rows_c['c_state'];
          $c_img=$rows_c['c_img'];
          $c_contact=$rows_c['c_contact'];
         


?>


<div class="col-md-9 order-2 mb-1 mb-md-0 float-md-left">
<div class="border p-3 rounded mb-4">


    <div class="p-4  mb-3 text-center">
              <h3 class=" text-primary h3 text-uppercase">Edit Account</h3>
              <p class="mb-0 text-info">Edite your Details</p>
            </div>

    
         <!--- <form acction="" method="POST" enctype="multipart/form-data" class=" p-3 ">--->
                
                <form  action="index.php?edit_act" method="POST" enctype="multipart/form-data">

              <div class="form-group row ">
                <div class="col-md-6">
                  <label for="c_fname" class="text-black ">First Name <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_fname" name="c_fname" placeholder="First Name" required="" value="<?php echo $c_fname ?>">
                </div>
                <div class="col-md-6">
                  <label for="c_lname" class="text-black">Last Name <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_lname" name="c_lname" placeholder="Last Name" required="" value="<?php echo $c_lname ?>">
                </div>
               </div>

              <div class="form-group">
                 <label class="text-black ">Profile Image</label>
                  <input type="file" name="profile" class="form-control"  required="">
               </div>

               <div class="border p-3 py- rounded mb-4"><span class=img-responsive height="150" width="150"><img src="customer_images/<?php echo $c_img; ?>"height="150" width="150"></span></div>

               <div class="form-group row">
                <div class="col-md-12">
                  <label for="c_address" class="text-black">Address <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_address" name="c_address" placeholder="Street address" required="" value="<?php echo $c_add ?>">
                </div>
              </div>

               <div class="form-group row">
                <div class="col-md-6">
                  <label for="c_state_country" class="text-black">State - City <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_state_country" name="c_state" placeholder="State-city" required="" value="<?php echo $c_state ?>">
                </div>
                <div class="col-md-6">
                  <label for="c_postal_zip" class="text-black">Posta / Zip <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_postal_zip" name="c_postal" placeholder="Postal Code" required="" value="<?php echo $c_postal ?>">
                </div>
              </div>

            <div class="form-group row mb-5">
                <div class="col-md-6">
                  <label for="c_email_address" class="text-black">Email Address <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_email_address" name="c_email" placeholder="Email Address" required="" value="<?php echo $c_email ?>">
                </div>

                <div class="col-md-6">
                  <label for="c_phone" class="text-black">Phone / Mobile <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_phone" name="c_phone" placeholder="Mobile Number" required="" value="<?php echo $c_contact ?>">
                </div>
              </div>

              <div class="row justify-content-md-center ">    
                   <div class="col-lg-6">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Update" name="submit" >
                     </div>
                    </div>
	 </form>

    

</div>
</div>

<?php 
    
    if(isset($_POST['submit'])){


          $ud_id=$c_id;
          $ud_fname=$_POST['c_fname'];
          $ud_lname=$_POST['c_lname'];
          $ud_add=$_POST['c_address'];
          $ud_postal=$_POST['c_postal'];
          $ud_email=$_POST['c_email'];
          $ud_state=$_POST['c_state'];
          $ud_contact=$_POST['c_phone'];
         
          $ud_img=$_FILES['profile']['name'];
          $ud_img_tmp=$_FILES['profile']['tmp_name'];

          move_uploaded_file($ud_img_tmp, "customer_images/$ud_img");

          $update_customer_info="UPDATE customers SET c_fname='$ud_fname', c_lname='$ud_lname', c_email='$ud_email', c_state='$ud_state', c_contact='$ud_contact', c_add='$ud_add', c_postal='$ud_postal', c_img='$ud_img' WHERE c_id='$ud_id'";
          $run_ud_c_info=mysqli_query($conn,$update_customer_info);

          if($run_ud_c_info){

            echo "<script>alert('your details is Updated')</script>";
            echo "<script>window.open('index.php?edit_act','_self')</script>";
          }

    }

}

?>