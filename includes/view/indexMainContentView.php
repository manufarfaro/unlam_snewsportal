<?php
	
	chdir(dirname(__FILE__));
	
	include_once("../../classes/service/NoticeService.class.php");
	
	$notices = new NoticeService();
	
	$colNotices = $notices->getAll();
	
?>

<div class="topBar">
	Noticias
</div>
<?php foreach ($colNotices as $key => $value): ?>

	<div class="newsContainer">
		<div class="headLine">	
			<div class="title">
				<?php echo($colNotices[$key]->getTitle()); ?>
			</div>
			<div class="data">
				por <?php echo($colNotices[$key]->getAuthor()->getName()); ?>, <?php echo($colNotices[$key]->getCreatedDate()); ?>
			</div>
		</div>
		<div class="content">
			<?php echo($colNotices[$key]->getText()); ?>
		</div>
		
		<form id="postReview" method="post" action="./classes/action/addNewComment.php">
			<div class="comment">
				<div class="barComment">	
					Comentar Publicaci&oacute;n
				</div>
				<div class="left">
					<div class="lower">
						Nombre:
					</div>
					<div class="lower">
						Comentario:
					</div>
				</div>
				<div class="right">
					<div class="lower">
						<input type="text" id="authorName" name="nameComment"/>
					</div>
					<div class="lower">
						<input type="hidden" id="noticeId" name="noticeId" value="<?php echo($colNotices[$key]->getId()); ?>" />
						<textarea id="comment" name="txtComment" ></textarea>
					</div>
				</div>
				<div class="inferior">
					<input type="submit" value="Enviar" />
				</div>
			</div>
		</form>
		
		<div class="comments">
			
			<?php if($colNotices[$key]->getComments()): ?>
				<div class="barComment2">	
					Comentarios:		
				</div>
			
				<?php foreach ($colComments = $colNotices[$key]->getComments() as $key => $value): ?>
					<div class="sectionComment">
						<div class="data">
							<?php echo($colComments[$key]->getCreatedDate()); ?> <?php echo($colComments[$key]->getAuthorName()); ?> dijo:
						</div>
						<div class="">
							<?php echo($colComments[$key]->getAuthorText()); ?>
						</div>
					</div>
				<?php endforeach; ?>
			
			<?php endif; ?>
			
		</div>
		
	</div>

<?php endforeach; ?>