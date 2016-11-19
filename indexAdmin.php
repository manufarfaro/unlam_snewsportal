<?php

chdir(dirname(__FILE__));

require_once ("./classes/service/UserService.class.php");

session_start();

if (isset($_SESSION['UserLogged'])) { 
	$user = unserialize($_SESSION['UserLogged']);
	$userService = new UserService();

	if ($userService->getById($user->getId())) {

		if (isset($_GET['action'])) {
			$action = $_GET["action"];

			switch ($action) {
				case 'addNotice' :
					$includePath = "includes/view/indexAdminNewNoticeView.php";
					break;
				case 'viewNoticesList' :
					$includePath = "includes/view/indexAdminNoticesListView.php";
					break;
				case 'addJournalist' :
					$includePath = "includes/view/indexAdminNewJournalistView.php";
					break;
				case 'viewJournalistsList' :
					$includePath = "includes/view/indexAdminJournalistsListView.php";
					break;
				default :
				//include_once ("includes/view/indexAdminMainContentView.php");
					$includePath = "includes/view/indexErrorView.php";
					break;
			}
		}else{
			$includePath = "includes/view/indexAdminMainContentView.php";
		}
	} else {
		$includePath = "includes/view/indexLoginView.php";
	}
}else {
		$includePath = "includes/view/indexLoginView.php";
	}
?>

<!doctype html>
<html>
	<head>
		<title>sNewsPortal - Administraci&oacute;n</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link type="text/css" rel="Stylesheet" charset="utf-8" href="./css/Styles.css" />
		<script type="text/javascript" charset="utf-8" src="./includes/javascript/jquery-1.7.2.min.js"></script>
		<script type="text/javascript" charset="utf-8" src="./scripts/standart.js"></script>
	</head>
	<body>
		<div id="body_structure" class="main_structure">
			<!-- Inicio - Cabeza de Documento -->
			<div id="body_structure_head" class="main_structure">
				<?php
				include_once ("includes/view/indexHeaderView.php");
				?>
			</div>
			<!-- Fin - Cabeza de Documento -->
			<!-- Inicio - Menu de Documento -->
			<div id="body_structure_menu" class="main_structure">
				<?php
				include_once ("includes/view/indexAdminMenuView.php");
				?>
			</div>
			<!-- Fin - Menu de Documento -->
			<!-- Inicio - Cuerpo de Documento -->
			<div id="body_structure_main" class="main_structure">
				<?php
				include_once ($includePath);
				?>
			</div>
			<!-- Fin - Cuerpo de Documento -->
			<!-- Inicio - Pie de Documento -->
			<div id="body_structure_footer" class="main_structure">
				<?php
				include_once ("includes/view/indexFooterView.php");
				?>
			</div>
			<!-- Fin - Pie de Documento -->
		</div>
	</body>
</html>