<div class="d-flex flex-row">
	<div class="col-lg-6 col-sm-6">
		<h3>Produtos Existentes (<?php contagem_produtos()?>)</h3>
		<h4>Selecione a Categoria para ver os Produtos</h4>
		<select class="form-control" id = "filtro_categoria" name="prd_categoria" required style="width: 90%;">
			<?php select_categorias(3)?></select>			
		<table>
			<thead>
				<th>Foto do Produto</th>
				<th>Nome do Produto</th>
				<th>Preço do Produto</th>
				
			</thead>
			<tbody id = "mostrar_produtos">
				
			</tbody>
		</table>
	</div>
	<div class="col-lg-6 col-sm-6">
		<?php
			$edit = $_REQUEST["edit"];
			
			if (!$edit) {
				echo '
					<h3>Criar Novo Produto</h3>
					<form method="post" enctype="multipart/form-data">

						<div class="form-floating mb-3">
							<input class="form-control" id="prd_nome" type="text" placeholder="Nome do Produto" name="prd_nome" required/>
							<label for="prd_nome">Nome do Produto</label>
						</div>
						<div class="form-floating mb-3">
							<input class="form-control" id="prd_preco" type="text" placeholder="Preço do Produto" name="prd_preco" required/>
							<label for="prd_preco">Preço do Produto</label>
						</div>
						<div class="form-floating mb-3">
							<input class="form-control" id="prd_descricao" type="text" placeholder="Descrição do Produto" name="prd_descricao" required/>
							<label for="prd_descricao">Descrição do Produto</label>
						</div>
						<div class="form-floating mb-3">
							<select class="form-control" id = "prd_categoria" name="prd_categoria" required>';
								select_categorias(3);
				echo '
							</select>
								<label for="prd_categoria">Categoria do Produto</label>
						</div>
						<div class="form-floating mb-3">
							<input type="file" name="prd_foto" id = "prd_foto" class="form-control" accept="image/*"/>
							<label for="prd_foto">Foto do Produto</label>
						</div>
						<button class="btn btn-primary" type="submit" name="btn_novo_produto">Criar</button>
					</form>';
								}
			else {
				include 'connections/config.php';
				$q = mysqli_query($conn, "SELECT * FROM produtos WHERE prd_id = $edit");
				$a = mysqli_fetch_array($q);
				echo '
					<h3>Editar Produto</h3>
					<form method="post" enctype="multipart/form-data">
						<input type="hidden" name="prd_id" value="'.$edit.'">
						<div class="form-floating mb-3">
							<input class="form-control" id="prd_nome" type="text" value="'.$a["prd_nome"].'" name="prd_nome" required/>
							<label for="prd_nome">Nome do Produto</label>
						</div>
						<div class="form-floating mb-3">
							<input class="form-control" id="prd_preco" type="text" value="'.$a["prd_preco"].'" name="prd_preco" required/>
							<label for="prd_preco">Preço do Produto</label>
						</div>
						<div class="form-floating mb-3">
							<input class="form-control" id="prd_descricao" type="text" value="'.$a["prd_descricao"].'" name="prd_descricao" required/>
							<label for="prd_descricao">Descrição do Produto</label>
						</div>
						<div class="form-floating mb-3">
							<select class="form-control" id = "prd_categoria" value="'.$a["prd_categoria"].'" name = "prd_categoria" required>';
								select_categorias($a["prd_categoria"]);
				echo '
							</select>
							<label for="prd_categoria">Categoria do Produto</label>
						</div>
						<div class="form-floating mb-3">
							<input type="file" name="prd_foto" id = "prd_foto" class="form-control" accept="image/*"/>
							<input type="hidden" name="prd_foto_atual" value="'.$a["prd_foto"].'"/>
							<label for="prd_foto">Foto do Produto</label>
						</div>
						<button class="btn btn-primary" type="submit" name="btn_editar_produto">Editar Produto</button>
						</form>';
			}
			echo $a["prd_foto_atual"];

			if (isset($_POST['btn_novo_produto'])) {
				func_novo_produto($_POST["prd_nome"],$_POST["prd_preco"], $_POST["prd_descricao"], $_POST["prd_categoria"], $_POST["prd_foto"]);
			}
			if (isset($_POST['btn_editar_produto'])) {
				if (isset($_FILES['prd_foto'])) {
					//Ler o Nome do ficheiro passado no form
					$foto = $_FILES["prd_foto"]["name"];
					//Guardar so a extensão do ficheiro, mantendo o nome
					$temp = explode(".", $_FILES["prd_foto"]["name"]);
					//renomear o ficheiro mantendo a mesma extensão
					$novafoto = round(microtime(true)) . '.' . end($temp);
			
					//Mover o ficheiro para o servidor
					move_uploaded_file($_FILES["prd_foto"]["tmp_name"], 'img/prd/'.$novafoto);
					func_editar_produto($_POST["prd_id"], $_POST["prd_nome"],$_POST["prd_preco"], $_POST["prd_descricao"], $_POST["prd_categoria"], $novafoto);
				}
				else {
					$foto = $_POST['prd_foto_atual'];
					$temp = explode(".", $foto);
					$foto_sem_alteracao = $foto . '.' . end($temp);
					func_editar_produto($_POST["prd_id"], $_POST["prd_nome"],$_POST["prd_preco"], $_POST["prd_descricao"], $_POST["prd_categoria"], $foto_sem_alteracao);
				}
			}
		?>


	</div>
</div>
