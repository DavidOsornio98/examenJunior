<?php session_start(); $_SESSION["num1"] = rand(0,10); $_SESSION["num2"] = rand(0,10); ?>
<?php
if(isset($_POST['registrar'])){
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$edad = $_POST['edad'];
	$password = $_POST['contrasena'];
	$sexo = $_POST['sexo'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registro</title>	
	<link rel="preconnect" href="https://fonts.gstatic.com"></link>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet"></link>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.5.3-dist/css/bootstrap.css"></link>
	<link rel="stylesheet" type="text/css" href="estilos/stylesRegistro.css"> </link>
	<link rel="stylesheet" href="https://unpkg.com/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
</head>

<body onload="createCaptcha()">
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
	
	<form action="solve.php" method="post" id="form" >
		<div class="container-fluid" id="contenedor">
			<h1 id="titulo">Registro</h1>
			

			<div class="form-group">
				<input class="form-control" type="text" placeholder="Nombre" name="nombre" id="nombre"
				value="<?php if(isset($nombre)) echo $nombre ?>" required/>
				<p id="nombre-feedback"></p>
			</div>

			<div class="form-group">
				<input class="form-control" type="text" placeholder="Email" name="correo" id="correo"
				value="<?php if(isset($correo)) echo $correo ?>" required/>
				<p id="correo-feedback"></p>
			</div>


			<div class="form-group">
				<input class="form-control" type="text" placeholder="Edad" name="edad" id="direccion"
				value="<?php if(isset($direccion)) echo $direccion ?>" required/>
				<p id="direccion-feedback"></p>
			</div>

			<div class="form-group">
				<input class="form-control" type="password" placeholder="Contrasena" name="contrasena" id="contrasena" required/> 
				<p id="contrasena-feedback"></p>
			</div>
			

			<div class="form-check">
				<h6>Sexo</h6>
				<input class="form-check-input" type="radio" name="sexo" id="sexo1", value="Hombre">
				<label class="form-check-label" for="flexRadioDefault1">
					Hombre
				</label>
				</div>
				<div class="form-check">
				<input class="form-check-input" type="radio" name="sexo" id="sexo2", value="Mujer">
				<label class="form-check-label" for="flexRadioDefault2">
					Mujer
				</label>
			</div>
			
			
			Resuelve la operacion <?php echo $_SESSION["num1"]; ?>+ <?php echo $_SESSION["num2"];?>:
			<input type="text" name="captcha" required>
		

			<div class="form-group">
				<div class="input-group">
					<input id="btnRegistro" class="btn btn-primary" type="submit" value="Registrar" name="registrar" onsubmit="validateCaptcha()">
				</div>
				<a href="index.php"> <h5>Volver</h5> </a>
				
			</div>

		</div>
		<?php
			include("validar.php");
		?>
		
	</form>
	
	
	

	

	<script type="text/javascript" src="../js/jquery-3.5.1.js"></script>
	<script src="jquery-3.4.1.min.js"></script>
	<script src="formulario.js"></script>

	
	<script type="text/javascript" src="../bootstrap-4.5.3-dist/js/bootstrap.js"></script>
</body>

</html>