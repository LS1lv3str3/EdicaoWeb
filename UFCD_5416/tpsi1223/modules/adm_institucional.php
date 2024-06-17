<form method="post">
<section class="d-flex flex-row">
	
		<div class="flex-column col-lg-6 col-sm-6">
			<label>Telefone: </label>
			<input type="text" name="inst_telefone" class="form-control">
			<label>Email: </label>
			<input type="email" name="inst_email" class="form-control">
			<label>Titulo: </label>
			<input type="text" name="inst_titulo" class="form-control">	
			<label>Descrição: </label>
			<textarea name="inst_descricao" class="form-control"></textarea>
		</div>
		<div class="flex-column col-lg-6 col-sm-6">
			<label>Foto Institucional: </label>
			<textarea name="inst_foto" class="form-control"></textarea>

			<button type="submit" name="bt_institucional" class="form-control">Inserir</button>
		</div>
</section>
</form>

<?php 
	if (isset($_POST["bt_institucional"])) {
		function_institucional($_POST["inst_telefone"], $_POST["inst_email"], $_POST["inst_titulo"], $_POST["inst_descricao"], $_POST["inst_foto"]);
	}


?>