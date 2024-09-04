<?php 
	@$opt = $_REQUEST['opt'];
	switch ($opt) {
		case 'users':
			include 'adm_utilizadores.php';
			break;
		case 'prds':
			include 'adm_produtos.php';
			break;
		case 'categorias':
			include 'adm_categorias.php';
			break;
		case 'shops':
			echo 'shops';
			break;
		case 'inst':
			include 'adm_institucional.php';
			break;
		case 'support':
			echo 'support';
			break;
		case 'banners':
			echo 'banners';
			break;
	}
?>