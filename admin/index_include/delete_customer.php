<?php 
        
       

       if(!isset($_SESSION['a_email'])){

          echo "<script>window.open('login.php','_self')</script>";
      }else{
 



      	if(isset($_GET['del_customer'])){

      		$delete_id=$_GET['del_customer'];

      		$delete_customer="DELETE FROM customers WHERE c_id='$delete_id'";

      		$run_delete=mysqli_query($conn,$delete_customer);

      		if($run_delete){
      			echo "<script>alert(selected customer deleted !)</script>";
      			echo "<script>window.open('index.php?view_customer','_self')</script>";
      		}

      	}







 }