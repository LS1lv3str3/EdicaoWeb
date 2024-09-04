<div class="d-flex flex-row">
	<div class="col-lg-6 col-sm-6">
		<h3>Categorias Existentes</h3>
		<table>
			<thead>
				<th>Categoria</th>
				<th></th>
			</thead>
			<tbody>
				<?php 
					function_lista_categorias();
				?>
			</tbody>
		</table>
	</div>
	<div class="col-lg-6 col-sm-6">

		<?php 
		@$edit = $_REQUEST["edit"];
		if(!$edit){
			echo '<h3>Criar Nova Categoria</h3>
					<form method="post">
						<div class="form-floating mb-3">
			                <input class="form-control" id="cat_nome" type="text" placeholder="Nome da Categoria" name="cat_nome"/>
			                <label for="cat_nome">Nome da Categoria</label>
			            </div>
			            <button class="btn btn-primary" type="submit" name="bt_nova_categoria">Criar</button>
					</form>';
		}else{
			include 'connections/config.php';
			$q = mysqli_fetch_array(mysqli_query($conn,"SELECT cat_nome FROM categorias WHERE cat_id = '$edit'"));
			echo '<h3>Editar Categoria</h3>
					<form method="post">
						<div class="form-floating mb-3">
							<input type="hidden" name="cat_id" value="'.$edit.'">
			                <input class="form-control" id="cat_nome" type="text" value="'.$q["cat_nome"].'" name="cat_nome"/>
			                <label for="cat_nome">Nome da Categoria</label>
			            </div>
			            <button class="btn btn-primary" type="submit" name="bt_edit_categoria">Editar</button>
					</form>';
		}

		?>


		
		<?php 
		if(isset($_POST["bt_nova_categoria"])){
			function_nova_categoria($_POST["cat_nome"]);
		}
		if(isset($_POST["delete_categoria"])){
			function_delete_categoria($_POST["cat_id"]);
		}
		if(isset($_POST["bt_edit_categoria"])){
			function_edit_categoria($_POST["cat_id"], $_POST["cat_nome"]);
		}
		?>
	</div>
</div>
