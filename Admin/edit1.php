
<?php

	$uID= $_POST['id'];
	$firstname= $_POST['firstname'];
	$lastname= $_POST['lastname'];
	$email= $_POST['email'];
	$user_type=$_POST['user_type'];
	$pass= $_POST['password'];
	// $date=$_POST['date_created'];
			
	require_once '../config.php';
		
	$query = 'UPDATE user_form set firstname ="'.$firstname.'",
		lastname ="'.$lastname.'", email="'.$email.'",
		user_type="'.$user_type.'", password="'.$pass.'" WHERE
		ID ="'.$uID.'"';
	
	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
							
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "users.php";
		</script>
