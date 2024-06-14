<footer>
	
<?php 

$viaturas = array('Carro1','Carro2','Carro3');

var_dump($viaturas);


echo 'Este stand tem '. count($viaturas);


echo 'Nova viatura:<br>';
array_push($viaturas, 'Carro4');

echo '<br> Agora tem '. count($viaturas) . 'Viaturas';

echo $viaturas[2];


foreach ($viaturas as $viatura) {
	echo $viatura.'<br>';
}



?>




</footer>

</body>
</html>