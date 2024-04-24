<!--Criar um formulario com:
    3 campos(BMW, VOLVO, CITROEN) - Para cada campo o user indica num input typr number uma quantidade de 1 a 9 (min,max);

    Ao submeter o form, carrega o numero de viaturas criadas para o array de cada marca (bmw, bmw, bmw) ...

    O array é declarado como variavel de sessao

Na pagina conteudo1.php:
    Mostra o total de viaturas disponiveis (soma bmw, volvo, citroen).
    Mostra o total de viaturas de cada marca
    Lista na vertical os carros de cada marca-->
<h3>Input Qty Carros</h3>
<form method="post">
    <label>BMW (1-9):</label>
    <input type="number" name="bmw" min="1" max="9" required><br><br>
    <label>CITROEN(1-9):</label>
    <input type="number" name="citroen" min="1" max="9" required><br><br>
    <label>VOLVO(1-9):</label>
    <input type="number" name="volvo" min="1" max="9" required><br><br>
    <button type="submit" name="carregar">Carregar</button>
</form>

<?php
    if (isset($_POST['carregar'])) {
        $_SESSION['bmw'] = array();
        $_SESSION['citroen'] = array();
        $_SESSION['volvo'] = array();

        for ($i=1; $i <= $_POST['bmw'] ; $i++) {
            $nome = 'BMW'.$i;
            array_push($_SESSION['bmw'], $nome);
        }
        for ($i=1; $i <= $_POST['citroen'] ; $i++) {
            $nome = 'Citroen'.$i;
            array_push($_SESSION['citroen'], $nome);
        }
        for ($i=1; $i <= $_POST['volvo'] ; $i++) {
            $nome = 'Volvo'.$i;
            array_push($_SESSION['volvo'], $nome);
        }
        echo 'Viaturas Carregadas!';
    }
?>




