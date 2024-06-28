<?php 

function function_form_institucional(){
	include 'connections/config.php';
	$q = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM institucional WHERE inst_id = 1"));
	echo '
	<div class="flex-column col-lg-6 col-sm-6">
			<label>Telefone: </label>
			<input type="text" name="inst_telefone" class="form-control" value="'.$q["inst_telefone"].'">
			<label>Email: </label>
			<input type="email" name="inst_email" class="form-control" value="'.$q["inst_email"].'">
			<label>Titulo: </label>
			<input type="text" name="inst_titulo" class="form-control" value="'.$q["inst_titulo"].'">	
			<label>Descrição: </label>
			<textarea name="inst_descricao" class="form-control"> '.$q["inst_descricao"].'</textarea>
		</div>
		<div class="flex-column col-lg-6 col-sm-6">
			<img src="img/'.$q["inst_foto"].'" style="width:50%; height:auto;"><br>
			<label>Foto Institucional</label>
			<input type="file" name="inst_foto" class="form-control" accept="image/png, image/jpg, application/pdf">

			<button type="submit" name="bt_institucional" class="form-control mt-2">Inserir</button>
		</div>


	';
}

?>