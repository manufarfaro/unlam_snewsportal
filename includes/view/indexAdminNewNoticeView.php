<?php
	
	chdir(dirname(__FILE__));
	
	try{
		
		include_once ('../../classes/service/UserService.class.php');
	
		$currentUser = unserialize($_SESSION['UserLogged']);
		if($currentUser->getRole() == 3){
			$colUser = array($currentUser);
		}else{
			$userService = new UserService();
			$colUser = $userService->getAll();
		}
		
	}catch(exception $error){
		/* Do Nothing */
		header("location: ../../indexAdmin.php");
	}
	
	
	
?>
<div class="headLine">
Nueva Noticia	
</div>

<div class="newsContainer">
	<form method="post" action="./classes/action/addNewNotice.php">
	<div class="line">
		<div class="intLeft">
			Autor
		</div>	
		<div class="intRight">
			<select id"idAuthor" name="ddlAuthorNotice" >
				<?php foreach ($colUser as $key => $value): ?>
					<option value="<?php echo($colUser[$key]->getId()); ?>">
						<?php echo($colUser[$key]->getId()); ?> - <?php echo($colUser[$key]->getName()); ?>
					</option>
   				<?php endforeach; ?>		
			</select>
		</div>
	</div>
	<div class="line">
		<div class="intLeft">
			Titulo
		</div>	
		<div class="intRight">
			<input type="text" name="txtTitleNotice" />
		</div>	
	</div>
	<div class="line" id="line2">	
		<div class="intLeft">
			Texto
		</div>	
		<div class="intRight">
			<textarea id="contentNotice" name="txtTextNotice"></textarea>
		</div>	
	</div>
	<div id="inf" class="line">

			<input type="reset" value="Cancelar" />
		
			<input type="submit" value="Aceptar" />

	</div>
</form>
</div>