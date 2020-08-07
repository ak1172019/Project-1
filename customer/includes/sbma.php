<div class="col-md-3 order-1 mb-1 mb-md-0 float-md-left">
  <!---<h3 class="mb-3 h5 text-uppercase  d-block text-center">Profile</h3>--->
<div class="border p-1 rounded mb-4">
    
      <?php

         $session_c=$_SESSION['c_email']; 
         $get_details_c="SELECT * FROM customers WHERE c_email='$session_c'";
         $run_details=mysqli_query($conn,$get_details_c);
         $fetch_details=mysqli_fetch_array($run_details);

          $c_fname=$fetch_details['c_fname'];
          $c_img=$fetch_details['c_img'];

            if(!isset($_SESSION['c_email'])){

            }else{
              echo "<center>
        <img src='customer_images/$c_img' class='img-responsive img-fluid '>
      </center>
      <h3 class='py-3 mb-3 h6 text-uppercase text-black d-block text-center'>$c_fname</h3>";
            }
      ?>
      

      <ul class="list-unstyled mb-0 nav-pills">
       
        <li class="mb-3 nav-link <?php if(isset($_GET['my_order'])){echo 'active';} ?>"><a href="index.php?my_order" class="d-flex" value=""><span class="icon-suitcase btn-outline-primary btn-sm btn-block text-black"> My Order</span></a></li>
       
        <li class="mb-3 nav-link <?php if(isset($_GET['my_fav'])){echo 'active';} ?>"><a href="index.php?my_fav" class="d-flex" value=""><span class="icon-heart-o  btn-outline-primary btn-sm btn-block text-black"> My favaroit </span></a></li>

        <li class="mb-3 nav-link <?php if(isset($_GET['pay_offline'])){echo 'active';} ?>"><a href="index.php?pay_offline" class="d-flex" value=""><span class="icon-calculator  btn-outline-primary btn-sm btn-block text-black"> Pay Offline</span></a></li>

       <!--- <li class="mb-3 nav-link <?php if(isset($_GET['my_address'])){echo 'active';} ?>"><a href="index.php?my_address" class="d-flex" value=""><span class="icon-person  btn-outline-primary btn-sm btn-block text-black"> My Address </span></a></li> --->

        <li class="mb-3 nav-link <?php if(isset($_GET['edit_act'])){echo 'active';} ?>"><a href="index.php?edit_act" class="d-flex" value=""><span class="icon-pencil  btn-outline-primary btn-sm btn-block text-black"> Edite Account</span></a></li>


        <li class="mb-3 nav-link <?php if(isset($_GET['change_pass'])){echo 'active';} ?>"><a href="index.php?change_pass" class="d-flex" value=""><span class="icon-key  btn-outline-primary btn-sm btn-block text-black"> Change Password </span></a></li>


      

         <li class="mb-3 nav-link <?php if(isset($_GET['delete_act'])){echo 'active';} ?>"><a href="index.php?delete_act" class="d-flex" value=""><span class="icon-trash  btn-outline-primary btn-sm btn-block text-black"> Delete Account</span></a></li>


         <li class="mb-3 nav-link <?php if(isset($_GET['logout'])){echo 'active';} ?>"><a href="index.php?logout" class="d-flex" value=""><span class="icon-cancel  btn-outline-primary btn-sm btn-block text-black"> Logout</span></a></li>

     <!---   <li class="mb-1 nav-link <?php ///if(isset($_GET[''])){echo 'active';} ?>"><a href="check.php?" class="d-flex" value=""><span>Pay Offline</span></a></li>--->
      </ul> 
   
</div>
</div>
