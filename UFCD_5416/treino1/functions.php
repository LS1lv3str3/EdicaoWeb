<?php

session_start();
function menu(){
    for ($i=1; $i <= 5 ; $i++) {
        switch ($i) {
            case '1':
                echo '<li><a href= "?nav=quem">Quem</a></li>';
                break;
            case '2':
                echo '<li><a href= "?nav=servicos">Serviços</a></li>';
                break;
            case '3':
                echo '<li><a href= "?nav=produtos">Produtos</a></li>';
                break;
            case '4':
                echo '<li><a href= "?nav=contactos">Contactos</a></li>';
                break;
        } 
    }
    if(@$_SESSION["utilizador"] != ''){
        echo '<li><a href="sair.php">Sair</a></li>';
    }
}


function login_test($nome, $senha){
	if($nome == 'lucas' && $senha == '1234'){
		//echo 'Sucesso';
		@$_SESSION["utilizador"] = $nome;
		echo '<meta http-equiv="refresh" content="0;url=index.php">';
	}else{
		echo 'Dados errados';
	}
}
?>