<?php
    header('Content-Type: text/html; charset=utf-8');
?>
<!doctype html>
<html>
<head>
    <title>SNewsPortal</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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