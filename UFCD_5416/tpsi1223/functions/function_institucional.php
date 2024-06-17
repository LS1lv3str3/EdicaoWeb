<?php
    function function_institucional($inst_telefone, $inst_email, $inst_titulo, $inst_descricao, $inst_foto){
        include 'connections/config.php';
        //Ler o Nome do ficheiro passsado no form
        $foto = $_FILES["inst_foto"]["name"];
        
        //Guardar so a extensão do ficheiro, mantendo o nome
        $temp = explode(".",$_FILES["inst_foto"]["name"]);

        //Renomear o ficheiro mantendo a extensão
        $novafota = round(microtime(true)) . '.' . end($temp);

        //mover o ficheiro para o servidor
        move_uploaded_file($_FILES["inst_foto"]["temp_name"], 'img/'.$novafoto);

        //guardar o registo na BD
        mysqli_query($conn, "UPDATE institucional SET inst_telefone = '$inst_telefone', inst_email = '$inst_email', inst_titulo = '$inst_titulo', inst_descricao = '$inst_descricao'");
    }
?>