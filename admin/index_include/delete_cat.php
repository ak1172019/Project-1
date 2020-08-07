<?php    
        include('includes/db-connect.php');

       if(!isset($_SESSION['a_email'])){

          echo "<script>window.open('login.php','_self')</script>";
      }else{




			if(isset($_GET['del_cat'])){

				$del_cat_id=$_GET['del_cat'];

				$del_c="DELETE FROM categories WHERE cat_id='$del_cat_id'";
				$run_del=mysqli_query($conn,$del_c);

				if($run_del){
					echo  "<script>alert('One Categories deleted Successfully')</script>" ;
					echo  "<script>window.open('index.php?view_cat','_self')</script>" ;
				}	
			}


}
 ?>

