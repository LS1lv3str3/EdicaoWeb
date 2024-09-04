<?php
    function footer_contactos(){
        include 'connections/config.php';
        $q = mysqli_query($conn, "SELECT inst_telefone, inst_email FROM institucional");
        $a = mysqli_fetch_array($q);

        echo'
        <i class="fa-solid fa-phone"></i>'.$a["inst_telefone"].'
	    <br>
	    <i class="fa-solid fa-desktop"></i>'.$a["inst_email"].'
        ';


    }
?>