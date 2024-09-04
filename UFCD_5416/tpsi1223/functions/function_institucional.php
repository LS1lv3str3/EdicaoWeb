<?php 

function function_institucional($inst_telefone,$inst_email,$inst_titulo,$inst_descricao,$inst_foto){
	include 'connections/config.php';
	//Ler o Nome do ficheiro passado no form
	$foto = $_FILES["inst_foto"]["name"];
	//Guardar so a extensão do ficheiro, mantendo o nome
	$temp = explode(".", $_FILES["inst_foto"]["name"]);
	//renomear o ficheiro mantendo a mesma extensão
	$novafoto = round(microtime(true)) . '.' . end($temp);

	//Mover o ficheiro para o servidor
	move_uploaded_file($_FILES["inst_foto"]["tmp_name"], 'img/'.$novafoto);

	$verifica = $_FILES['inst_foto']['size'];//ver o peso

	$q = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM institucional WHERE inst_id = 1"));
	//guardar o registo na bd
	if($verifica == 0){
		//manter a foto "antiga"
		mysqli_query($conn, "UPDATE institucional SET inst_telefone = '$inst_telefone', inst_email = '$inst_email', inst_titulo = '$inst_titulo', inst_descricao = '$inst_descricao' WHERE inst_id = 1");
	}else{
		//carregar a nova foto
		mysqli_query($conn, "UPDATE institucional SET inst_telefone = '$inst_telefone', inst_email = '$inst_email', inst_titulo = '$inst_titulo', inst_descricao = '$inst_descricao', inst_foto = '$novafoto' WHERE inst_id = 1");
	}
	echo '<meta http-equiv="refresh" content="0;url=index.php?nav=adm&opt=inst">';
}

?>