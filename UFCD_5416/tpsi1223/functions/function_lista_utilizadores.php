<?php 


function function_lista_utilizadores(){
	include 'connections/config.php';
	$q = mysqli_query($conn,"SELECT login.log_id, login.log_email, login.log_role, users.usr_name, users.usr_surname, users.usr_active FROM login JOIN users ON login.log_id = users.usr_log_id");
	while($a = mysqli_fetch_array($q)){
		echo '
		<tr>
			<td>'.$a["usr_name"].'</td>
			<td>'.$a["usr_surname"].'</td>
			<td>'.$a["log_email"].'</td>
			<td>'.$a["usr_active"].'</td>
			<td>';
				if($a["log_role"] == 1){
					echo 'Admin';
				}else{
					echo 'User';
				}
			echo '</td>';
			echo '
			<td>
				<form method="post">
					<input type="hidden" name="log_id" value="'.$a["log_id"].'">
					<button type="submit" name="disable_enable_user"><i class="fa-solid fa-trash" style="color:red;"></i></button>
					<a href="?nav=adm&opt=users&edit='.$a["log_id"].'"><i class="fa-solid fa-pen-to-square"></i></a>
				</form>
			</td>
		</tr>';
	}
}

?>