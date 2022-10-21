<?php

require_once '../config.php';

session_start();

if (isset($_POST['submit'])){
  
  $admin_username = trim($_POST['admin_username']);
  $admin_password = trim($_POST['admin_password']);


  $sqlVal = mysqli_query($conn, " SELECT * FROM admin_form WHERE admin_username = '$admin_username' AND admin_password = md5('$admin_password') ");

  $row = mysqli_fetch_array($sqlVal);

  if(is_array($row)){
    $_SESSION["admin_username"] = $row['admin_username'];
    $_SESSION["admin_password"] = $row['admin_password'];

  } else {
    echo '<script type= "text/javascript">';
    echo 'alert("Invalid Username or Password");';
    echo 'window.location.href = "admin_login.php" ';
    echo '</script>';
  }
  {
    if(isset($_SESSION["admin_username"])){
        header('location:index.php'); 
    }
  }



//   if(mysqli_num_rows($result) > 0){
     
//     $row = mysqli_fetch_array($result);

    

//     if($row['user_type'] == 'admin'){

//       $_SESSION['admin_username'] = $row['admin_username'];
//       header('location:./Admin/index.php');

//     }
//   }else{
//     $error[] = 'Incorrect username or password!';
//   }
};
?>



<!DOCTYPE html>
<html lang="en">


<head>
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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">

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
    background-image: url('../images/admin.jpg');
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
              
              <form action="" method="POST" class="bg-white  rounded-5 shadow-5-strong p-5 mt-10">

              <center><img src="../images/human_icon.png" width="100px" height="100px" style="border-radius:100%"> 
                    </center>
                <center><h4>Admin Login</h4></cemter>
              <?php
              if (isset($error)){
                foreach($error as $error){
                  echo '<span class="error-msg">'.$error.'</span>';
                }
              };
              ?>
                <!-- username input -->
                <div class="form-outline mb-4">
                  <input type="text" id="username" class="form-control" placeholder="Enter username" name="admin_username" required/>
                  
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" id="password" class="form-control" name="admin_password" placeholder="Enter password" required/>
                </div>
                <!-- Submit button -->
                <div class="btn-submit">
                  <button type="submit" name="submit" class="btn btn-primary btn-block">Login</button>
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