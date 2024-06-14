<header class="d-flex flex-row">
	<div class="flex-column col-lg-6">
		Logotipo
	</div>
	<div class="flex-column col-lg-6 flex-end top-icons">
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
			
				<?php 
				//há ou não login
				if(!$_SESSION["log_id"]){
					echo '<li><a href="?nav=login"><i class="fa-regular fa-user"></i></a></li>';
				}else{
					echo '<li><a href="?nav=account"><i class="fa-solid fa-user"></i></a></li>';
					echo '<li><a href="sair.php">Sair</a></li>';
				}
				?>
			
		</ul>
	</div>
</header>
	