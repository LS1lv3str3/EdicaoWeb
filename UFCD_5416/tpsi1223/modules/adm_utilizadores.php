<div class="col-lg-6 col-sm-6">
		<h3>Utilizadores Existentes</h3>
		<table>
			<thead>
				<th>Nome</th>
				<th>Sobrenome</th>
				<th>Email</th>
				<th>Status</th>
				<th>Perfil</th>
				<th></th>
			</thead>
			<tbody>
				<?php 
					function_lista_utilizadores();
				?>
			</tbody>
		</table>
	</div>
	<div class="col-lg-6 col-sm-6">
		<?php
		include 'connections/config.php';
		
		if (isset($_GET['edit'])) {
			$edit = $_GET['edit'];
			$q = mysqli_fetch_array(mysqli_query($conn,"SELECT log_id, log_email, usr_active FROM login JOIN users ON log_id = usr_log_id WHERE log_id = '$edit'"));
			
			echo ' 
			<h3>Editar User</h3>
					<form method="post">
						<div class="form-floating mb-3">
							<input type="hidden" name="log_id" value="'.$edit.'">
							<input class="form-control" id="log_email" type="text" value=" " name="log_email"/>
							<label for="usr_name">Nove Email</label>
						</div>
						<button class="btn btn-primary" type="submit" name="bt_edit_user">Editar</button>
					</form>
			' ;
		}
		if(isset($_POST["bt_edit_user"])){
			function_edit_user($_POST["log_id"], $_POST["log_email"]);
		}

		if (isset($_POST["disable_enable_user"])) {
			function_disable_enable_user($_POST["log_id"]);
		}

		?>
	</div>
</div>