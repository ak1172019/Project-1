<?php 

   session_start();
   include("include/db-connect.php");
   include("function/functions.php");


    if(isset($_GET['c_id'])){

    	$c_id=$_GET['c_id'];


          $ip_add=get_user_IP();
          $o_status="pendding";
          $invoice_no=mt_rand();
          $sel_cart="SELECT * FROM cart WHERE ip_add='$ip_add'";
          $run_cart=mysqli_query($conn,$sel_cart);

         while ($row_cart=mysqli_fetch_array($run_cart)){

          $pro_id=$row_cart['p_id'];
          $p_qty=$row_cart['p_qty'];
          $sizes=$row_cart['size'];

          $get_p="SELECT * FROM products WHERE p_id = ' $pro_id' ";
          $p_run=mysqli_query($conn,$get_p);

          while($row_p=mysqli_fetch_array($p_run)){

            $p_title=$row_p['p_title'];
            $p_price=$row_p['p_price'];
            $sub_total=$p_price*$p_qty;

            $insert_c_order="INSERT INTO c_order (c_id,p_id, due_amount, invoice_no, p_qty, size, o_date, o_status) VALUES('$c_id','$pro_id','$sub_total','$invoice_no','$p_qty','$sizes', NOW() ,'$o_status')";
            $run_insert=mysqli_query($conn,$insert_c_order);

            $insert_pending_o="INSERT INTO o_pending (c_id, invoice_no, p_id, p_qty, size, o_status) VALUES ('$c_id','$invoice_no','$pro_id','$p_qty','sizes','$o_status')";
            $run_pending_o=mysqli_query($conn,$insert_pending_o);

            $del_cart="DELETE FROM cart WHERE ip_add='$ip_add'";
            $run_del=mysqli_query($conn,$del_cart);


    }

    	  	

    	  }
    	  

    }
			echo "<script>alert('your order submited')</script>";
    	  	echo "<script>window.open('customer/myaccount.php?my_order' ,'_self')</script>";

?>