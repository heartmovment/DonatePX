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
    <title>Campain Dashboard</title>
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
                        <h6 class="mb-0"><i class="fa fa-hand-holding-heart me-2"></i>My Applications</h6>
                        <a href="">Show All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col">Date</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Attachments</th>
                                    <th scope="col">Status</th>
                                    <!-- <th scope="col">Action</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                @include "../config.php";

                                $sql = "select * from `tbl_applications`";
                                $result = mysqli_query($conn, $sql);

                                while ($row = mysqli_fetch_assoc($result)) {
                                    $contactNumber = $row['contact_number'];
                                    $donationType = $row['donation_type'];
                                    $cashAmount = $row['cash_amount'];
                                    $items = $row['items'];
                                    $description = $row['description'];
                                    $date = $row['date'];



                                    echo '<tr>
                                        
                                    <td>' . $date . '</td>
                                    <td>' . $donationType . '</td>
                                    <td>' . $contactNumber . '</td>
                                    <td>' . $description . '</td>
                                    <td>' . $cashAmount . '</td>
                                    <td>' . $items . '</td>
                                    <td><a class="btn btn-outline-success" href="#" role="button">View post</a></td>
    
                                    </tr>';
                                }






                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end valifation types -->
            <!-- ============================================================== -->
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