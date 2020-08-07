<?php 

     

      if(!isset($_SESSION['c_email'])){
          echo "<script>alert('Register Or log In!')</script>";
        echo "<script>window.open('../checkout.php','_self')</script>";
      }else{


          
?>



<div class="col-md-9 order-2 mb-1 mb-md-0 float-md-left">
<div class="border p-3 rounded mb-4">


    <div class="p-4  mb-0 text-center">
              <h3 class=" text-danger h3 text-uppercase">Delete Account</h3>
              <p class="mb-0 text-info">Do You Really Want Delete Account</p>
            </div>

    
   <!---<h3 class="mb-3 h5 text-uppercase  d-block text-center">Pay Offline</h3>
        <h6 class="text-center">Using Below Method</h6>--->
     

        <div class=" col-md-12 ">
          <form action="" method="POST"  class="p-3">

              <div class="row justify-content-md-center ">
                <div class="col-lg-9">
                  <input type="submit" name="yes" value="Yes , I Want to DELETE !" class="btn btn-danger btn-block">
                  <input type="submit" name="no" value="No , I Dont Want!" class="btn btn-info btn-block" >
                </div>
              </div>

          </form>
            
        </div >

	 	


    

</div>
</div>
<?php
          $c_email=$_SESSION['c_email'];                              
          
            if(isset($_POST['yes'])){
              $del_c="DELETE FROM customers WHERE c_email='$c_email'";
              $run_del=mysqli_query($conn,$del_c);
              
                if($run_del){
                      session_destroy();
                       echo "<script>alert('Account is Deleted')</script>";
                   echo "<script>window.open('../index.php','_self')</script>";
              }
            }

 ?>


<?php 
      
}
?>