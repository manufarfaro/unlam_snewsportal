<?php
	
	chdir(dirname(__FILE__));
	
	include_once ('../../classes/service/NoticeService.class.php');
	include_once ('../../classes/service/UserService.class.php');
	
	$noticeService = new NoticeService();
	
	
	
	$currentUser = unserialize($_SESSION['UserLogged']);
	
	
	if($currentUser->getRole()==3){
		$colNotice = $noticeService->getAllByAuthorId($currentUser->getId());
	}
	else{
		$colNotice = $noticeService->getAll();
	}
	
?>

<div class="headLine">
	Listado de Noticias
</div>
<div class="newsContainer">
	<div class="tableLayout">
		<table id="gradient-style" summary="Meeting Results">
			<thead>
				<tr>
					<th scope="col">Autor</th>
					<th scope="col">Titulo</th>
					<th scope="col">Texto</th>
					<th scope="col">Fecha</th>
					<th scope="col">Acci&oacute;n</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($colNotice as $key => $value): ?>
					<tr>
						<td><?php echo($colNotice[$key]->getAuthor()->getName()); ?></td>
						<td><?php echo($colNotice[$key]->getTitle()); ?></td>
						<td><?php echo($colNotice[$key]->getText()); ?></td>
						<td><?php echo($colNotice[$key]->getCreatedDate()); ?></td>
						<td><a href="./classes/action/deleteNotice.php?notice_id=<?php echo($colNotice[$key]->getId()); ?>">Eliminar</a></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>