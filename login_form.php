<?php

@include 'config.php';

session_start();

if(isset($_POST['login'])){
  
  $email = trim($_POST['email']);
  $password = trim($_POST['password']);

  $sqlValidate = " SELECT * FROM user_form WHERE email = '$email' AND password = md5('$password') ";
  
  $result = mysqli_query($conn, $sqlValidate);

  if(mysqli_num_rows($result) > 0){
     
    $row = mysqli_fetch_array($result);

    if($row['user_type'] == 'donor'){

      $_SESSION['donor_firstname'] = $row['firstname'];
      header('location:./donor/donor_profile.php');

    }elseif($row['user_type'] == 'recipient'){

      $_SESSION['recipient_firstname'] = $row['firstname'];
      header('location:./recipient/recipient_profile.php');

    }elseif($row['user_type'] == 'admin'){

      $_SESSION['admin_firstname'] = $row['firstname'];
      header('location:./Admin/admin.php');

    }
  }else{
    $error[] = 'incorrect email or password!';
  }
};
?>


<!DOCTYPE html>
<html lang="en">


<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Donate PX</title>
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

<!---GoogleFonts-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins&display=swap" rel="stylesheet">
<!--Bootsrap-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<style>
    #intro {
      /*background-image: url(/assests/images/img-slider2.jpg);*/
      height: 80vh;
      width: 100%;
      position: relative;
      background-repeat: no-repeat;
      background-size: cover;
    }

    body{
    position: relative;
    width: 100%;
    height: 100vh;
    background-image: url('/donatePX/assests/images/img-slider1.jpg');
    background-repeat: no-repeat !important;
    background-size: cover;
    background-position: center;
    background-color: rgba(0, 0, 0, 0.8) !important;
    background-attachment:fixed;

  }
    .mask{
      display: block;
      justify-content: center;
      align-items: center;
    }

    .rounded-5{
      margin-top: 30vh;
    }
    .py-5{
      padding: 1.2rem;
    }
    .btn-submit{
      justify-content: center;
      align-content: center;
    }

    /* Height for devices larger than 576px */
    @media (min-width: 992px) {
      #intro {
        margin-top: 0;
      }
    }

    .container form .error-msg{
  margin: 10px;
  display: block;
  background: #ff6112;
  color: #fff;
  border-radius: 5px;
  font-size: 20px;
  padding: 5px
}
  </style>
<body>
 
  <!---==========MAIN CONTENT START==========-->
  <header class="container">
    <!-- Background image -->
    <div id="intro" class="">
      <div class="mask d-flex">
        <div class="container">
          <div class="row justify-content-center align-items-center">
            <div class="col-xl-5 col-md-8">
              
              <form action="" method="post" class="bg-white  rounded-5 shadow-5-strong p-5 mt-10">
                <h4>LOGIN NOW</h4>
              <?php
              if (isset($error)){
                foreach($error as $error){
                  echo '<span class="error-msg">'.$error.'</span>';
                }
              };
              ?>
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="text" id="username" class="form-control" placeholder="Your email address" name="email" required/>
                  
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" id="password" class="form-control" name="password" placeholder="Enter password" required/>
                </div>

                <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4">
                  <div class="col d-flex justify-content-center">
                    <!-- Checkbox -->
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                      <label class="form-check-label" for="form1Example3">
                        Remember me
                      </label>
                    </div>
                  </div>

                  <div class="col text-center">
                    <!-- Simple link -->
                    <a href="#!">Forgot password?</a>
                  </div>
                </div>

                <!-- Submit button -->
                <div class="btn-submit">
                  <button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
                  <a href="register_form.php" class="btn btn-primary btn-block"><span>Sign Up</span></a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!---==========MAIN CONTENT END==========-->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>