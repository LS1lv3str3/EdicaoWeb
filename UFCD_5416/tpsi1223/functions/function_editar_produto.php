<?php
    function func_editar_produto($prd_id, $prd_nome, $prd_preco, $prd_descricao, $prd_categoria, $prd_foto ){
        include 'connections/config.php';
        $q = mysqli_query($conn, "SELECT * FROM produtos WHERE prd_id = $prd_id");
        $a = mysqli_fetch_array($q);
        $prd_nome = mysqli_real_escape_string($conn,$prd_nome);
        $prd_preco = mysqli_real_escape_string($conn,$prd_preco);
        $prd_descricao = mysqli_real_escape_string($conn,$prd_descricao);

        if ($prd_foto != $a["prd_foto"]) {
            //Ler o Nome do ficheiro passado no form
            $foto = $_FILES["prd_foto"]["name"];
            //Guardar so a extensão do ficheiro, mantendo o nome
            $temp = explode(".", $_FILES["prd_foto"]["name"]);
            //renomear o ficheiro mantendo a mesma extensão
            $novafoto = round(microtime(true)) . '.' . end($temp);
    
            //Mover o ficheiro para o servidor
            move_uploaded_file($_FILES["prd_foto"]["tmp_name"], 'img/prd/'.$novafoto);

            mysqli_query($conn, "UPDATE produtos 
                                    SET prd_nome = '$prd_nome',
                                        prd_preco = '$prd_preco',
                                        prd_descricao = '$prd_descricao',
                                        prd_categoria = '$prd_categoria',
                                        prd_foto = '$novafoto'");
        }
        
        mysqli_query($conn, "UPDATE produtos 
                                SET prd_nome = '$prd_nome',
                                    prd_preco = '$prd_preco',
                                    prd_descricao = '$prd_descricao',
                                    prd_categoria = '$prd_categoria',
                                    prd_foto = '$prd_foto'");
        	//echo '<meta http-equiv="refresh" content="0;url=index.php?nav=adm&opt=prds">';

    }
?>