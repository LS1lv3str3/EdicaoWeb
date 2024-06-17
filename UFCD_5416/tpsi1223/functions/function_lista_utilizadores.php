<?php 


function function_lista_utilizadores(){
	include 'connections/config.php';
	$q = mysqli_query($conn,"SELECT login.log_email, login.log_role, users.usr_name, users.usr_surname FROM login JOIN users ON login.log_id = users.usr_log_id");
	while($a = mysqli_fetch_array($q)){
		echo '
		<tr>
			<td>'.$a["usr_name"].'</td>
			<td>'.$a["usr_surname"].'</td>
			<td>'.$a["log_email"].'</td>
			<td>';
				if($a["log_role"] == 1){
					echo 'Admin';
				}else{
					echo 'User';
				}
			echo '</td>
			<td></td>
		</tr>
		';
	}
}

?>