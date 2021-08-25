<?php 
    session_start();
    if(isset($_SESSION["num1"]) && isset($_SESSION["num2"]) && isset($_POST["captcha"])){ $resp = $_SESSION["num1"]+$_SESSION["num2"]; $captcha = $_POST["captcha"];
    if($resp==$captcha){ 
        include("BDRegistrar.php");
    } else { 
            echo "Captcha Incorrecto"; 
        } 
    } 
?>
