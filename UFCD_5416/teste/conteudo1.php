<?php 
if($_SESSION['utilizador'] == ''){
	echo '<form method="post">
    <div class="form-floating mb-3">
        <input class="form-control" id="inputEmail" type="text" name="nome" placeholder="name@example.com" />
        <label for="inputEmail">Nome</label>
    </div>
    <div class="form-floating mb-3">
        <input class="form-control" id="inputPassword" type="password" name="senha" placeholder="Password" />
        <label for="inputPassword">Password</label>
    </div>
    <div class="form-check mb-3">
        <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
        <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
    </div>
    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
        <a class="small" href="password.html">Forgot Password?</a>
        <button type="submit" name="login" class="btn btn-primary">Login</button>
    </div>
</form>';
}else{
	echo '<h2>Montra de Viaturas</h2>';
    $n_bmw = count($_SESSION["bmw"]);
    $n_citroen = count($_SESSION["citroen"]);
    $n_volvo = count($_SESSION["volvo"]);
    $n_total = $n_bmw + $n_citroen + $n_volvo;
    echo '<h3>Total de viaturas =' .$n_total.'</h3>';
    echo '<h4>Total BMW =' .$n_bmw.'</h4>';
    echo '<h4>Total Citroen =' .$n_citroen.'</h4>';
    echo '<h4>Total Volvo =' .$n_volvo.'</h4>';

    echo '<br><br>';
    echo '<h3>Montra de Carros:</h3>';
    echo '<h4>Bmw</h4>';
    foreach ($_SESSION['bmw'] as $carro) {
        echo $carro. '<br>';
    }
    echo '<h4>Citroen</h4>';
    foreach ($_SESSION['citroen'] as $carro) {
        echo $carro. '<br>';
    }
    echo '<h4>Volvo</h4>';
    foreach ($_SESSION['volvo'] as $carro) {
        echo $carro. '<br>';
    }
}
?>

<?php 
	if(isset($_POST['login'])){
		login_test($_POST["nome"], $_POST["senha"]);
	}
?>

<!--
Na pagina conteudo1.php:
    Mostra o total de viaturas disponiveis (soma bmw, volvo, citroen).
    Mostra o total de viaturas de cada marca
    Lista na vertical os carros de cada marca-->

