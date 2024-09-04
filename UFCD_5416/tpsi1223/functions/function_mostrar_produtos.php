<?php
    @$cat_id = $_REQUEST['cat_id'];
    include '../connections/config.php';
    $q = mysqli_query($conn, "SELECT * FROM produtos WHERE prd_categoria = '$cat_id'");
    while($a = mysqli_fetch_array($q)){
        echo'
            <tr>
                <td style="width:10%; height:auto;"><img src="img/prd/'.$a["prd_foto"].'"</img></td>
                <td>'.$a["prd_nome"].'</td>
                <td>'.number_format($a["prd_preco"], 2, ',', '').'€</td>
                <td>
                    <a href="functions/function_delete_produto.php?prd_id='.$a["prd_id"].'"><i class="fa-solid fa-trash" style="color:red;"></i></a>
				    <a href="?nav=adm&opt=prds&edit='.@$a["prd_id"].'"><i class="fa-solid fa-pen-to-square"></i></a>
                </td>
            </tr>
        ';
    }
?>