
<?php 
@include '../config.php';

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>User Dashboard</title>
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
    <link href="bootstrap.min.css" rel="stylesheet">
    
    <!-- CSS -->
    <link href="admin.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative p-0">
        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="admin.php" class="navbar-brand mx-4 mb-3">
                    <!----<img class="rounded-circle" src="../assests/images/rsz_1rsz_donatepx-removebg-preview.png" alt="" style="width: 100px; height: 100px;">-->
                    <h3 class="text-primary"><i class="fa fa-hand-holding-heart me-2"></i></i>Donate PX</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="../images/empty-profile-picture-png-2-2-1.png" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Hi, <span><?php echo $_SESSION['admin_username'] ?> </h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="admin.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="users.php" class="nav-item nav-link active"><i class="fa fa-user me-2"></i>Users</a>
                    <!-- <a href="recipient.php" class="nav-item nav-link"><i class="fa fa-users me-2"></i>recipient/a> -->
                    <a href="donation.php" class="nav-item nav-link"><i class="fa fa-hand-holding-heart me-2"></i>Donations</a>
                    <a href="request.php" class="nav-item nav-link"><i class="fa fa-handshake-angle me-2"></i>Request</a>
                    <!-- <a href="reports.php" class="nav-item nav-link"><i class="fa fa-chart-pie me-2"></i>Reports</a> -->
                    <a href="profile_setting.php" class="nav-item nav-link"><i class="fa fa-user me-2"></i>Profile</a>
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
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="http://localhost/donatePX/logout.php" class="btn dropdown-item" type="submit" >Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

        <div class="container col-lg-6 bg-secondary text-center rounded p-4 mt-5">
                

                <?php

                $query = 'SELECT * FROM user_form WHERE ID ='.$_GET['ID'];
                                $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
                            while($row = mysqli_fetch_array($result))
                            {   
                                $uID= $row['ID'];
                                $fname= $row['firstname'];
                                $lname=$row['lastname'];
                                $email=$row['email'];
                                $user_type=$row['user_type'];
                                $password=$row['password'];
                                
                            
                            }
                            
                            $ID = $_GET['ID'];
                        
                ?>

                    <div class="col-lg-12">
                        <h2>Edit Records</h2>
                            <div class="col-md-12">

                            <form role="form" method="post" action="edit1.php">
                                
                                <div class="form-group mb-2">
                                    <input type="hidden" name="id" value="<?php echo $uID; ?>" />
                                </div>
                                <div class="form-group mb-2">
                                    <input class="form-control" placeholder="First Name" name="firstname" value="<?php echo $fname; ?>">
                                </div>
                                <div class="form-group mb-2">
                                    <input class="form-control" placeholder="Last Name" name="lastname" value="<?php echo $lname; ?>">
                                </div> 
                                <div class="form-group mb-2">
                                    <input class="form-control" placeholder="Email" name="email" value="<?php echo $email; ?>">
                                </div> 
                                <div class="form-group mb-2">
                                    <input  class="form-control" placeholder="User Type" name="user_type" value="<?php echo $user_type; ?>">
                                </div> 
                                <div class="form-group mb-3">
                                    <input type="hidden" class="form-control" placeholder="" name="password" value="<?php echo $password; ?>">
                                </div>
                                <div class="form-group mb-3">
                                    
                                <button type="submit" class="btn btn-info">Update Record</button>
                                </div>
                            </form>  
                        </div>
                    </div> 
                </div>
            </div>





         </div>  
         
         
        
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>
       