<?php

$viaturas = array('Carro1','Carro2','Carro3');
var_dump($viaturas);

echo 'Este stand tem'. count($viaturas);

echo 'Nova Viatura:<br>';
array_push($viaturas, 'Carro4');

echo '<br> Agora tem '. count($viaturas) . 'Viaturas <br>';
echo $viaturas[2].'<br>';

foreach ($viaturas as $viatura) {
    echo $viatura. '<br>';
}
?>
