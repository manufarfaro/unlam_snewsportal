<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>TP</title>
    <link type="text/css" rel="Stylesheet" charset="utf-8" href="./css/Styles.css" />
    <script type="text/javascript" charset="utf-8" src="./includes/javascript/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="./scripts/standart.js"></script>
</head>
<body>
    <div id="body_structure" class="main_structure">
    
        <!-- Inicio - Cabeza de Documento -->
        <div id="body_structure_head" class="main_structure">
            <?php include_once ("includes/view/indexHeaderView.php"); ?>
        </div>
        <!-- Fin - Cabeza de Documento -->
        
        <!-- Inicio - Menu de Documento -->
        <div id="body_structure_menu" class="main_structure">
            <?php include_once ("includes/view/indexMenuView.php"); ?>
        </div>
        <!-- Fin - Menu de Documento -->
        
        <!-- Inicio - Cuerpo de Documento -->
        <div id="body_structure_main" class="main_structure">
			<?php include_once ("includes/view/indexMainContentView.php"); ?>
        </div>
        <!-- Fin - Cuerpo de Documento -->
        
        <!-- Inicio - Pie de Documento -->
        <div id="body_structure_footer" class="main_structure">
            <?php include_once ("includes/view/indexFooterView.php");?>
        </div>
        <!-- Fin - Pie de Documento -->
        
    </div>
</body>
</html>