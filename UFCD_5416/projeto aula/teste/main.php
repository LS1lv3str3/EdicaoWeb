<main>
<?php 
	
@$nav = $_REQUEST['nav'];
switch ($nav) {
	case '1':
		echo 'Conteudo Menu 1';
		include 'conteudo1.php';
		break;
	case '2':
		include 'conteudo2.php';
		break;
	case '3':
		echo 'Conteudo Menu 3';
		break;
	case '4':
		echo 'Conteudo Menu 4';
		break;
	case '5':
		echo 'Conteudo Menu 5';
		break;

	case '9':
		echo 'conteudo exclusivo';
		include 'conteudo_exclusivo.php';
		break;
	case '10':
		include 'conta_utilizador.php';
	default:
		echo 'Home';
		break;
}

?>
</main>