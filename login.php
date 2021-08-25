<?PHP
    include("con_db.php");       
    if (!$conex)
        { echo "<h2>Error al establecer conexión con el servidor!!!</h2>"; exit; }
        
    if(isset($_POST['enviar'])) {  
        
        $matricula = $_POST['matricula'];
        echo $matricula ."<br/>";
        $password = $_POST['password'];
        echo $password;

        $sql = "SELECT * FROM usuarios WHERE correo='$matricula' AND pass='$password'";
        $resultado = mysqli_query($conex, $sql);
        if ($fila = mysqli_fetch_array($resultado)) {
                        
            header ("Location: productos.php");
            
        }
        else {
                        
                        
        }
        mysqli_close($conex);
    }
            
?>