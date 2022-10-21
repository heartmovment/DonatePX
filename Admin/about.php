
<?php
@include 'config.php';


session_start();

// if(!isset($_SESSION['admin_firstname'])){
//    header('location:http://localhost/donatePX/login_form.php');
// }


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

<!---==========SLIDER MAIN CONTENT START==========-->
<div class="container mb-3" id="conatainer">
      <div class="bgImage">       
        <div class="overlay"></div>
        <div class="content"> 
          <div class="container col-md-12 text-white text-center mt-2">  
            <h1 style="color: #ff6112" class="fw-bold">ABOUT  DONATEPX</h1>
            <br>
            
            <p>We are students of a certain bootcamp in KodeGo and this is our Capstone Project. When we are starting to brainstorm What
              kind of website are we going to make, we both agreed that we should make a donation drive / fundraising website for those
              in needs.
            </p>
            <p>The problem that we noticed in our daily routine of checking our newsfeed in social media is that these people asking for help
              online are prone to scams and fraudulent activities. On the other hand, people who are willing to help and don't have any 
              idea if the post is a legit one or just a scam. So we came up with the idea that we create a website wherein the posts will be filtered
              and will verify the patient’s condition, the one who’s asking for help and require some proof for verification and require
              recipient for bank details under their name so that we can assure that the donations will be given to the patients/victims
            </p>
            <p> As we all know, Even before the pandemic starts, a lot of people are already facing serious illness like cancer, Chronic kidney
              failure, heart problems etc. And we know that they are high-maintenance diseases that comes with treatments, medicines and endless
              laboratories that costs no joke.  And for an average or low income earners, they cannot sustain all the expenses needed that’s why
              we can see a lot of people asking for help in all social media platforms. That’s why we came up with the idea of putting it together
              in one website where we can verify the patients and their condition so that donors can have peace in their minds that their hard-earned
              money will go to where it’s supposed to be. It also has a part where people can donate in-kind donations for our calamity victims such 
              as fire, typhoon or any other natural disaster that may hit our country.
            </p><br>

            <div class="row">
              <h1 style="color: #ff6112">MEET THE CREATORS!</h1>
              <p>If you have any suggestion or you want to collaborate with us, feel free to reach out. We will be more than happy
                to hear your great ideas!
              </p><br>
              <div class="col-md-6">
              <img src="../images/tg.jpg" class="w-75 h-75 rounded mx-auto d-block" alt="tg">
              <h4 style="color: #ff6112">TON GIL JANIER</h4>
              <h6><i>heartmovment@gmail.com</H6></i><br>
              </div>
              <div class="col-md-6">
              <img src="../images/aga.jpg" class="w-75 h-75 rounded mx-auto d-block" alt="aga">
              <h4 style="color: #ff6112">MARGARETTE REMOLIN</h4>
              <h6><i>margaretteremolin@gmail.com</H6></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!---==========SLIDER MAIN CONTENT END==========-->
    


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

<!---==========FOOTER CONTENT END==========-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="../js/main.js"> </script>
</body>
</html>