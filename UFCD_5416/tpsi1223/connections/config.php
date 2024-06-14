<?php

$host = 'localhost';
$user = 'root';
$pw = '';
$db = 'tpsi1223';

//estabelecer ligação ao sql
$conn = mysqli_connect($host, $user, $pw, $db);

//comunicar em utf-8 com a bd
mysqli_set_charset($conn, "UTF8");

//ver erro em caso de não ligar
/*if($conn ->errno){
	echo 'Não é possivel aceder à BD. ERRO: '.$conn->error;
	exit;
}*/
if (!$conn) {
	die("Erro de Ligação: ".mysqli_connect_error());
}

?>