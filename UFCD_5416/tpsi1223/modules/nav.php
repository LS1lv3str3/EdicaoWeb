<?php
 // Verificar se o usuário está logado
    if (!isset($_SESSION["log_role"])) {
        return; // Não exibe nada se não estiver logado
    } 
if($_SESSION["log_role"] == 0){
	//user menu
	echo '<nav class="usr_nav">';
			function_lista_categorias();
	echo '</nav>';
}else{
	//admin menu
	echo '<nav class="adm_nav">';
		echo '<ul>';
			echo '<li><a href="?nav=adm&opt=users">Utilizadores</a></li>';
			echo '<li><a href="?nav=adm&opt=categorias">Categorias</a></li>';
			echo '<li><a href="?nav=adm&opt=prds">Produtos</a></li>';
			echo '<li><a href="?nav=adm&opt=shops">Compras</a></li>';
			echo '<li><a href="?nav=adm&opt=inst">Institucional</a></li>';
			echo '<li><a href="?nav=adm&opt=support">Suporte</a></li>';
			echo '<li><a href="?nav=adm&opt=banners">Banners</a></li>';

		echo '</ul>';
	echo '</nav>';
}



?>
