<?php
 @include 'config.php';


session_start();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Donate PX</title>
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    />
    <link rel="stylesheet" type="text/css" href="../customcss/styleindex.css" />
    <!---GoogleFonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins&display=swap"
      rel="stylesheet"
    />
    <!--Bootsrap-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"/>

    <!---Animated CSS-->
    <link rel="stylesheet" type="text/css" href="../customcss/animate.css" />

  </head>

  <style>
     /*=====================
  FAQS DESIGN START
  =======================*/

  .accordion-item{
    background-color: transparent !important;
    border: none !important ; 
  }
  .text-faqs{
    color: #ff6112;
    margin-top: 30px;
    text-align: center;
  }
  .text-faq{
    text-align: center;
    margin-top: 30px;
  
  }
  .faqs-accord{
    margin-bottom: 10px !important;
  }
  .faqs-accord .accordion-body{
    background: #ff6112 !important;
    color: #fff !important;
    border-radius: 10px !important;
    margin-bottom: 1rem;
  }

  .faqs-accord button {
    background-color: none!important;
    color: #ff6112 !important;
    border-radius: 10px !important;
  }

  .btn-outline-light{
     --bs-btn-color: #ff6112 !important;
     --bs-btn-border-color: #ff6112 !important;
    } 
    .btn-outline-light:hover {
      color: #fff !important;
      background-color: green !important;
      border-color: green !important;
    }
   /*=====================
  FAQS DESIGN END
  =======================*/
    @media (min-width: 1200px){
      .accordion{
        max-width: 900px;
      }
    }

    @media (min-width: 576px){
    
    }

  </style>
  <body>
    <!---==========NAVBAR CONTENT START==========-->
    <div id="don-wrapper">
      <div id="don-page">
      <div class="header-top">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-6 text-left head-link">
              <h6 class="mb-0">Hi 
                <span><?php echo $_SESSION['admin_username'] ?> </span>
                <a href="http://localhost/donatePX/logout.php" class="grow btn" type=submit>
                  <i class="fa-solid fa-right-from-bracket"></i>
                </a>
              </h6> 
            </div>
            <div class="col-md-6 col-sm-6 text-right fa-social">
            <a href="admin.php" class="text-light" style="list-style: none;">Go To Dashboard</a>
              <a href="#" class="grow"><i class="fab fa-facebook-f"></i></a>
              <a href="#" class="grow"><i class="fab fa-twitter"></i></a>
              <a href="#" class="grow"><i class="fab fa-instagram"></i></a>
            </div>
          </div>  
        </div>
      </div>
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
          <img
            src="../images/rsz_1rsz_donatepx-removebg-preview.png"
            alt=""
        /></a>

        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item" style="color: #ff6112">
              <a class="nav-link" aria-current="page" href="index.php">Home</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="calamity.html">Calamity</a>
            </li> -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Events
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Calamities</a></li>
                <li><a class="dropdown-item" href="calamity-post.php">Fundraising Campain</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="faqs.php">FAQs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact-us.php">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!---==========NAVBAR CONTENT END==========-->
    
    <!---==========MAIN CONTENT START==========-->

    <div class="container accordion accordion-flush mb-5" id="">
      <h3 class="text-faqs">FAQs</h3>
      <h1 class="text-faq">Frequently Asked Questions</h1>
      <br />

      <div class="accordion-item faqs-accord">
        <h2 class="accordion-header" id="flush-headingOne">
          <button
            class="accordion-button collapsed"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#flush-collapseOne"
            aria-expanded="false"
            aria-controls="flush-collapseOne"
          >
            <strong>Do we have a fee for every donation?</strong>
          </button>
        </h2>
        <div
          id="flush-collapseOne"
          class="accordion-collapse collapse"
          aria-labelledby="flush-headingOne"
          data-bs-parent="#accordionFlushExample"
        >
          <div class="accordion-body">
            No, we don't deduct or collect such fees because this is pure
            charity and volunteer work of the founders.
          </div>
        </div>
      </div>
      <div class="accordion-item faqs-accord">
        <h2 class="accordion-header" id="flush-headingTwo">
          <button
            class="accordion-button collapsed"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#flush-collapseTwo"
            aria-expanded="false"
            aria-controls="flush-collapseTwo"
          >
            <strong>Why do we need to get verified upon registration?</strong>
          </button>
        </h2>
        <div
          id="flush-collapseTwo"
          class="accordion-collapse collapse"
          aria-labelledby="flush-headingTwo"
          data-bs-parent="#accordionFlushExample"
        >
          <div class="accordion-body">
            To ensure that we will not encounter scammers, and give our donors
            the peace of mind that their donation will be given to our qualified
            recipients. And on the other hand, to make sure that the details of
            our recipients will not be illegally used in fraudulent activities.
          </div>
        </div>
      </div>
      <div class="accordion-item faqs-accord">
        <h2 class="accordion-header" id="flush-headingThree">
          <button
            class="accordion-button collapsed"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#flush-collapseThree"
            aria-expanded="false"
            aria-controls="flush-collapseThree"
          >
            <strong>How will we send our money to our chosen recipient?</strong>
          </button>
        </h2>
        <div
          id="flush-collapseThree"
          class="accordion-collapse collapse"
          aria-labelledby="flush-headingThree"
          data-bs-parent="#accordionFlushExample"
        >
          <div class="accordion-body">
            Right after verification, and upon approval of your request to
            donate, we will send you the verified bank details of the recipients
            via your registered email and/or mobile number.
          </div>
        </div>
      </div>
      <div class="accordion-item faqs-accord">
        <h2 class="accordion-header" id="flush-headingFour">
          <button
            class="accordion-button collapsed"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#flush-collapseFour"
            aria-expanded="false"
            aria-controls="flush-collapseFour"
          >
            <strong
              >What's the process of verifying the recipient's
              condition?</strong
            >
          </button>
        </h2>
        <div
          id="flush-collapseFour"
          class="accordion-collapse collapse"
          aria-labelledby="flush-headingFour"
          data-bs-parent="#accordionFlushExample"
        >
          <div class="accordion-body">
            We will collect all their medical documents and we may require
            pictures of the patient. We'll then call their respective doctors or
            hospital to verify the documents submitted and ask for the current
            condition so that we can add up some notes or updates on their
            profile if needed.
          </div>
        </div>
      </div>
      <div class="accordion-item faqs-accord">
        <h2 class="accordion-header" id="flush-headingFive">
          <button
            class="accordion-button collapsed"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#flush-collapseFive"
            aria-expanded="false"
            aria-controls="flush-collapseFive"
          >
            <strong
              >Are we going to receive a notification if our donations for
              calamity victims are already for dispatch?</strong
            >
          </button>
        </h2>
        <div
          id="flush-collapseFive"
          class="accordion-collapse collapse"
          aria-labelledby="flush-headingFive"
          data-bs-parent="#accordionFlushExample"
        >
          <div class="accordion-body">
            As of now, we still don't have such option to track your donations
            but rest assured that we will have an update and/or pictures once
            they're already been distributed to our recipients.
          </div>
        </div>
      </div>
    </div>


      

      <!---==========MAIN CONTENT END==========-->

      <!---------------------------==========FOOTER CONTENT START==========------------------------------>
    <footer class="text-center text-lg-start bg-dark">
      <!-- Section: Links  -->
      <section class="footer">
        <div class="container text-center text-md-start mt-5">
          <!-- Grid row -->
          <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto ">
              <!-- Content -->
              <h6 class="text-uppercase fw-bold mb-4">
                
                <i class="fa fa-hand-holding-heart"></i>
                Donate PX
              </h6>
              <p>
                Starting non-profit organization that collaborates with
                volunteers to deliver humanitarian aid and disaster relief to
                vulnerable communities.
              </p>

              <div class="col">
                <h6>Sign up for our newsletter</h6>
                <form action="" method="" class="mb-3">
                  <input type="text" name="" class="form-label" placeholder="Enter your email address">

                  <button type="submit" class="btn btn-outline-light">
                    Subscribe
                  </button>
                </form>
              </div>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">Quick links</h6>
              <p>
                <a href="about.php" class="text-reset">About Us</a>
              </p>
              <p>
              
              </p>
              <p>
                <a href="contact-us.php" class="text-reset">Contact Us</a>
              </p>
             
            </div>
            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">Usefull links</h6>
              <p>
                <a href="admin.php" class="text-reset">Go To Dashboard</a>
              </p>
              <p>
                <a href="contact-us.php" class="text-reset">Work With Us</a>
              </p>
              <p>
                <a href="about.php" class="text-reset">Who We Are?</a>
              </p>
              
              
            </div>
            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
              <p><i class="fas fa-home me-3"></i> Metro Manila, NCR-PH</p>
              <p>
                <i class="fas fa-envelope me-3"></i>wd9pgroup2@kodego.com.ph
              </p>
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
            <a
              class="btn btn-outline-light btn-floating m-1"
              href="#!"
              role="button"
              ><i class="fab fa-facebook-f"></i
            ></a>

            <!-- Twitter -->
            <a
              class="btn btn-outline-light btn-floating m-1"
              href="#!"
              role="button"
              ><i class="fab fa-twitter"></i
            ></a>

            <!-- Google -->
            <a
              class="btn btn-outline-light btn-floating m-1"
              href="#!"
              role="button"
              ><i class="fab fa-google"></i
            ></a>

            <!-- Instagram -->
            <a
              class="btn btn-outline-light btn-floating m-1"
              href="#!"
              role="button"
              ><i class="fab fa-instagram"></i
            ></a>

            <!-- Linkedin -->
            <a
              class="btn btn-outline-light btn-floating m-1"
              href="#!"
              role="button"
              ><i class="fab fa-linkedin-in"></i
            ></a>

            <!-- Github -->
            <a
              class="btn btn-outline-light btn-floating m-1"
              href="#!"
              role="button"
              ><i class="fab fa-github"></i
            ></a>
          </section>
          <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div
          class="text-center p-3 text-muted"
          style="background-color: rgba(0, 0, 10, 0.2)"
        >
          © 2022 WD9P-AGILE|DESIGN BY:
          <a class="text" style="color: #ff6112" href="#"
            >GROUP-2 CAPSTONE PROJECT</a
          >
        </div>
        <!-- Copyright -->
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/main.js"> </script>
  </body>
</html>
