<main>
	<?php 
	@$nav = $_REQUEST['nav'];
	switch ($nav) {
		case 'login':
			include 'modules/mod_login.php';
			break;
		case 'recover':
			include 'modules/mod_recover.php';
			break;
		case 'register':
			include 'modules/mod_register.php';
			break;
		case 'account':
			echo 'User Account';
			break;
		/* OPÇÔES DE ADM */
		case 'adm':
			include 'modules/adm_cases.php';
			break;
		default:
			include 'modules/home_page_user.php';
			break;
	}


	//detecao clicks
	?>
</main>
	