
<?php
       
	require_once '../config.php';


?>  


<?php


if (!isset($_GET['do']) || $_GET['do'] != 1) {
					

switch ($_GET['type']) {
	case 'user_form':
		$query = 'DELETE FROM user_form
				WHERE
				id = ' . $_GET['ID'];

		$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
						
?>
<script type="text/javascript">
	alert("Successfully Deleted.");
	window.location = "users.php";
</script>		
		
	
<?php
//break;
	}
}
?>

