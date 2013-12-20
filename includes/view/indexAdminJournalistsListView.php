<?php
	
	chdir(dirname(__FILE__));
	
	include_once ('../../classes/service/UserService.class.php');
	
	$userService = new UserService();
	$colUser = $userService->getByRole(3);
?>

<div class="headLine">
	Listado de Periodistas
</div>
<div class="newsContainer">
	<div class="tableLayout">
		<table id="gradient-style" summary="Meeting Results">
			<thead>
				<tr>
					<th scope="col">Nombre</th>
					<th scope="col">Apellido</th>
					<th scope="col">Email</th>
					<th scope="col">Acci&oacute;n</th>
				</tr>
			</thead>
			<tbody>
				<?php if(count($colUser)>0): 
				foreach ($colUser as $key => $value): ?>
					<tr>
						<td><?php echo($colUser[$key]->getName()); ?></td>
						<td><?php echo($colUser[$key]->getSurname()); ?></td>
						<td><?php echo($colUser[$key]->getMail()); ?></td>
						<td><a href="./classes/action/deleteUser.php?user_id=<?php echo($colUser[$key]->getId()); ?>">Eliminar</a></td>
					</tr>
				<?php endforeach; 
				endif; ?>
			</tbody>
		</table>
	</div>
</div>