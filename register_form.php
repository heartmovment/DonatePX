<?php

@include 'config.php';

if(isset($_POST['submit'])){

  $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
  $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = md5($_POST['password']);
  $cpassword = md5($_POST['confirmpassword']);
  $user_type = $_POST['user_type'];

  $select = " SELECT * FROM user_form WHERE firstname = '$firstname' && lastname = '$lastname' && email = '$email' && password = '$password' ";
  
  $result = mysqli_query($conn, $select);

  if(mysqli_num_rows($result) > 0){
     
    $error[] = 'User already exist!';
  }
  else{
    if($password != $cpassword){
    $error[] = 'Password does not match!';
    }else{
      $insert = "INSERT INTO user_form(firstname, lastname, email, password, user_type) VALUES('$firstname','$lastname','$email','$password','$user_type')";
      mysqli_query($conn, $insert);
      
      header('location:login_form.php');
    }
  };
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

<!----Custom CSS-->
<!---GoogleFonts-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins&display=swap" rel="stylesheet">
<!--Bootsrap-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">


<style>
    /*========================
    REG FORM CONTENT START
    ========================*/
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

.row .btn-primary{
  background-color: #ff6112;
  border: none;
}
.text-center i{
  color: #ff6112;
  text-align: center;
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


  /*========================
    REG FORM  CONTENT END
    ========================*/

</style>
</head>
<body>
  
  <!---==========MAIN CONTENT START==========-->
  <div class="container px-4 py-5 px-md-5 text-center text-lg-start" id="register"> 
    <div class="row gx-lg-5 align-items-center mb-5"> 
      <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
        <h1 class="my-5 display-3 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)"> 
          <span>Charity is an</span> <br> 
          <span style="color: hsl(218, 81%, 75%)">Act of A Soft Heart</span> 
        </h1> <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus, expedita iusto veniam atque, magni tempora mollitia dolorum consequatur nulla, neque debitis eos reprehenderit quasi ab ipsum nisi dolorem modi. Quos?
              </p> 
      </div> 
      <div class="col-lg-6 mb-5 mb-lg-0 position-relative"> 
        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong">

        </div> 
        <div id="radius-shape-2" class="position-absolute shadow-5-strong">

        </div> 
        <div class="card bg-glass"> 
          <div class="card-body px-4 py-5 px-md-5"> 
            <form action="" method="post" autocomplete="off"> 

              <h4>Registered Now</h4>
              <?php

              if (isset($error)){
                foreach($error as $error){
                  echo '<span class="error-msg">'.$error.'</span>';
                }
              };

              ?>
              <!-- 2 column grid layout with text inputs for the first and last names --> 
              <div class="row"> 
                <div class="col-md-6 mb-4"> 
                  <div class="form-outline"> 
                    <input type="text" id="" class="form-control" name="firstname" placeholder="Enter first name" required> 
                    
                  </div>
                </div> 
                <div class="col-md-6 mb-4">
                  <div class="from-outline"> 
                    <input type="text" id="form3Example2" class="form-control" name="lastname" placeholder="Enter last name" required>
                  </div> 
                </div> 
              </div> 
              <!-- Email input --> 
              <div class="row">
                <div class="col-md-12 mb-4"> 
                  <div class="form-outline">
                    <input type="email" id="form3Example3" class="form-control" name="email" placeholder="Enter email address" required> 
                    
                  </div>
                </div> 
              </div>
    
              <div class="row">  <!-- Password input --> 
                <div class="col-md-12 mb-4">
                  <div class="form-outline"> 
                    <input type="password" id="password" class="form-control" name="password" placeholder="Enter password" required> 
                   
                  </div>  
                </div> 
              </div>
              <div class="row">  <!-- Password input --> 
                <div class="col-md-12 mb-4">
                  <div class="form-outline"> 
                    <input type="password" id="confirmpassword" class="form-control" name="confirmpassword" placeholder="Enter confirm password" required> 
                    
                  </div>  
                </div> 
              </div>
              <div class="row">  <!-- Password input --> 
                <div class="col-md-12 mb-4">
                  <div class="form-outline"> 
                    <select name="user_type" required>
                      <option value="recipient">Recipient</option>
                      <option value="donor">donor</option>
                    </select> 
                    
                  </div>  
                </div> 
              </div>

              <div class="row">  <!-- terms and condition --> 
                <div class="col-md-12 mb-4">
                  <input class="form-check-input" type="radio" name="" id="flexRadioDefault2">
                  <label class="form-check-label text-muted" for="">
                  I accept the <a href="">Terms of Use</a> & <a href="">Privacy Policy</a>
                  </label> 
                </div> 
              </div>
              
              <!-- Submit button --> 
              <button type="submit" name="submit"class="btn  btn-primary btn-block mb-4" >Registered</button>
              <a href="login_form.php" class="btn btn-primary btn-block mb-4"><span>Login</span></a>
              <!-- <button type="submit" class="btn  btn-primary btn-block mb-4" >Login</button>  -->
              <!-- Register buttons --> 
              <div class="text-center"> 
                <p>or sign up with:</p> 
                <button type="button" class="btn btn-link btn-floating mx-1"> <i class="fab fa-facebook-f" aria-controls="#picker-editor"></i> </button> 
                <button type="button" class="btn btn-link btn-floating mx-1"> <i class="fab fa-google" aria-controls="#picker-editor"></i> </button> 
                <button type="button" class="btn btn-link btn-floating mx-1"> <i class="fab fa-twitter" aria-controls="#picker-editor"></i> </button> 
        
              </div> 
            </form> 
          </div> 
        </div> 
      </div> 
    </div> 
  </div> 

  <!---==========MAIN CONTENT END==========-->




  



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>