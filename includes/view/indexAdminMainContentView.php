<?php
	
	$user = unserialize($_SESSION['UserLogged']);
?>
<div class="topBar">
	Administraci&oacute;n
</div>
<div>
	Bienvenido :
	<?php echo($user->getSurname() . ", " . $user->getName()); ?>
</div>