<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Inicio</title>
	<link rel="stylesheet" href="../css/estilo_principal.css">
</head>
<body>
	<?php  
		include("../empleados/barraInicial.php");
	?>
	<div class="form-login">
		<form action="#" method="get" accept-charset="utf-8">
			<p>Formulario de acceso</p>
			<input type="text" name="nombreUsuario" placeholder="Usuario">
			<input type="password" name="contrasenia" placeholder="Contraseña">
			<div class="layout-btns">
				<a href="#" id="" class="btn-submit">Ingresar</a>
				<a href="recuperarContraAdministrador.php" id="">Recuperar usuario</a>
			<div>
		</form>
	</div>
</body>
</html>