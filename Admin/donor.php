<?php
@include 'config.php';

session_start();

if(!isset($_SESSION['admin_firstname'])){
    header('location:login_form.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Donor Dashboard</title>
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

    <script>
      $(window).load(function(){
        $().UItoTop({ easingType: 'easeOutQuad' });
      })
  </script>
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
                        <img class="rounded-circle" src="../assests/images/empty-profile-picture-png-2-2-1.png" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Hi, <span><?php echo $_SESSION['admin_firstname'] ?> </h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="admin.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="donor.php" class="nav-item nav-link active"><i class="fa fa-user me-2"></i>Donor</a>
                    <a href="recipient.php" class="nav-item nav-link"><i class="fa fa-users me-2"></i>Recipient</a>
                    <a href="donation.php" class="nav-item nav-link"><i class="fa fa-hand-holding-heart me-2"></i>Donation</a>
                    <a href="request.php" class="nav-item nav-link"><i class="fa fa-handshake-angle me-2"></i>Request</a>
                    <a href="reports.php" class="nav-item nav-link"><i class="fa fa-chart-pie me-2"></i>Reports</a>
                    <!--<div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="signin.html" class="dropdown-item">Sign In</a>
                            <a href="signup.html" class="dropdown-item">Sign Up</a>
                            <a href="404.html" class="dropdown-item">404 Error</a>
                            <a href="blank.html" class="dropdown-item">Blank Page</a>
                        </div>
                    </div>-->
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
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="../assests/images/empty-profile-picture-png-2-2-1.png" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="../assests/images/empty-profile-picture-png-2-2-1.png" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="../assests/images/empty-profile-picture-png-2-2-1.png" alt="" style="width: 40px; height: 40px;">
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
                            <img class="rounded-circle me-lg-2" src="../assests/images/empty-profile-picture-png-2-2-1.png" alt="" style="width: 40px; height: 40px;">
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

           

            <!-- Donation Information    -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Donors Information</h6>
                        <a href="">Show All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col"><input class="form-check-input" type="checkbox"></th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Complete Name</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Contact</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td>01 Jan 2022</td>
                                    <td>Margarette Remolin</td>
                                    <td>Fort Bonifacio, Taguig City</td>
                                    <td>margaretteremolin@gmail.com</td>
                                    <td>+639958954321</td>
                                    <td>
                                        <a class="btn btn-sm btn-primary" href="">Detail</a>
                                        |
                                        <a href="" class="btn btn-sm btn-primary" data-toggle="tooltip">
                                            <i class="fa fa-edit"></i>
                                        </a> 
                                        |
                                        <a href="" class="btn btn-sm btn-primary" data-toggle="tooltip">
                                            <i class="fa fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td>01 Jan 2022</td>
                                    <td>Luna Moonfang</td>
                                    <td>Kalayaan St, Makati city</td>
                                    <td>lunamoonfang@gmail.com</td>
                                    <td>+639987654321</td>
                                    <td>
                                        <a class="btn btn-sm btn-primary" href="">Detail</a>
                                        |
                                        <a href="" class="btn btn-sm btn-primary" data-toggle="tooltip">
                                            <i class="fa fa-edit"></i>
                                        </a> 
                                        |
                                        <a href="" class="btn btn-sm btn-primary" data-toggle="tooltip">
                                            <i class="fa fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td>01 Jan 2022</td>
                                    <td>Kardel Omniknight</td>
                                    <td>dota2 st, Blizzard City</td>
                                    <td>kardelomni@gmail.com</td>
                                    <td>+639123456789</td>
                                    <td>
                                        <a class="btn btn-sm btn-primary" href="">Detail</a>
                                        |
                                        <a href="" class="btn btn-sm btn-primary" data-toggle="tooltip">
                                            <i class="fa fa-edit"></i>
                                        </a> 
                                        |
                                        <a href="" class="btn btn-sm btn-primary" data-toggle="tooltip">
                                            <i class="fa fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        <!-- Back to Top --
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>-->
    
    
    <!---==========FOOTER CONTENT START==========-->
        <section class="text-white py-5">
        <footer class="text-center text-lg-start bg-dark">
        <!-- Section: Links  -->
    <section class="footer">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <!--<i class="fas fa-gem me-3">-->
              <i class="fa fa-hand-holding-heart"></i>
              </i>Donate PX
            </h6>
            <p>
              Starting non-profit organization that collaborates with volunteers to deliver
              humanitarian aid and disaster relief to vulnerable communities.
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Donation
            </h6>
            <p>
              <a href="#!" class="text-reset">About Us</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Ongoing Events</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Contact Us</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Careers</a>
            </p>
          </div>
          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Quick links
            </h6>
            <p>
              <a href="#!" class="text-reset">Work With Us</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Who We Are?</a>
            </p>
            <p>
              <a href="#!" class="text-reset">About Us</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Latest Stories</a>
            </p>
          </div>
              <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
              <p><i class="fas fa-home me-3"></i> Metro Manila, NCR-PH</p>
              <p><i class="fas fa-envelope me-3"></i>wd9pgroup2@kodego.com.ph</p>
              <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
              <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
          </div>
          <!-- Grid column -->
        </div>
          <!-- Grid row -->
      </div>
    </section>  
    <div class="container">
      <div class="container p-4 pb-0 text-center">
            <!-- Section: Social media -->
            <section class="mb-4">
              <!-- Facebook -->
              <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                 ><i class="fab fa-facebook-f"></i
                ></a>
    
              <!-- Twitter -->
              <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                 ><i class="fab fa-twitter"></i
                ></a>
    
              <!-- Google -->
              <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                 ><i class="fab fa-google"></i
                ></a>
    
              <!-- Instagram -->
              <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                 ><i class="fab fa-instagram"></i
                ></a>
    
              <!-- Linkedin -->
              <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                 ><i class="fab fa-linkedin-in"></i
                ></a>
    
              <!-- Github -->
              <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                 ><i class="fab fa-github"></i
                ></a>
            </section>
            <!-- Section: Social media -->
      </div>
          <!-- Grid container -->
    
          <!-- Copyright -->
          <div class="text-center p-3 text-muted" style="background-color: rgba(0, 0, 10, 0.2);">
            © 2022 WD9P-AGILE|DESIGN BY:
            <a class="text" style="color: #ff6112;" href="#">GROUP-2 CAPSTONE PROJECT</a>
          </div>
          <!-- Copyright -->
    </div>
    </footer>
</div>


<!---==========FOOTER CONTENT END==========-->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assests/easing/easing.js"></script>
    <script src="../assests/easing/easing.min.js"></script>
    <script src="../assests/js/main.js"></script>
</body>

</html>