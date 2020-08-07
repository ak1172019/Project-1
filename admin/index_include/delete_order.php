<?php 
        
       

       if(!isset($_SESSION['a_email'])){

          echo "<script>window.open('login.php','_self')</script>";
      }else{
 



      	if(isset($_GET['del_order'])){

      		$d_order_id=$_GET['del_order'];

      		$delete_order="DELETE FROM c_order WHERE o_id='$d_order_id'";

      		$run_delete=mysqli_query($conn,$delete_order);

      		if($run_delete){
      			echo "<script>alert(selected customer deleted !)</script>";
      			echo "<script>window.open('index.php?view_order','_self')</script>";
      		}

      	}







 }