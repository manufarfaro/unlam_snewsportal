
<?php
if (isset($_SESSION['UserLogged'])) {
	$user = unserialize($_SESSION['UserLogged']);
	
	switch($user->getRole())
	{
		
		case '3':
			echo("<ul id=\"menu_navigation\">
			<li class=\"menu_nav_pli\">
				Men&uacute; Administaci&oacute;n
				<ul>
					<li><a href=\"./indexAdmin.php?action=addNotice\" >Nueva Noticia</a></li>
					<li><a href=\"./index.php\" >Volver</a></li>
					<li><a href=\"./classes/action/LogoffUser.php\" >Salir</a></li>
				</ul>
			</li>
	
			</ul>");
			break;
		
		case '1':	
		case '2':
			echo("<ul id=\"menu_navigation\">
			<li class=\"menu_nav_pli\">
				Men&uacute; Administaci&oacute;n
				<ul>
					<li><a href=\"./indexAdmin.php?action=addNotice\" >Nueva Noticia</a></li>
					<li><a href=\"./indexAdmin.php?action=viewNoticesList\" >Listar Noticias</a></li>
					<li><a href=\"./indexAdmin.php?action=addJournalist\" >Nuevo Periodista</a></li>
					<li><a href=\"./indexAdmin.php?action=viewJournalistsList\" >Listar Periodistas</a></li>
					<li><a href=\"./index.php\" >Volver</a></li>
					<li><a href=\"./classes/action/LogoffUser.php\" >Salir</a></li>
				</ul>
			</li>
			</ul>");
		break;	
		default:
			echo("<ul id=\"menu_navigation\">
			<li class=\"menu_nav_pli\">
				Men&uacute; Principal
				<ul>
					<li><a href=\"./index.php\" >Volver</a></li>
				</ul>
			</li>
	
			</ul>");
		break;
				
		
	}
}
else {
	echo("<ul id=\"menu_navigation\">
			<li class=\"menu_nav_pli\">
				Men&uacute; Principal
				<ul>
					<li><a href=\"./index.php\" >Volver</a></li>
					
				</ul>
			</li>
	
			</ul>");
}


?>

	
