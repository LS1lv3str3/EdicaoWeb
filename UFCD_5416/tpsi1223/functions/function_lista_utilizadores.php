<?php 

function function_lista_utilizadores(){
	include 'connections/config.php';

	 // Verificar se o usuário está logado
	 if (!isset($_SESSION["log_role"])) {
        return; // Não exibe nada se não estiver logado
    }

	$q = mysqli_query($conn,"SELECT CONCAT(usr_name, ' ', usr_surname) AS Nome FROM users");
	while($a = mysqli_fetch_array($q)){
		if ($_SESSION["log_role"] == 1) {
			echo '<ul><li>'.$a["Nome"].'</li></ul>';
		}
		
	}
}