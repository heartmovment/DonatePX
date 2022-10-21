<?php
echo
'<div class="sidebar pe-4 pb-3">
 <nav class="navbar bg-secondary navbar-dark">
     <a href="../index.html" class="navbar-brand mx-4 mb-3">
          
         <h3 class="text-primary"><i class="fa fa-hand-holding-heart me-2"></i></i>Donate PX</h3>
     </a>
     <div class="d-flex align-items-center ms-4 mb-4">
         <div class="position-relative">
             <img class="rounded-circle" src="../images/empty-profile-picture-png-2-2-1.png" alt="" style="width: 40px; height: 40px;">
             <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
         </div>
         <div class="ms-3">
             <h6 class="mb-0">Hi, <span><?php echo $_SESSION[\'donor_firstname\'] ?></span></h6>
             <span>Donor</span>
         </div>
     </div>
     <div class="navbar-nav w-100">
         <a href="donor_index.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
         <a href="my_donation.php" class="nav-item nav-link"><i class="fa fa-hand-holding-heart me-2"></i>My Donations</a>
         <a href="my_campaigns.php" class="nav-item nav-link"><i class="fa fa-handshake-angle me-2"></i>My Applications</a>
         <a href="profile_setting.php" class="nav-item nav-link"><i class="fa fa-user me-2"></i>Profile</a>
     </div>
 </nav>
</div>';
