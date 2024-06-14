<?php 
//Mostrar login apenas qdo nao logado

if(!$_SESSION["utilizador"]){
    echo '
    <form method="post">
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
</form>
';

}else{
    //mostrar os totalizadores dos carros
    echo '<h2>Montra de Viaturas</h2>';
    $n_bmw = count($_SESSION["bmw"]);
    $n_volvo = count($_SESSION["volvo"]);
    $n_citroen = count($_SESSION["citroen"]);
    $total = $n_bmw + $n_volvo + $n_citroen;
    echo '<h3>Total de viaturas: '.$total.'</h3>';
    echo '<h4>Total BMW: '.$n_bmw.'</h4>';
    echo '<h4>Total Volvo: '.$n_volvo.'</h4>';
    echo '<h4>Total Citroen: '.$n_citroen.'</h4>';

    echo '<br>';
    echo '<h3>A Nossa Montra: </h3>';
    echo '<b>BMW:</b><br>';
    foreach($_SESSION["bmw"] as $carro){
        echo $carro.'<br>';
    }
    echo '<b>Volvo:</b><br>';
    foreach($_SESSION["volvo"] as $carro){
        echo $carro.'<br>';
    }
    echo '<b>Citroen:</b><br>';
    foreach($_SESSION["citroen"] as $carro){
        echo $carro.'<br>';
    }
}

?>

<?php 
	if(isset($_POST['login'])){
		login_test($_POST["nome"], $_POST["senha"]);
	}
?>
