<?php
if(!$_SESSION['utilizador']){
	echo 'Faça login';
}
else{
	echo 'Dados Utilizador: ';
	echo '
	<form method="post">
		<label>Nome: </label>
		<input type="text" name="nome" value="'.$_SESSION['utilizador'].'">
		<label>Senha: </label>
		<input type="password" name="senha" placeholder="Nova Senha">
		<button type="submit" name="trocasenha">Trocar Senha</button>
	</form>
	';
	$a = 10;
	$b = 5;
	echo 'Soma: '.$a + $b;
	echo '<br> Sub: '.$a - $b;
	echo '<br>Mult: '.$a * $b;
	echo '<br>Div: '.$a / $b;


	for ($i=0; $i < 10; $i++) { 
		$a -= $i;
		echo '<br>'.$a;
	}
	
}
?>