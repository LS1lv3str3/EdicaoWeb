<?php 
if(@$_SESSION['utilizador'] == ''){
?>
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
    </form>;

<?php
}
if(isset($_POST['login'])){
    login_test($_POST["nome"], $_POST["senha"]);
}
?>