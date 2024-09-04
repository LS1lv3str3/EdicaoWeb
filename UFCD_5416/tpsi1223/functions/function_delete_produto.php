<?php
    
    session_start();
    $prd_id = $_REQUEST['prd_id'];
	include '../connections/config.php';
 
	mysqli_query($conn,"DELETE FROM produtos WHERE prd_id = '$prd_id'");

    echo '<meta http-equiv="refresh" content="0;url=../index.php?nav=adm&opt=prds">';   
    
?>