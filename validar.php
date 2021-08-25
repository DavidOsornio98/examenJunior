<?php
if(isset($_POST['registrar'])){
    if(empty($nombre)){
        echo "<p class='error'> Campo nombre vacio </p>";
    } else {
        if(strlen($nombre) < 2 ){
            echo "<p class='error'> Nombre muy corto </p>";
        }
    }

    if(empty($correo)){
        echo "<p class='error'> Campo correo vacio </p>";
    }
    
    if(empty($edad)){
        echo "<p class='error'> Campo direccion vacio </p>";
    } else {
        if($edad < 0 ){
            echo "<p class='error'> Edad erronea </p>";
        }
    }

    if(empty($password)){
        echo "<p class='error'> Campo password vacio </p>";
    } else {
        if(strlen($password) <= 8 ){
            echo "<p class='error'> Password muy corta </p>";
        }
    }
}

?>
