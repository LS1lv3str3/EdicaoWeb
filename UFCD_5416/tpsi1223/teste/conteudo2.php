<!-- Cria um formulario com :

3 campos (Bmw, Volvo, Citroen) - Para cada campo o user indica num input type number uma qta de 1 a 9 (min, max);

Ao submeter o form, carrega o numero de viaturas criadas para o array de cada marca (bmw, bmw, bmw)...

O array é declarado como variavel de sessao

Na pagina conteudo1.php: 

Mostra o total de viaturas disponiveis (soma bmw, volvo, citroen).

Mostra o total de viaturas de cada marca

Lista na vertical os carros de cada marca-->

<h3>Input qta carros</h3>
<form method="post">
	<label>Bmw</label>
	<input type="number" min="1" max="9" name="bmw" required><br>
	<label>Volvo</label>
	<input type="number" min="1" max="9" name="volvo" required><br>
	<label>citroen</label>
	<input type="number" min="1" max="9" name="citroen" required><br>
	<button type="submit" name="carrega">Carregar</button>
</form>

<?php 
if(isset($_POST['carrega'])){
	$_SESSION['bmw'] = array();
	$_SESSION['volvo'] = array();
	$_SESSION['citroen'] = array();
	for ($i=1; $i <= $_POST['bmw']; $i++) {
		$nome = 'Bmw'.$i; 
		array_push($_SESSION["bmw"], $nome);
	}
	for ($i=1; $i <= $_POST['volvo']; $i++) {
		$nome = 'Volvo'.$i; 
		array_push($_SESSION["volvo"], $nome);
	}
	for ($i=1; $i <= $_POST['citroen']; $i++) {
		$nome = 'Citroen'.$i; 
		array_push($_SESSION["citroen"], $nome);
	}
	echo 'Viaturas Carregadas';
}

?>