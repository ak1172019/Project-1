<?php


      if(!isset($_SESSION['c_email'])){
          echo "<script>alert('Register Or log In!')</script>";
        echo "<script>window.open('../checkout.php','_self')</script>";
      }else{

       session_destroy();

        echo "<script>window.open('../index.php','_self')</script>";

      }
?>