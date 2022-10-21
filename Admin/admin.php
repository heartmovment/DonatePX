<?php
 @include '../config.php';


session_start();


if(isset($_POST['submit'])){
    $camp_title = $_POST['camp_title'];
    $camp_description = $_POST['camp_description'];
    // $image = $_POST['image'];
    

    if($_FILES["image"]["error"] == 4){
        echo 
        "<script> alert('Image Does not Exist'); </script>"
        ;

    }
    else{
        $fileName = $_FILES["image"]["name"];
        $fileSize = $_FILES["image"]["size"];
        $tmpName = $_FILES["image"]["tmp_name"];

        $validImageExtension = ['jpg', 'jpeg', 'png'];
        $imageExtension = explode('.', $fileName);
        $imageExtension = strtolower(end($imageExtension));
        if(!in_array($imageExtension, $validImageExtension)){
            echo 
            "<script> alert('Invalid Image Extension'); </script>"
            ;
        }
        else if($fileSize > 1000000){
            echo 
            "<script> alert('Image Size Is Too Large!'); </script>"
            ;
        }
        else{
            $newImageName = uniqid();
            $newImageName .= '.' . $imageExtension;

            move_uploaded_file($tmpName, 'img/' . $newImageName);
            $insert = "INSERT INTO `tbl_campain`(`c_id`, `camp_title`, `camp_description`, `image`) 
            VALUES('', '$camp_title','$camp_description', '$newImageName') ";
            mysqli_query($conn, $insert);

            echo "<script> alert('Successfully Added'); 
            document.location.href = 'admin.php';
            </script>";
        }

        
    }

}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Donate Dashboard</title>
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
    <div class="container-fluid bg-secodary position-relative p-0">
        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.php" class="navbar-brand mx-4 mb-3">
                  
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
                    <a href="admin.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="users.php" class="nav-item nav-link"><i class="fa fa-users me-2"></i>Users</a>
                    <a href="donation.php" class="nav-item nav-link"><i class="fa fa-hand-holding-heart me-2"></i>Donations</a>
                    <a href="request.php" class="nav-item nav-link"><i class="fa fa-handshake-angle me-2"></i>Request</a>
                    <a href="profile_setting.php" class="nav-item nav-link"><i class="fa fa-user me-2"></i>Profile</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar bg-secondary navbar-expand navbar-dark sticky-top px-4 py-0">
               
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

            <!-- ----- -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-4 col-xl-4">
                        <div class="bg-info rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-user fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">No. Users</p>
                                <h6 class="mb-0">0</h6>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xl-4">
                        <div class="bg-body rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-hand-holding-heart fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Inatiated Donation</p>
                                <h6 class="mb-0">0</h6>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xl-4">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-users fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">No. Campaigns</p>
                                <h6 class="mb-0">0</h6>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

           


            <!-- POSTING DONATION DRIVE-->
            <div class="container-fluid pt-4 px-4">
                
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Post A Donation Drive</h6>
            
                    </div> 
                    <div class="row"> 
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card influencer-profile-data">  
                                <form method="POST" action="" enctype="multipart/form-data" autocomplte="off">
                                    <div class="mb-3 mt-3">                          
                                        <input type="text" class="form-control" id="" name="camp_title" placeholder="Donation drive title" required>
                                    </div>
                                    <div class="mb-3">                          
                                        <input type="file" class="form-control" id="image" name="image" accept=".jpg, .jpeg, .png" value="">
                                    </div>
                                    <div class="mb-3">   
                                        <textarea type="text" class="form-control" id="" name="camp_description" rows="5" placeholder="Description"></textarea>     
                                    
                                    </div>
                            
                                    <button type="submit" name="submit" class="btn btn-primary mb-3">Post</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>