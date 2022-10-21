<?php
@include '../config.php';

session_start();

// if(!isset($_SESSION['admin_firstname'])){
//     header('location:login_form.php');
// }


$query = 'SELECT * FROM admin_form WHERE id = 3';
$result = mysqli_query($conn, $query) or die (mysqli_error($conn));

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!--Bootstrap Stylesheet --->
    <link href="../Admin/bootstrap.min.css" rel="stylesheet">
    
    <!-- CSS -->
    <link href="../Admin/admin.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative p-0">
        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="../index.html" class="navbar-brand mx-4 mb-3">
                    <!----<img class="rounded-circle" src="../assests/images/rsz_1rsz_donatepx-removebg-preview.png" alt="" style="width: 100px; height: 100px;">-->
                    <h3 class="text-primary"><i class="fa fa-hand-holding-heart me-2"></i></i>Donate PX</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="../images/empty-profile-picture-png-2-2-1.png" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Hi, <span><?php echo $_SESSION['admin_username'] ?> </span></h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="admin.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="users.php" class="nav-item nav-link"><i class="fa fa-users me-2"></i>Users</a>
                    <a href="donation.php" class="nav-item nav-link"><i class="fa fa-hand-holding-heart me-2"></i>Donations</a>
                    <a href="request.php" class="nav-item nav-link"><i class="fa fa-handshake-angle me-2"></i>Request</a>
                    <a href="profile_setting.php" class="nav-item nav-link active"><i class="fa fa-user me-2"></i>Profile</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="../images/empty-profile-picture-png-2-2-1.png" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="../images/empty-profile-picture-png-2-2-1.png" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="../images/empty-profile-picture-png-2-2-1.png" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notification</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="../images/empty-profile-picture-png-2-2-1.png" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="profile_setting.php" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="http://localhost/donatePX/logout.php" class="btn dropdown-item" type="submit" >Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
        
            <!-- Navbar End -->

           

                
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Profile Information</h6>
                        <a href=""></a>
                    </div>
                    <div class="row"> 
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card influencer-profile-data">
                                <div class="card-body">
                                    <div class="row"> 
                                        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-12">
                                            <div class="text-center">
                                                <img src="../images/empty-profile-picture-png-2-2-1.png" alt="User Avatar" class="img-thumbnail" style="height: 100px;">
                                            </div>
                                        </div>
                                        <div class="col-xl-10 col-lg-8 col-md-8 col-sm-8 col-12">
                                        
                                            <div class="user-avatar-info">
                                                <div class="m-b-20">
                                                    <div class="">
                                                        <h2 class="mb-1 text-primary"><?php echo $_SESSION['admin_username'] ?></h2>
                                                    </div><br>
                                                </div>
                                                <?php
                                        while($row = mysqli_fetch_assoc($result))
                                        
                                        {
                                    ?>
                                                <div class="user-avatar-address">
                                                    <p class="border-bottom pb-3">
                                                    </p>
                                                    <div class="mt-3">
                                                        <a href="#" class="text-primary"><i class="fa fa-fw fa-envelope"></i><?php echo $row['admin_email']; ?></a>
                                                        <a href="#" class="text-primary"><i class="fa fa-fw fa-user"></i><?php echo $row['user_type']; ?></a>
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <?php 
                                        }
                                    ?>
                                </div>
                                <div class="border-top">

                                
                                    <form id="">
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right"><i class="fa fa-user"></i> Account Info</label>
                                        </div>
                                        <div class="form-group row mb-2">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Username</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input data-parsley-type="alphanum" type="text" required="" placeholder="" class="form-control bg-white">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-2">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Password</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input data-parsley-type="alphanum" type="password" required="" placeholder="" class="form-control bg-white">
                                            </div>
                                        </div>
                                        <div class="form-group row text-right mb-2">
                                            <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                                <button type="button" class="btn btn-primary1" data-bs-toggle="modal" data-bs-target="#myModal" name="update_profile">Update Profile</button>
                                                <!-- <button type="submit" class="btn btn-primary1">Save Changes</button> -->
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>              
                </div>
            </div>
        </div>
            
        <!-- Back to Top --
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>-->
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assests/js/main.js"></script>




    <!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Update Profile</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

            <!-- Modal body -->
        <form action="" method="" autocomplete="off" enctype="multipart/form-data" class="was-validated">
            <div class="modal-body">
                <div class="mb-3 mt-3">
                    <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
                    <div class="valid-feedback">Valid username.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="mb-3 mt-3">
                    <input type="file" name="image" class="form-control" id="image" accept=".jpg, .jpeg, .png" value="" required>
                    <div class="valid-feedback">Valid image.</div>
                    <div class="invalid-feedback">Please enter a valid image.</div>
                </div>
                
                <div class="mb-3">
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                    <div class="valid-feedback">Valid email.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div> 
               
            </div>
             <!-- End Modal body -->

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="submit" class="btn btn-info" data-bs-dismiss="modal" name>Save Changes</button>
            </div>
        </form>

    </div>
  </div>
</div>















    
</body>

</html>