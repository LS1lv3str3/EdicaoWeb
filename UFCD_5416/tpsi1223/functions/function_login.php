<?php

function func_login($log_email, $log_senha){
	include 'connections/config.php';
	$log_email = mysqli_real_escape_string($conn,$log_email); 
	$log_senha = mysqli_real_escape_string($conn,$log_senha);
	
	

	//Query
	$log_senha = base64_encode($log_senha);

	$q = mysqli_query($conn,"SELECT log_email, log_senha, log_role, log_id FROM login WHERE log_email = '$log_email' AND log_senha = '$log_senha'");
	$check = mysqli_num_rows($q); //qtas linhas temos de resposta
	if($check == 0){
		echo 'Erro. Utilizador ou Password Errados';
	}

	$result = mysqli_fetch_array(mysqli_query($conn, "SELECT usr_active FROM users JOIN login ON usr_log_id = log_id WHERE log_email = '$log_email'"));
    $status = $result['usr_active'];

    if ($status == 0)
	{
		echo 'A sua conta está desativada! Contacta um administrador.';
	}
	else{
		//Ler respostas
		$a = mysqli_fetch_array($q);
		$log_id = mysqli_real_escape_string($conn,$log_id);
		//Existe Utilizador
		$_SESSION["log_email"] =  $a["log_email"];
		$_SESSION["log_role"] = $a["log_role"];
		$_SESSION["log_id"] = $a["log_id"];
		echo '<meta http-equiv="refresh" content="0;url=index.php">';
	}
}

?>