<?php 



      if(!isset($_SESSION['c_email'])){
          echo "<script>alert('Register Or log In!')</script>";
        echo "<script>window.open('../checkout.php','_self')</script>";
      }else{


      require_once("includes/db-connect.php");
      require_once("../function/functions.php");
    
    



?>


<div class="col-md-9 order-2 mb-1 mb-md-0 float-md-left">
<div class="border p-3 rounded mb-4">


    <div class="p-4  mb-0 text-center">
              <h3 class=" text-primary h3 text-uppercase">Change Password</h3>
              <p class="mb-0 text-info">Add New Password</p>
            </div>

    
   <!---<h3 class="mb-3 h5 text-uppercase  d-block text-center">Pay Offline</h3>
        <h6 class="text-center">Using Below Method</h6>--->
     

        <div class=" col-md-12 ">
          <form action="" method="POST"  class="p-3">
              
              <div class="form-group row mb-5">
                <div class="col-md-12">
                  <label for="o_password" class="text-black">Enter Your Current Password</label>
                  <input type="password" name="o_password" class="form-control" id="o_password" required="">
                </div>
              </div>

              <div class="form-group row mb-5">
                <div class="col-md-12">
                  <label for="n_password" class="text-black">Enter New Password</label>
                  <input type="password" name="n_password" id="n_password" class="form-control" required="">
                </div>
              </div>

              <div class="form-group row mb-5">
                <div class="col-md-12">
                  <label for="n_password" class="text-black">Confirm New Password</label>
                  <input type="password" name="nn_password" id="n_password" class="form-control" required="">
                </div>
              </div>

              <div class="row justify-content-md-center ">
                <div class="col-lg-6">
                  <input type="submit" name="u_password" class="btn btn-primary btn-block" value="Update Password ">
                </div>
              </div>

          </form>
            
        </div >

	 	


    

</div>
</div>

<?php 


    if(isset($_POST['u_password'])){


      $c_email=$_SESSION['c_email'];
      $old_password=$_POST['o_password'];
      $new_password=$_POST['n_password'];
      $new_n_password=$_POST['nn_password'];

      $select_cust="SELECT c_email,c_password FROM customers WHERE c_email='$c_email' AND c_password='$old_password'";
      $run_cust=mysqli_query($conn,$select_cust);

      $check_old_pass=mysqli_num_rows($run_cust);

      if($check_old_pass==0){

        echo "<script>alert('old password is not correct !')</script>";
        exit();
      }

      if($new_password!=$new_n_password){

              echo "<script>alert('New password is not Matched !')</script>";
        exit();
      }

      $update_pass="UPDATE customers SET c_password='$new_password' WHERE c_email='$c_email'";
      $run_pass=mysqli_query($conn,$update_pass);

      echo "<script>alert('Password Changed')</script>";
      echo "<script>window.open('index.php?my_order','_self')</script>";



    }
      
}
?>

