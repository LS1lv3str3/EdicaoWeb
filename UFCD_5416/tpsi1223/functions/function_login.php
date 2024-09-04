<?php

function func_login($log_email, $log_senha){
	include 'connections/config.php';
	$log_email = mysqli_real_escape_string($conn,$log_email); 
	$log_senha = mysqli_real_escape_string($conn,$log_senha);

	//Query
	$log_senha = base64_encode($log_senha);

	$q = mysqli_query($conn,"SELECT log_email, log_senha, log_role, log_id FROM login WHERE log_email = '$log_email' AND log_senha = '$log_senha' AND log_status = 1");
	$check = mysqli_num_rows($q); //qtas linhas temos de resposta
	if($check == 0){
		echo 'Erro. Utilizador ou Password Errados';
	}else{
		//Ler respostas
		$a = mysqli_fetch_array($q);

		//Existe Utilizador
		$_SESSION["log_email"] =  $a["log_email"];
		$_SESSION["log_role"] = $a["log_role"];
		$_SESSION["log_id"] = $a["log_id"];
		echo '<meta http-equiv="refresh" content="0;url=index.php">';
	}
}

?>