<div class="custome-border-icon border border-dark py-0 bg-info">
      <div class="container ">
        <div class=" d-flex align-items-center justify-content-between">          

          <div class="logo px-0 border ">
            <div class="site-logo">
              <a href="index.php?dashboard" class="border-info bg-white">Admin Panle</a>
            </div>
          </div>

         
             <div class="icons">
             
                 <div class="">
                    <span type="button" class=" px-2 mb-1 icon-person" id="dropdownMenuReference" data-toggle="dropdown"></span>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                      <a class="dropdown-item bg-info text-white" href="#"><?php echo $a_name; ?></a>
                       <div class="dropdown-divider"></div>
                 
                      <a class="dropdown-item" href="index.php?u_profile=<?php echo $a_id ?>">Profile</a>

                     <!--- <a class="dropdown-item" href="#">Product </a><span class="badge"><?php// echo $count_p ?></span>
                      

                      <a class="dropdown-item" href="#">customer</a> <span class=""><?php //echo $count_c ?></span>
                      
                      <a class="dropdown-item" href="#">Product c </a><span><?php //echo $count_p_c ?></span> --->
                      <a class="dropdown-item " href="admin_logout.php"> Logout </a>
                      
                    </div>

              </div>   
           </div>   

        </div>
      </div>
    </div>
    
<!--================================to bar end================================---->
