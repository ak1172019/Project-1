<?php
 	
 	$conn=mysqli_connect('localhost','root','','shopmax');


  
  //get ip from user

  function get_user_IP(){

    switch (true) {
      case (!empty($_SERVER['HTTP_X_REAL_IP'])): return $_SERVER['HTTP_X_REAL_IP'];
        
        case (!empty($_SERVER['HTTP_CLIENT_IP'])): return $_SERVER['HTTP_CLIENT_IP'];
          
    case (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])): return $_SERVER['HTTP_X_FORWARDED_FOR'];

      default:return $_SERVER['REMOTE_ADDR'];
        
    }
  }


  function add_to_cart(){

       global $conn;

       /*if(!isset($_SESSION['c_email'])){

            if(isset($_GET['add_cart'])){
          echo "<script>window.open('checkout.php','_self')</script>";
              }
       }else{ */

       if(isset($_GET['add_cart'])){

          $ip_add=get_user_IP();
          $pro_id=$_GET['add_cart'];
     
          $p_qty=$_POST['p_qty'];
         
          $p_size=$_POST['sizes'];
        
          $check_product="SELECT * FROM cart WHERE  ip_add='$ip_add' AND p_id='$pro_id'  ";
          $run_check_product=mysqli_query($conn, $check_product);
          
          $cart_rows=mysqli_fetch_array($run_check_product);
          $rows_size=$cart_rows['size'];
          $rows_qty=$cart_rows['p_qty'];
          //print_r($cart_rows);
           

           //pending area for cart update condition
          if (mysqli_num_rows($run_check_product)>0) {
               
           
                
                 echo "<script>alert('Product Already There!');</script>";
                 echo "<script>window.open('shop-single.php?pro_id=$pro_id', '_self')</script>";
           

                   
                    
              
          }else{
                 
               $insert_cart="INSERT INTO cart( p_id, ip_add, p_qty, size ) VALUES ('$pro_id', '$ip_add', '$p_qty' , ' $p_size')"; 
                $run_icart=mysqli_query($conn,$insert_cart);
                echo "<script>alert('Add to Cart!');</script>";
                echo "<script>window.open('shop-single.php?pro_id=$pro_id', '_self')</script>";
          }
   }//else inner
//}///else end
  }




function add_to_fav(){

       global $conn;

       /*if(!isset($_SESSION['c_email'])){

            if(isset($_GET['add_cart'])){
          echo "<script>window.open('checkout.php','_self')</script>";
              }
       }else{ */

       if(isset($_GET['add_fav'])){

          $pro_id=$_GET['add_fav'];
     
            if(isset($_SESSION['c_email'])){
         
          $c_email=$_SESSION['c_email'];

          $get_c="SELECT c_id FROM customers WHERE c_email='$c_email'";
          $run_c=mysqli_query($conn,$get_c);
          $row_c=mysqli_fetch_array($run_c);
          $c_id=$row_c['c_id'];
        
          $check_product="SELECT * FROM fav WHERE c_id='$c_id' AND p_id='$pro_id'  ";
          $run_check_product=mysqli_query($conn, $check_product);
          
          if($fav_rows=mysqli_fetch_array($run_check_product)){

              echo "<script>alert('Already Added To favourite !')</script>";
          }else{

                $insert_fav="INSERT INTO fav(c_id,p_id) VALUES('$c_id','$pro_id')";
                $run_insert=mysqli_query($conn,$insert_fav); 
                

                if($run_insert){
                echo "<script>alert('Added to favourite!');</script>";
                echo "<script>window.open('shop.php','_self')</script>";
                }else{
                echo "Database Access Failed:".mysqli_error($conn);
                     }
                }
           
            }else{
                       echo "<script>alert('log In Added to favourite!');</script>";
                        echo "<script>window.open('checkout.php','_self')</script>";
            }    
  }    
}  


function items(){


         global $conn;
          $ip_add=get_user_IP();   
          $check_items="SELECT * FROM cart WHERE  ip_add='$ip_add' ";
          $run_check_items=mysqli_query($conn,$check_items);
          $count_items=mysqli_num_rows($run_check_items);

          echo $count_items;
}


//get ip from user end


//price count 



function totalprice(){


          global $conn;
          $ip_add=get_user_IP();
          $tp=0;
          $select_cart="SELECT * FROM cart WHERE  ip_add='$ip_add' ";
          $run_cart=mysqli_query($conn,$select_cart);
          while ($record=mysqli_fetch_array($run_cart)) {
                                
                              $p_id=$record['p_id'];
                              $p_qty=$record['p_qty'];
                              $p_size=$record['size'];

                            $get_price="SELECT * FROM products WHERE p_id='$p_id'";
                            $run_price=mysqli_query($conn,$get_price);
                            

                            while ($row_product=mysqli_fetch_array($run_price)) {
                            
                              $subt=$row_product['p_price']*$p_qty;
                              $tp +=$subt;
                            }
                          }echo $tp;
}



//index.php  get products print with limit 

function get_pro(){

	global $conn;

	$get_product="SELECT * FROM products order by 1 DESC LIMIT 0,6";
                                $run_product=mysqli_query($conn,$get_product);
                                  while ($row_product=mysqli_fetch_array($run_product)){
                                  
                                    $pro_id=$row_product['p_id'];
                                    $pro_cat_id=$row_product['p_cat_id'];
                                    $cat_id=$row_product['cat_id'];
                                    $date=$row_product['date'];
                                    $p_title=$row_product['p_title'];
                                    $p_img1=$row_product['p_img1'];
                                    ///$p_img2=$row_product['p_img2'];
                                    ///$p_img3=$row_product['p_img3'];
                                    $p_price=$row_product['p_price'];
                                    $p_keyword=$row_product['p_keyword'];
                                    $p_description=$row_product['p_description'];

                                    echo " <div class='col-lg-4 col-md-6 item-entry mb-4'>
                <a href='shop-single.php?pro_id=$pro_id' class='product-item md-height bg-gray d-block'>
                  <img src='admin/index_include/product_images/$p_img1' alt='Image' class='img-fluid'>
                </a> 
                <h2 class='item-title'><a href='shop-single.php?pro_id=$pro_id'>$p_title</a></h2>
                <strong class='item-price'>Rs. $p_price <del></del> </strong>
                </div>";

}

}


// function use in footer area printing for categories and product categoreis 
 function get_cat(){
 	
       global $conn;
        $get_cats="SELECT cat_id,cat_title FROM categories" ;
        $run_cats=mysqli_query($conn,$get_cats);
                             
       while( $row_cat=mysqli_fetch_array($run_cats)) {

       $c_id=$row_cat['cat_id'];
       $c_title=$row_cat['cat_title'];

        $get_p_n="SELECT p_id FROM products WHERE cat_id='$c_id'";     
        $run_p_n=mysqli_query($conn,$get_p_n);
        $rows_n=mysqli_num_rows($run_p_n);
       echo "<li class='mb-1'><a href='shop.php?cat_id=$c_id' class='d-flex' value='$c_id'><span>$c_title</span><span class='text-black ml-auto'>($rows_n)</span></a></li>";  

      }

 }


 function get_p_cat(){

 	global $conn;
               

       


       $get_p_cats="SELECT p_cat_id, p_cat_title FROM p_categories" ;
       $run_p_cats=mysqli_query($conn,$get_p_cats);
                             
       
        while ($rows=mysqli_fetch_array($run_p_cats)) { 
                $p_cat_id=$rows['p_cat_id'];
                 $p_cat_title=$rows['p_cat_title'];
                  
                $get_p_n="SELECT p_id FROM products WHERE p_cat_id='$p_cat_id'";     
                $run_p_n=mysqli_query($conn,$get_p_n);
                $rows_n=mysqli_num_rows($run_p_n);
       
                  echo "<li class='mb-1'><a href='shop.php?pcat_id=$p_cat_id' class='d-flex'><span>$p_cat_title</span><span class='text-black ml-auto'>($rows_n)</span></a></li>";
            
     }     


       



                            

 }


// function product with categories and product categories
//with product categories
function get_pcat_p(){

    global $conn;
    
        if(isset($_GET['pcat_id'])){
          $p_cat_id=$_GET['pcat_id'];
        $get_p_cats="SELECT * FROM p_categories WHERE p_cat_id='$p_cat_id' " ;
        $run_p_cats=mysqli_query($conn,$get_p_cats);
        $row_p_cats=mysqli_fetch_array($run_p_cats);                       
        $p_cat_title=$row_p_cats['p_cat_title'];  
        $p_cat_desc=$row_p_cats['p_cat_desc'];
        
        $get_product="SELECT * FROM products WHERE p_cat_id='$p_cat_id'";
        $run_product=mysqli_query($conn,$get_product);
        $count_rows=mysqli_num_rows($run_product);
       
        if($count_rows==0){

           echo "<div class='row align'><div class='col-md-12 mb-5'>  <div class='float-md-left'><h2 class='text-black h5'>NO PRODUCT FOUND</h2></div> </div> </div>";

           

        }else{

          echo " <div class='row align'><div class='col-md-12 mb-5'> <div class='float-md-left text-black h5'>$p_cat_title<span class='mx-2 mb-0'>/</span>$p_cat_desc</div> </div> </div>
          <div class='row mb-5'>"; // row mb - 5 is for product list print div start here

         
        }
            
                 while ($row_product=mysqli_fetch_array($run_product)){
                                  
                                    $pro_id=$row_product['p_id'];
                                    $pro_cat_id=$row_product['p_cat_id'];
                                    $cat_id=$row_product['cat_id'];
                                    $date=$row_product['date'];
                                    $p_title=$row_product['p_title'];
                                    $p_img1=$row_product['p_img1'];
                                    //$p_img2=$row_product['p_img2'];
                                    //$p_img3=$row_product['p_img3'];
                                    $p_price=$row_product['p_price'];
                                    $p_keyword=$row_product['p_keyword'];
                                    $p_description=$row_product['p_description'];

           echo " <div class='col-lg-6 col-md-6 item-entry mb-4'>
                    <a href='shop-single.php?pro_id=$pro_id' class='product-item md-height bg-gray d-block'>
                      <img src='admin/index_include/product_images/$p_img1' alt='Image' class='img-fluid'>
                      </a> 
                      <h2 class='item-title'><a href='shop-single.php?pro_id=$pro_id'>$p_title</a></h2>
                      <strong class='item-price'>Rs. $p_price <del></del> </strong></div>";

                              }

          
                  echo "</div>"; // row mb - 5 is for product list print div end here

       }

} 



// function product with categories and product categories
//with categories
function get_cat_p(){

    global $conn;
        if(isset($_GET['cat_id'])){

        $cat_id=$_GET['cat_id'];
        $get_cats_p="SELECT * FROM categories WHERE cat_id='$cat_id' " ;
        $run_cats_p=mysqli_query($conn,$get_cats_p);
        $row_cats_p=mysqli_fetch_array($run_cats_p);                       
        $cat_title=$row_cats_p['cat_title'];  
        $cat_desc=$row_cats_p['cat_desc'];
        
        $get_product="SELECT * FROM products WHERE cat_id='$cat_id'";
        $run_product=mysqli_query($conn,$get_product);
        $count_rows=mysqli_num_rows($run_product);
       
        if($count_rows==0){

           echo "<div class='row align'><div class='col-md-12 mb-5'>  <div class='float-md-left'><h2 class='text-black h5'>NO PRODUCT FOUND</h2></div> </div> </div>";

           

        }else{

          echo " <div class='row align'><div class='col-md-12 mb-5'> <div class='float-md-left text-black h5'>$cat_title<span class='mx-2 mb-0'>/</span>$cat_desc</div> </div> </div>
          <div class='row mb-5'>"; // row mb - 5 is for product list print div start here

         
        }
            
                 while ($row_product=mysqli_fetch_array($run_product)){
                                  
                                    $pro_id=$row_product['p_id'];
                                    $pro_cat_id=$row_product['p_cat_id'];
                                    $cat_id=$row_product['cat_id'];
                                    $date=$row_product['date'];
                                    $p_title=$row_product['p_title'];
                                    $p_img1=$row_product['p_img1'];
                                    ///$p_img2=$row_product['p_img2'];
                                    ///$p_img3=$row_product['p_img3'];
                                    $p_price=$row_product['p_price'];
                                    $p_keyword=$row_product['p_keyword'];
                                    $p_description=$row_product['p_description'];

           echo " <div class='col-lg-6 col-md-6 item-entry mb-4'>
                    <a href='shop-single.php?pro_id=$pro_id' class='product-item md-height bg-gray d-block'>
                      <img src='admin/index_include/product_images/$p_img1' alt='Image' class='img-fluid'>
                      </a> 
                      <h2 class='item-title'><a href='shop-single.php?pro_id=$pro_id'>$p_title</a></h2>
                      <strong class='item-price'>Rs. $p_price <del></del> </strong></div>";

                              }

          
                  echo "</div>"; // row mb - 5 is for product list print div end here

       }


}
?>


<script> $(function (){

    $('(data-toggle="tooltip")').tooltip();
      });
</script>