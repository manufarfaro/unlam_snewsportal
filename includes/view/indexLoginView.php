<div class="loginSection">
	<div class="headLine">
	Ingreso al Sistema de Administrac&oacute;n	
	</div>
	<form action="./classes/action/LoginUser.php" method="post" id="loginForm" onsubmit="">
		<div class="line">
			<div class="intLeft">
				Usuario
			</div>	
			<div id="c2" class="intRight">
				<input type="text" name="username"/>
			</div>	
		</div>
		<div class="line">	
			<div class="intLeft">
				Contrase&ntilde;a
			</div>	
			<div id="c2" class="intRight">
				<input type="password" name="password" />
			</div>	
		</div>
		<div id="inf" class="line">
			<input type="button" onclick="location.href='./index.php' " value="Volver" />
			<input type="submit" value="Ingresar" />	
		</div>
	</form>
</div>