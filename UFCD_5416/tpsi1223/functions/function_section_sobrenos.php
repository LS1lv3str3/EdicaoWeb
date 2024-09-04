<?php
    function function_section_sobrenos(){
        include 'connections/config.php';
        $q = mysqli_query($conn, "SELECT inst_foto, inst_titulo, inst_descricao FROM institucional");
        $a = mysqli_fetch_array($q);
        echo '
        <section>
	        <h3>Sobre Nós</h3>
	        <div class="d-flex flex-row">
		        <div class="col-lg-6 col-sm-6">
			        <img src="img/'.$a["inst_foto"].'">
		        </div>
		        <div class="col-lg-6 col-sm-6">
			        <h3>'.$a["inst_titulo"].'</h3>
                    <p>'.$a["inst_descricao"].'</p>
		        </div>
	        </div>
        </section>';
    }
?>