<form method="post">
<section class="d-flex flex-row">
	
		<div class="flex-column col-lg-6 col-sm-6">
			<label>Telefone: </label>
			<input type="text" name="inst_telefone" class="form-control">
			<label>Email: </label>
			<input type="email" name="inst_email" class="form-control">
		</div>
		<div class="flex-column col-lg-6 col-sm-6">
			<label>Titulo: </label>
			<input type="text" name="inst_titulo" class="form-control">	
			<label>Descrição: </label>
			<textarea name="inst_descricao" class="form-control"></textarea>

			<button type="submit" name="bt_institucional">Inserir</button>
		</div>
		<!-- 
		Objetivo 
			Submeter o form para funcao func_institucional
			Criar tabela institucional com os respetivos campos
			A funcao deve carregar os valores para a BD
		-->
</section>
</form>