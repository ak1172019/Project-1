<?php 
        
       

       if(!isset($_SESSION['a_email'])){

          echo "<script>window.open('login.php','_self')</script>";
      }else{
 



      	if(isset($_GET['del_payment'])){

      		$del_payment_id=$_GET['del_payment'];

      		$delete_payment="DELETE FROM payment WHERE pmt_id='$del_payment_id'";

      		$run_delete=mysqli_query($conn,$delete_payment);

      		if($run_delete){
      			echo "<script>alert(selected customer deleted !)</script>";
      			echo "<script>window.open('index.php?view_payment','_self')</script>";
      		}

      	}







 }