
<?php
    require_once '../config.php';
          
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $user_type =$_POST['user_type'];
        
    switch($_GET['action']){
        case 'add':	
            $insert = "INSERT INTO user_form(firstname, lastname, email, password, user_type) VALUES('$firstname','$lastname','$email','$password', '$user_type')";
            mysqli_query($conn, $insert) or die('Error in updating Database');		
            
            
        break;
                    
        }
?>
     
    <script type="text/javascript">
        alert("Successfully added.");
        window.location = "users.php";
    </script> 

                

