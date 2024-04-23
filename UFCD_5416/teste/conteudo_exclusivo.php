<?php
if($_SESSION['utilizador'] == ''){
	echo 'Não tem acesso a este conteúdo';
}else{
	echo 'Olá '.$_SESSION['utilizador'].' conteúdos exclusivos disponiveis';
}
?>