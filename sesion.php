<?php
	if(isset($_POST['enviar'])){
		$login = $_POST['matricula'];
		$password = $_POST['password'];
		
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>	
	<link rel="stylesheet" type="text/css" href="bootstrap-4.5.3-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="estilos/stylesLogin.css">
	<link rel="stylesheet" href="https://unpkg.com/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
</head>

<body>
	<nav class="navbar is-warning" role="navigation" aria-label="main navigation">
			<div class="navbar-brand">
				<a class="navbar-item" href="">
					<img alt="" src="" style="max-height: 80px" />
				</a>
				<button class="navbar-burger is-warning button" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
					<span aria-hidden="true"></span>
					<span aria-hidden="true"></span>
					<span aria-hidden="true"></span>
				</button>
			</div>
			<div class="navbar-menu">
				<div class="navbar-start">
					<a class="navbar-item" href="index.php">Medicamentos</a>
					<a class="navbar-item" href="tienda.php">Tienda</a>
				
				</div>
				<div class="navbar-end">
					<div class="navbar-item">
						
					</div>
				</div>
			</div>
		</nav>

	<form action="" method="POST">
		
		<div class="container-fluid" id="contenedor">
			<h1 id="titulo">Iniciar sesión</h1>
				
			<div class="form-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
						</svg>
					</span>
					<input class="form-control" type="text" placeholder="Ingrese su correo" name="matricula">
				</div>
			</div>

			<div class="form-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-key-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					  		<path fill-rule="evenodd" d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
						</svg>
					</span>
					<input class="form-control" type="password" placeholder="Ingrese su contraseña" name="password">
				</div>
				<a href="registro.php">Crear cuenta </a><br>
				<a href="index.php">Inicio </a>	
			</div>

			<div class="form-group">
				<div class="input-group">
					<input id="enviar" class="btn btn-primary" type="submit" value="Ingresar" name="enviar">
				</div>
			</div>
			
		</div>
	</form>
	<?php
		include("login.php");
		
	?>

	<script type="text/javascript" src="../js/jquery-3.5.1.js"></script>
	<script type="text/javascript" src="../bootstrap-4.5.3-dist/js/bootstrap.js"></script>
</body>
</html>