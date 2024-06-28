<?php 

function function_edit_user($log_id, $log_email){
	include 'connections/config.php';
	$log_email = mysqli_real_escape_string($conn,$log_email);
	mysqli_query($conn,"UPDATE login SET log_email = '$log_email' WHERE log_id = '$log_id'");
	echo '<meta http-equiv="refresh" content="0;url=index.php?nav=adm&opt=users">';
}


?>