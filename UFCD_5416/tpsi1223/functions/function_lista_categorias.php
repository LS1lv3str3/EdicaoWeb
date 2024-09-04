<?php 

function function_lista_categorias(){
	include 'connections/config.php';
	$q = mysqli_query($conn,"SELECT cat_id, cat_nome FROM categorias");
	while($a = mysqli_fetch_array($q)){
	
		if(@$_SESSION["log_role"] == 1){
			echo '<tr><td>'.$a["cat_nome"].'</td>';
			echo '<td>
			<form method="post">
				<input type="hidden" name="cat_id" value="'.$a["cat_id"].'">
				<button type="submit" name="delete_categoria"><i class="fa-solid fa-trash" style="color:red;"></i></button>
				<a href="?nav=adm&opt=categorias&edit='.$a["cat_id"].'"><i class="fa-solid fa-pen-to-square"></i></a>
			</form>
			</td></tr>';
		}else{
			echo '<li><a href="#">'.$a["cat_nome"].'</a></li>';
		}
		
	}
}

?>