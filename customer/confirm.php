<?php 


      session_start();


      if(!isset($_SESSION['c_email'])){
        echo "<script>window.open('../checkout.php','_self')</script>";
      }else{
      require_once("includes/db-connect.php");
       require_once("../function/functions.php");

        if(isset($_GET['order_id'])){
             $ud_id=$_GET['order_id'];

        
                              }
                              
     
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ShopMax &mdash; Colorlib e-Commerce Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="../fonts/icomoon/style.css">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/jquery-ui.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">


    <link rel="stylesheet" href="../css/aos.css">

    <link rel="stylesheet" href="../css/style.css">
     <link rel="stylesheet" href="../css/mystyle.css">
    
  </head>
  <body>

    <div class="site-wrap">
  
      <?php require_once("includes/navbar.php");

            
       ?>



<div class="site-section py-5">

  <div class="container ">
    <div class="row ">
       
      <?php  require_once("includes/sbma.php"); ?>

            <div class="col-md-9 order-2 mb-1 mb-md-0 float-md-left">
            <div class="border p-5 rounded mb-3">

   <h3 class="mb-3 h5 text-uppercase  d-block text-center">Please Confirm Your Payment</h3>

            <form accept="confirm.php?ud_id=<?php echo $ud_id ; ?>" method="POST" enctype="multipart/form-data" class=" p-3 ">
                
 <?php 


             $ud_id=$_GET['order_id'];

             $get_c_order="SELECT * FROM c_order WHERE o_id=$ud_id";
             $run_c_order=mysqli_query($conn,$get_c_order);
             $rows_co=mysqli_fetch_array($run_c_order);

              $p_id=$rows_co['p_id'];
              $c_id=$rows_co['c_id'];
              $due_amount=$rows_co['due_amount'];
              $invoice_no=$rows_co['invoice_no'];
              $p_qty=$rows_co['p_qty'];
              $size=$rows_co['size'];
   ?>      

                <div class="form-group row mb-5 ">
                     <div class="col-md-12">
                      <label for="invoice_no"  class="text-black">Invoice Number
                       </label>
                       <input type="text" class="form-control" id="" name="invoice_no" placeholder="" value="<?php echo $invoice_no ; ?>">
                      </div>
                     </div> 

                   

                  <div class="form-group row mb-5 ">
                     <div class="col-md-12">
                      <label for="amount"  class="text-black">Amount
                       </label>
                       <input type="text" class="form-control" id="" name="amount" placeholder="" value="<?php echo $due_amount ; ?>">
                      </div>
                     </div>

                    <div class="form-group row mb-5  ">
                   <div class="col-md-12">
                  <label for="payment_mode"  class="text-black">Payment Mode
                  </label>

                  <select class="form-control " name="payment_mode" required="">
                    <option>Bank Transfer</option>
                    <option>Paypal</option>
                    <option>PayMoney</option>
                    <option>PayTM</option>
                  </select>
                </div>
                 </div> 

                  <div class="form-group row mb-5 ">
                     <div class="col-md-12">
                      <label for="transaction_id"  class="text-black">Transaction ID
                       </label>
                       <input type="text" class="form-control" id="transaction_id" name="t_id" placeholder="" required="">
                      </div>
                     </div>


                  <div class="form-group row mb-5  ">
                   <div class="col-md-12">
                    <label for="payment_date"  class="text-black">Payment Date
                  </label>
                  <input type="date" class="form-control" id="" name="date" placeholder="" required="">
                </div>
                 </div>

                  <div class="row justify-content-md-center ">    
                   <div class="col-lg-6">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Confirm Payment" name="confirm_payment" >
                     </div>
                    </div>

                   </form>

   <?php 
   
          if(isset($_POST['confirm_payment'])){

              $invoice_no=$_POST['invoice_no'];
              $amount=$_POST['amount'];
              $payment_mode=$_POST['payment_mode'];
              $ref_id=$_POST['t_id'];
              $date=$_POST['date'];
              $complete="Complete";

              $insert_payment="INSERT INTO payment(invoice_no, amount, pmt_mode, ref_no, pmt_date) VALUES ('$invoice_no','$amount','$payment_mode','$ref_id','$date')";
              $run_insert=mysqli_query($conn,$insert_payment);

                //customer order table update
              $update_q="UPDATE c_order SET o_status='$complete' WHERE o_id='$ud_id'";
              $run_update=mysqli_query($conn,$update_q);

                //pendig order table update
              $up_q="UPDATE o_pending SET o_status='$complete' WHERE o_id='$ud_id'";
              $run_up=mysqli_query($conn, $up_q);

              echo "<script>alert('Your order Placed')</script>";
              echo "<script>window.open('index.php?my_order','_self')</script>";

          }

   ?>                


            
</div>
</div>



        </div>

     </div>      
    </div>



  </div>
      
  </div>    

    <?php include("includes/footer.php"); ?>
    
  </div>

  <script src="../js/jquery-3.3.1.min.js"></script>
  <script src="../js/jquery-ui.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/aos.js"></script>

  <script src="../js/main.js"></script>
    
  </body>
</html>

<?php } ?>