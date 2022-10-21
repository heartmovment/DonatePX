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
<style>
    .card img {
        /* height: 400px !important;
        width: 400px !important; */
        padding: 12px 10px !important;
    }
</style>

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

            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-4 col-xl-4">
                        <div class="bg-info rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-user fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Requested Donation</p>
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
                                <p class="mb-2">Pending Campaigns</p>
                                <h6 class="mb-0">0</h6>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <br>
            <div class="container ">
                <div class="row px-sm-4">
                    <?php
                        $conn = mysqli_connect('localhost', 'root', '', 'user_db');
                        $rows = mysqli_query($conn, "SELECT * FROM tbl_campain ORDER BY camp_title DESC");
                    ?>
                    <?php foreach($rows as $row) : ?>

                    <div class="card border-success mb-3 col-md-6 px-sm-4">
                            
                        <img src="../Admin/img/<?php echo $row['image'];?>" class="" alt="post">
                        <div class="card-body">
                            
                            <h5 class="card-title"><?php echo $row ["camp_title"]; ?></h5>
                            <p class="card-text"><?php echo $row ["camp_description"];?></p>
                            <a href="" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#donationModal" type="button">Donate</a>
                            <a href="" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" type="button">Apply as Beneficiary</a>
                        </div>
                        
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <br>


            <!-- Apply as Beneficiary Modal -->
            <?php

            @include '../config.php';


            if (isset($_POST['submit'])) {
                $contactNumber = $_POST['contactNumber'];
                $donationType = $_POST['donationType'];
                $cashAmount = $_POST['cashAmount'];
                $items = $_POST['items'];
                $description = $_POST['description'];

                $sql = "INSERT INTO `tbl_applications` (`contact_number`, `donation_type`, `cash_amount`, `items`, `description`, `date`) VALUES ( '$contactNumber', '$donationType', '$cashAmount', '$items', '$description', current_timestamp())";

                $result = mysqli_query($conn, $sql);


                if ($result) {
                    echo "<script>alert('Result has been posted')</script>";
                }
            }

            ?>



            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Let me help you</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <div class="card">
                                <div class="card-header">
                                    <div class="container text-center">
                                        <h4>APPLICATION FORM</h4>
                                    </div>
                                    <div class="card-body">
                                        <form class="rounded p-3 p-sm-3 form-" action="" method="POST" autocomplete="off">
                                            <div class="col-md-9">

                                            </div><br>
                                            <div class="col-md-9">
                                                <label for="cnumber" class="form-label">Contact Number:</label>
                                                <input name="contactNumber" type="number" class="form-control" id="cnumber" placeholder="Contact Number">
                                            </div><br>
                                            <div class="col-md-9">
                                                <div class="form-check form-check-inline">
                                                    <p> Type of Donation:</p>
                                                    <input name="donationType" class="form-check-input" type="radio" name="cash" id="cash" value="option1">
                                                    <label class="form-check-label" for="cash">
                                                        Cash
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input name="donationType" class="form-check-input" type="radio" name="kind" id="kind" value="option2">
                                                    <label class="form-check-label" for="kind">
                                                        In Kind
                                                    </label>
                                                </div>
                                            </div><br>
                                            <div class="col-md-9">
                                                <label for="amount" class="form-label">Amount (For Cash):</label>
                                                <input name="cashAmount" type="number" class="form-control" id="amount" placeholder="Amount"></input>
                                            </div><br>
                                            <div class="col-md-9">
                                                <div class="form-check">
                                                    <p> Items(For In kind):</p>
                                                    <input name="items" class="form-check-input" type="checkbox" value="" id="items">
                                                    <label class="form-check-label" for="clothes">
                                                        Clothes
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input name="items" class="form-check-input" type="checkbox" value="" id="items">
                                                    <label class="form-check-label" for="fabric">
                                                        Fabrics (Towel, blankets, curtains etc.)
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input name="items" class="form-check-input" type="checkbox" value="" id="items">
                                                    <label class="form-check-label" for="toys">
                                                        Toys
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input name="items" class="form-check-input" type="checkbox" value="" id="items">
                                                    <label class="form-check-label" for="learning">
                                                        School supplies
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input name="items" class="form-check-input" type="checkbox" value="" id="items">
                                                    <label class="form-check-label" for="reliefgoods">
                                                        Packed relief goods
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input name="items" class="form-check-input" type="checkbox" value="" id="items">
                                                    <label class="form-check-label" for="medicines">
                                                        Medicines
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input name="items" class="form-check-input" type="checkbox" value="" id="items" name="">
                                                    <label class="form-check-label" for="medical">
                                                        Medical equipment (Oximeter, Oxygen, BP Monitor etc.)
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input name="items" class="form-check-input" type="checkbox" value="" id="items">
                                                    <label class="form-check-label" for="hygiene">
                                                        Hygiene Kits (Tissue, Toothpaste, Toothbrush, soap etc.)
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input name="items" class="form-check-input" type="checkbox" value="" id="items">
                                                    <label class="form-check-label" for="supplies">
                                                        Medical Supplies (Face mask, Alcohol, Suits, Gauze etc.)
                                                    </label>
                                                </div><br>
                                                <p> Description</p>
                                                
                                                
                                                <textarea class="form-control fs-6 mb-3" name="description"></textarea>
                                            
                                                <div class="container text-left">
                                                    <button name="submit" type="submit" class="btn btn-success"><i class="fa fa-paper-plane"></i> Apply</button>
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


            <!-- Apply as Beneficiary Modal End -->

            <!-- Donation Modal Start -->

            <?php

            @include '../config.php';

            if (isset($_POST['submitDonation'])) {
                $fullname = $_POST['fullname'];
                $contactNumber = $_POST['contactNumber'];
                $pickupLocation = $_POST['pickup_location'];
                $items = $_POST['items'];


                $sql = "INSERT INTO `tbl_donations` (`fullname`, `contact_number`, `pickup_location`, `items`, `date`) VALUES ( '$fullname', '$contactNumber', '$pickupLocation', '$items', current_timestamp())";

                $result = mysqli_query($conn, $sql);


                if ($result) {
                    echo "<script>alert('Donation Submitted')</script>";
                }
            }

            ?>


            <div class="modal fade" id="donationModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Thank you for donating for those who are in need.</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="card">
                                <div class="card-header">
                                    <div class="container text-center">
                                        <h4>DONATION FORM</h4>
                                    </div>
                                    <div class="card-body">
                                        <form class="rounded p-3 p-sm-3 form-" action="" method="POST" autocomplte="off">
                                            <div class="col-md-9">
                                                <label for="fname" class="form-label">Full Name</label>
                                                <input name="fullname" type="text" class="form-control" id="Full name" placeholder="Full Name">
                                            </div><br>
                                            <div class="col-md-9">
                                                <label for="cnumber" class="form-label">Contact Number:</label>
                                                <input name="contactNumber" type="number" class="form-control" id="cnumber" placeholder="Contact Number">
                                            </div><br>
                                            <div class="col-md-9">
                                                <div class="form-check form-check-inline">
                                                    <p> Type of Donation:</p>
                                                    <input name="donationType" class="form-check-input" type="radio" name="cash" id="cash" value="option1">
                                                    <label class="form-check-label" for="cash">
                                                        Cash
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input name="donationType" class="form-check-input" type="radio" name="kind" id="kind" value="option2">
                                                    <label class="form-check-label" for="kind">
                                                        In Kind
                                                    </label>
                                                </div>
                                            </div><br>
                                            <div class="col-md-9">
                                                <label for="amount" class="form-label">Amount (For Cash):</label>
                                                <input name="cashAmount" type="number" class="form-control" id="amount" placeholder="Amount"></input>
                                            </div><br>
                                            <div class="col-md-9">
                                                <div class="form-check">
                                                    <p> Items(For In kind):</p>
                                                    <input name="items" class="form-check-input" type="checkbox" value="" id="items">
                                                    <label class="form-check-label" for="clothes">
                                                        Clothes
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input name="items" class="form-check-input" type="checkbox" value="" id="items">
                                                    <label class="form-check-label" for="fabric">
                                                        Fabrics (Towel, blankets, curtains etc.)
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input name="items" class="form-check-input" type="checkbox" value="" id="items">
                                                    <label class="form-check-label" for="toys">
                                                        Toys
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input name="items" class="form-check-input" type="checkbox" value="" id="items">
                                                    <label class="form-check-label" for="learning">
                                                        School supplies
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input name="items" class="form-check-input" type="checkbox" value="" id="items">
                                                    <label class="form-check-label" for="reliefgoods">
                                                        Packed relief goods
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input name="items" class="form-check-input" type="checkbox" value="" id="items">
                                                    <label class="form-check-label" for="medicines">
                                                        Medicines
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input name="items" class="form-check-input" type="checkbox" value="" id="items" name="">
                                                    <label class="form-check-label" for="medical">
                                                        Medical equipment (Oximeter, Oxygen, BP Monitor etc.)
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input name="items" class="form-check-input" type="checkbox" value="" id="items">
                                                    <label class="form-check-label" for="hygiene">
                                                        Hygiene Kits (Tissue, Toothpaste, Toothbrush, soap etc.)
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input name="items" class="form-check-input" type="checkbox" value="" id="items">
                                                    <label class="form-check-label" for="supplies">
                                                        Medical Supplies (Face mask, Alcohol, Suits, Gauze etc.)
                                                    </label>
                                                </div><br>
                                                <p> Mode of delivery (For In Kind Donations): </p>
                                                <div class="form-check form-check-inline">
                                                    <input name="pickupLocation" class="form-check-input" type="radio" name="pickup" id="pickup" value="option1">
                                                    <label class="form-check-label" for="pickup">
                                                        For pick-up
                                                    </label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input name="items" type="text" class="form-control" id="address" placeholder="Address">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="dropoff" id="dropoff" value="option2">
                                                        <label class="form-check-label" for="dropoff">
                                                            For drop-off at our Repacking Center
                                                        </label>
                                                    </div><br><br>
                                                    <div class="container text-left">
                                                        <button name="submitDonation" type="submit" class="btn btn-success"><i class="fa fa-paper-plane"></i> Send Donation</button>
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

            <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
            <script src="../js/main.js"></script>
</body>

</html>