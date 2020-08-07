<?php    
       
       
       if(!isset($_SESSION['c_email'])){

          echo "<script>window.open('../checkout.php','_self')</script>";
      }else{




			if(isset($_GET['del_fav'])){

				$del_fav_id=$_GET['del_fav'];

				$del_fav="DELETE FROM fav WHERE fav_id='$del_fav_id'";
				$run_del=mysqli_query($conn,$del_fav);

				if($run_del){
					echo  "<script>alert('Product Removed Successfully')</script>" ;
					echo  "<script>window.open('index.php?my_fav','_self')</script>" ;
				}	
			}


}
 ?>

