<?php 

function function_nova_categoria($cat_nome){
	include 'connections/config.php';
	$cat_nome = mysqli_real_escape_string($conn, $cat_nome);
	$q = mysqli_query($conn,"SELECT cat_nome FROM categorias WHERE cat_nome = '$cat_nome'");
	$check = mysqli_num_rows($q);
	if($check == 0){
		//não existe a categoria
		mysqli_query($conn,"INSERT INTO categorias (cat_nome) VALUES ('$cat_nome')");
		echo '<meta http-equiv="refresh" content="0;url=index.php?nav=adm&opt=categorias">';
	}else{
		//Já existe a categoria
		echo 'A categoria indicada já existe. Escolha outro nome.';

	}
}
?>