<?php 


function function_lista_utilizadores(){
	include 'connections/config.php';
	$q = mysqli_query($conn,"SELECT login.log_id, login.log_email, login.log_role, login.log_status, users.usr_name, users.usr_surname FROM login JOIN users ON login.log_id = users.usr_log_id");
	while($a = mysqli_fetch_array($q)){
		echo '
		<tr>
			<td>'.$a["usr_name"].'</td>
			<td>'.$a["usr_surname"].'</td>
			<td>'.$a["log_email"].'</td>
			<td>';
				if($a["log_role"] == 1){
					echo 'Admin <a href="#" class="makeusr" id="'.$a["log_id"].'"><i class="fa-solid fa-user-minus"></i></a>';
				}else{
					echo 'User <a href="#" class="makeusr" id="'.$a["log_id"].'"><i class="fa-solid fa-user-plus"></i></a>';
				}
			echo '</td>
			<td>';
			if($a["log_status"] == 0){
				echo '<a href="#" class="inativa" id="'.$a["log_id"].'"><i class="fa-solid fa-user"></i></a>';
			}else{
				echo '<a href="#" class="ativa" id="'.$a["log_id"].'"><i class="fa-solid fa-user-slash"></i></a>';
			}	
			echo'</td>
			<td>
			<button href="#edicao_conta_utilizador" id="'.$a["log_id"].'" type="button" class="btn btn-primary editar" data-bs-toggle="modal" data-bs-target="#edicao_conta_utilizador">Editar</button>

			</td>
		</tr>
		';
	}
}

?>


