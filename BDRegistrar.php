<?php

	include("con_db.php");

	if (isset($_POST['registrar'])) {
		if (strlen($_POST['nombre']) >= 1) {
			$nombre = trim($_POST['nombre']);
			$correo = trim($_POST['correo']);
			$edad = trim($_POST['edad']);
			$password = trim($_POST['contrasena']);
			$sexo = trim($_POST['sexo']);

			$consulta = "INSERT INTO usuarios(nombre, correo, edad, pass, sexo) VALUES ('$nombre', '$correo', '$edad', '$password', '$sexo')";

			$resultado = mysqli_query($conex, $consulta);

			if ($resultado) {
				?>
				<h3 class="ok">TE HAS INSCRITO <a href="sesion.php">Clic para iniciar sesion</a></h3>
				<?php
			} else {
				?>
				<h3 class="bad">HUBO UN ERROR, INTENTA DE NUEVO</h3>
				<?php
			}
		}

	} else { 
		?>
		<h3 class="bad">POR FAVOR, INGRESE TODOS LOS CAMPOS!</h3>
		<?php
	}

?>