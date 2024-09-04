<form method="post" enctype="multipart/form-data">
<section class="d-flex flex-row">
		<?php 
		function_form_institucional();
		
		if(isset($_POST["bt_institucional"])){
			function_institucional($_POST["inst_telefone"],$_POST["inst_email"],$_POST["inst_titulo"],$_POST["inst_descricao"],$_POST["inst_foto"]);
			}
		?>
		
</section>
</form>