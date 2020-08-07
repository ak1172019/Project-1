<?php 
        

       if(!isset($_SESSION['a_email'])){

          echo "<script>window.open('login.php','_self')</script>";
      }else{

?>

	
		
		 <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"> <a href="index.php?dashboard"><span class="icon-dashboard"></span> Dashboard</a> <span class="mx-2 mb-0">/</span> <a href="index.php?insert_slider"><strong class="text-black">Insert Slider</strong></a></div>
        </div>
      </div>
    </div>

     
          <div class="row px-3 py-3">
            <div class=" col-md-12 border mb-5 mb-md-0 center responsive "> <!-- <div class="col-md-6 col-lg-6 mb-4 mb-lg-0">-->
              <div class=" py-3">
              <h2 class="h3 mb-0 pt-3 text-center text-black site-section-heading">Insert Slider</h2>
             </div>
             <div class="p-3 p-lg-5 ">
         
         <!-- <div class="col-md-">my new-->
         	<div class="col-md-12 "> 
              <form action="#" method="POST" enctype="multipart/form-data">



                <div class="form-group row">
                   <div class="col-md-12"> 
                     <label  class="text-black h6">Slider Name:</label>
                     <input type="text" name="slider_name" class="form-control" required="">
                   </div>
                </div>


                    <div class="form-group px-3">
                      <div class="form-group row mb-0">
                        <label class="text-black h6 ">Slider Images:</label>
                       </div> 
                    
                     <div class="row border"> 
                    <div class="col-md-4">
                       <label class="text-black h6"></label>
                       <input type="file" name="file" class="form-group">
                    </div>
                    </div>
                 </div>


              <div class="form-group">
                <br>
                <input type="submit" name="slider" value="Insert Slider" class="btn btn-info btn-lg btn-block">
              </div> 
          </form>
     <!--   </div>my new-->
     </div>
       </div>      
                 
             </div>

          </div><!--- row--- >
         <!---  </div>--->
  

<?php
          if(isset($_POST['slider'])){

       
              $slider_name=mysqli_real_escape_string($conn,$_POST['slider_name']);
              
             
               // name = store in server 
              $s_img1=$_FILES['file']['name'];
               $e_img1=$_FILES['file']['error'];
             
              //temprory name = store in server 
              $t_name1=$_FILES['file']['tmp_name']; 
              $size_img1=$_FILES['file']['size'];
             

              //explode file name and ext. type
              $f_ext1=explode('.', $s_img1);
              
              //actual file extention
              $f_ext_a1=strtolower(end($f_ext1));
             
              //allowed file extention
              $allowed=array('jpg','jpeg','png');


              //checking slider how many there.
              $view_slider="SELECT * FROM slider";
              $run_slider=mysqli_query($conn,$view_slider);
              $count_slider=mysqli_num_rows($run_slider);

              if($count_slider<4){

              //condition

              if(in_array($f_ext_a1, $allowed)){
                //if error conditon
                if ($e_img1===0) {
                  //if($s_img1 < 5000000 && $s_img2 < 5000000 && $s_img3 < 5000000 ){
                         
                         $f_destination1="index_include/slider/slider_images/$s_img1";                 
                         move_uploaded_file($t_name1,$f_destination1);

                            //upload image in folder 
                          echo "Successfully";
                 // }else{echo "<script>alert(This file to Big !)<script>";}
                }else{echo "<script>alert(There was an error  uploading file !)<script>";}

              }else{
                echo "<script>alert(You can not upload this type file !)<script>";
              }


                //insert without sizes
           $insert_s_query="INSERT INTO slider(s_name,s_img) VALUES('$slider_name','$s_img1')";
     
              $run_s=mysqli_query($conn,$insert_s_query);

              // image type is different.
              //enctype=multipart/form-data

            



              if($run_s){
                echo "<script>alert('Slider image Uploaded Successfully');</script>";
                echo "<script>window.open('index.php?view_slider','_self')</script>";
              }else{
                echo "Database Access Failed:".mysqli_error($conn);
              }

            }else{
                     echo "<script>alert('You have already inserted 4 slide');</script>";
            }
              mysqli_free_result($run_s);
              mysqli_close($conn);
} 




?>


      	<?php } ?>


