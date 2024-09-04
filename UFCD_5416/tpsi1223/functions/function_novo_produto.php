<?php
    function func_novo_produto($prd_nome, $prd_preco, $prd_descricao, $prd_categoria, $prd_foto){
        include 'connections/config.php';

        //Ler o Nome do ficheiro passado no form
	    $foto = $_FILES["prd_foto"]["name"];
	    //Guardar so a extensão do ficheiro, mantendo o nome
	    $temp = explode(".", $_FILES["prd_foto"]["name"]);
	    //renomear o ficheiro mantendo a mesma extensão
	    $novafoto = round(microtime(true)) . '.' . end($temp);

        //Mover o ficheiro para o servidor
	    move_uploaded_file($_FILES["prd_foto"]["tmp_name"], 'img/prd/'.$novafoto);

        $prd_nome = mysqli_real_escape_string($conn, $prd_nome);
        $prd_preco = mysqli_real_escape_string($conn, $prd_preco);
        $prd_descricao = mysqli_real_escape_string($conn, $prd_descricao);

        mysqli_query($conn, "INSERT INTO produtos (prd_nome, prd_preco, prd_descricao, prd_categoria, prd_foto)
                        VALUES ('$prd_nome', '$prd_preco', '$prd_descricao', '$prd_categoria', '$novafoto')");
        
        echo '<meta http-equiv="refresh" content="0;url=index.php?nav=adm&prds">';
    }
?>