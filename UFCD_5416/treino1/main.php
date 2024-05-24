<main>
<?php
@$nav = $_REQUEST['nav'];
switch ($nav) {
	case 'quem':
		echo 'Conteudo Página Quem Somos';
		break;
	case 'servicos':
		echo 'Conteudo Página Serviços';
		break;
	case 'produtos':
		echo 'Conteudo Página Produtos';
		break;
	case 'contactos':
		echo 'Conteudo Página Contactos';
		break;
    default:
        echo 'Home';
        break;
    }
    
    include 'login.php';
?>
</main>