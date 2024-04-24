<?php 

session_start();

function menu(){

	for ($i=1; $i <= 5 ; $i++) { 
		echo '<li><a href="?nav='.$i.'">Menu '.$i.'</a></li>';
	}
	if(@$_SESSION["utilizador"] != ''){
		echo '<li><a href="?nav=10">Minha Conta</a></li>';
		echo '<li><a href="teste/sair.php">Sair</a></li>';
	}

}

function login_test($nome, $senha){
	if($nome == 'hugo' && $senha == '123'){
		//echo 'Sucesso';
		@$_SESSION["utilizador"] = $nome;
		echo '<meta http-equiv="refresh" content="0;url=?nav=9">';
	}else{
		echo 'Dados errados';
	}
}

?>