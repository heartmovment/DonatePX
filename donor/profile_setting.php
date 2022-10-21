<?php
@include_once '../config.php';

session_start();

if (!isset($_SESSION['donor_firstname'])) {
    header('location:login_form.php');
}


$query = 'SELECT * FROM  user_form WHERE id =  6';
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Donors Dashboard</title>
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
        <?php @include "sidebar.php"; ?>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <?php @include "navbar.php"; ?>
            <!-- Navbar End -->



            <!-- Donor Information-->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">My Profile</h6>
                        <a href=""></a>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card influencer-profile-data">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-12">
                                            <div class="text-center">
                                                <img src="../images/empty-profile-picture-png-2-2-1.png" alt="User Avatar" class="img-thumbnail">
                                            </div>
                                        </div>
                                        <div class="col-xl-10 col-lg-8 col-md-8 col-sm-8 col-12">
                                            <div class="user-avatar-info">
                                                <div class="m-b-20">
                                                    <div class="">
                                                        <h2 class="mb-1 text-primary"><?php echo $_SESSION['donor_firstname'] ?></h2>
                                                    </div><br>
                                                </div>
                                                <?php
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                ?>

                                                    <div class="user-avatar-address">
                                                        <p class="border-bottom pb-3">
                                                            <!-- <span class="d-xl-inline-block d-block mb-2"><i class="fa fa-map-marker-alt mr-2 text-primary "></i>4045 Manila, Philippines 90017</span> -->
                                                            <span class="mb-2 ml-xl-4 d-xl-inline-block d-block ">Joined date: <?php echo $row['date_created']; ?> </span>
                                                            <!-- <span class=" mb-2 d-xl-inline-block d-block ml-xl-4">Male </span> -->
                                                            <!-- <span class=" mb-2 d-xl-inline-block d-block ml-xl-4">29 Year Old </span> -->
                                                        </p>
                                                        <div class="mt-3">
                                                            <a href="#" class="text-primary"><i class="fa fa-fw fa-envelope"></i> <?php echo $row['email']; ?></a>
                                                            <!-- <a href="#" class="text-primary"><i class="fa fa-fw fa-phone"></i> +6398765743191</a> -->
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
                                                <button type="submit" class="btn btn-primary1">Save Changes</button>
                                                <button class="btn btn-primary1">Cancel</button>
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
    </div>

    <!-- Back to Top --
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>-->
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assests/js/main.js"></script>
</body>

</html>