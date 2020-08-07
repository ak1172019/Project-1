<?php    
        include('includes/db-connect.php');

       if(!isset($_SESSION['a_email'])){

          echo "<script>window.open('login.php','_self')</script>";
      }else{


			if(isset($_GET['del_user'])){

				$del_user=$_GET['del_user'];

				$del_a="DELETE FROM admins WHERE a_id='$del_user'";
				$run_del=mysqli_query($conn,$del_a);

				if($run_del){
					echo  "<script>alert('User Removed Successfully')</script>" ;
					echo  "<script>window.open('index.php?view_user','_self')</script>" ;
				}	
			}


}
 ?>

