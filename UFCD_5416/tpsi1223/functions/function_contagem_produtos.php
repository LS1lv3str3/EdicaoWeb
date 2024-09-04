<?php
    function contagem_produtos(){
        include 'connections/config.php';
        $q = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(prd_id) AS totalProdutos FROM produtos" ));
        echo $q['totalProdutos'];
    }
?>