<?php    
        include('includes/db-connect.php');

       if(!isset($_SESSION['a_email'])){

          echo "<script>window.open('login.php','_self')</script>";
      }else{




			if(isset($_GET['del_p'])){

				$del_pro_id=$_GET['del_p'];

				$del_product="DELETE FROM products WHERE p_id='$del_pro_id'";
				$run_del=mysqli_query($conn,$del_product);

				if($run_del){
					echo  "<script>alert('One Product Delete Successfully')</script>" ;
					echo  "<script>window.open('index.php?view_product','_self')</script>" ;
				}	
			}


}
 ?>

