<?php
@include_once '../config.php';

session_start();

if (!isset($_SESSION['donor_firstname'])) {
    header('location:login_form.php');
}
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
    <link href="../Admin/admin.css" rel="stylesheet" type="text/css">
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
                        <h6 class="mb-0">Donation Information</h6>
                        <a href=""></a>
                    </div>
                    <div class="row">

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <!-- <h5 class="card-header">Donation Information</h5> -->
                                <div class="card-body">
                                    <form action="" method="">
                                        <div class="form-group row mb-2">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Title</label>
                                            <div class="col-12 col-sm-8 col-lg-6 ">
                                                <input type="text" required="" placeholder="" class="form-control bg-white">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-2">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Description</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <textarea required="" class="form-control bg-white"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-2">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Pick up Location</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input data-parsley-type="alphanum" type="text" required="" placeholder="" class="form-control bg-white">
                                            </div>
                                        </div>
                                        <div class="form-group row text-right">
                                            <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                                <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                                <button class="btn btn-space btn-secondary">Cancel</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end valifation types -->
                        <!-- ============================================================== -->
                    </div>
                </div>
            </div>

            <!-- Back to Top -->

            <!-- JavaScript Libraries -->
            <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
            <script src="../js/main.js"></script>
</body>

</html>