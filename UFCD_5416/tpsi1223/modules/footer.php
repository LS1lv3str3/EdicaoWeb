<footer class="d-flex flex-row">
<div class="flex-column col-lg-4">

		Logotipo
</div>
	<div class="flex-column col-lg-4">
	<?php
		footer_contactos();
	?>
	<div class="flex-column col-lg-4 flex-end top-icons">

		<ul>
			<li><a href="#">
				<i class="fa-brands fa-facebook"></i>
			</a></li>
			<li><a href="#">
				<i class="fa-brands fa-instagram"></i>
			</a></li>
			<li><a href="#">
				<i class="fa-brands fa-youtube"></i>
			</a></li>	
	</ul>
</div>
 
</footer>
 


<script>
	$(document).ready(function(){//verificar se o doc esta carregado na dom

		$(".ativa").click(function(){
			var log_id = $(this).attr('id');
			$.ajax({
				type: "POST",
				url: "functions/function_status_conta.php",
				dataType: "text",
				data:{"log_id": log_id},
				success: function(response){
					//alert(response);
					location.reload();
				}
			});
		});
		$(".inativa").click(function(){
			var log_id = $(this).attr('id');
			$.ajax({
				type: "POST",
				url: "functions/function_status_conta.php",
				dataType: "text",
				data:{"log_id": log_id},
				success: function(response){
					//alert(response);
					location.reload();
				}
			});
		});
		$(".makeusr").click(function(){
			var log_id = $(this).attr('id');
			$.ajax({
				type: "POST",
				url: "functions/function_role_conta.php",
				dataType: "text",
				data:{"log_id": log_id},
				success: function(response){
					//alert(response);
					location.reload();
				}
			});
		});
		$(".editar").click(function(){
			var log_id = $(this).attr('id');
			//alert(log_id);
			$.ajax({
				type: "POST",
				url: "functions/function_editar_conta.php",
				dataType: "text",
				data:{"log_id": log_id},
				success: function(response){
					//alert(response);
					//location.reload();
					$("#formulario_edicao").html(response);
				}
			});
		});
		$("#filtro_categoria").change(function(){
			var cat_id = $("#filtro_categoria option:selected").attr('value');
			//alert(cat_id);
			$.ajax({
				type: "POST",
				url: "functions/function_mostrar_produtos.php",
				dataType: "text",
				data:{"cat_id": cat_id},
				success: function(response){
					//alert(response);
					//location.reload();
					$("#mostrar_produtos").html(response);
				}
			});
		});


	});

</script>

</body>
</html>