<?php    
        include('includes/db-connect.php');

       if(!isset($_SESSION['a_email'])){

          echo "<script>window.open('login.php','_self')</script>";
      }else{




			if(isset($_GET['del_p_cat'])){

				$del_pc_id=$_GET['del_p_cat'];

				$del_pc="DELETE FROM p_categories WHERE p_cat_id='$del_pc_id'";
				$run_del=mysqli_query($conn,$del_pc);

				if($run_del){
					echo  "<script>alert('One Categories deleted Successfully')</script>" ;
					echo  "<script>window.open('index.php?view_p_cat','_self')</script>" ;
				}	
			}


}
 ?>

