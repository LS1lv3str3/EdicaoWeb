<?php

function func_registo($usr_name, $usr_surname, $log_email, $log_senha, $senha_check){
	include 'connections/config.php';
	$usr_name = mysqli_real_escape_string($conn, $usr_name);
	$usr_surname = mysqli_real_escape_string($conn, $usr_surname);
	$log_email = mysqli_real_escape_string($conn, $log_email);
	$log_senha = mysqli_real_escape_string($conn, $log_senha);
	$senha_check = mysqli_real_escape_string($conn, $senha_check);

	//inserir user
	//saber se o user ja existe
	//ver se as senhas sao iguais

	if($log_senha == $senha_check){
		//avança ver se o email existe na BD
		
		$check = mysqli_fetch_array(mysqli_query($conn,"SELECT log_email FROM login WHERE log_email = '$log_email'"));
		if(!$check){
			//posso criar um utilizador
			$log_senha = base64_encode($log_senha); 
			mysqli_query($conn, "INSERT INTO login (log_email, log_senha) VALUES ('$log_email', '$log_senha')");
			$log_id = mysqli_insert_id($conn);//chave primaria gerada na ultima interação
			mysqli_query($conn, "INSERT INTO users (usr_log_id, usr_name, usr_surname) VALUES ('$log_id', '$usr_name', '$usr_surname')");
			echo 'Conta criada com sucesso!';
		}else{
			echo 'Email já está registado';
		}

	}else{
		echo 'As senhas indicadas não coincidem.';
	}


}//fecha funcao

?>