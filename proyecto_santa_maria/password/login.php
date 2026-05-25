php
<?php

include('conexion.php');

$usuario   = isset($_POST['usuario']) ? $_POST['usuario'] : '';
$contrasena = isset($_POST['contrasena']) ? $_POST['contrasena'] : '';
//$session_login = true;

ini_set('display_errors', 'off');
ini_set('display_startup_errors', 'off');
error_reporting(0);

$url = "https://www.lanacion.com.co/";
//$url = "http://127.0.0.1/password/carias/index.html";

//$consulta = mysqli_query ($link, "SELECT * FROM users WHERE usuario = '$usuario' AND contrasena = '$contrasena'");

if(isset($link) && $link) {
    $query = "SELECT * FROM users WHERE usuario ='$usuario' AND contrasena = '$contrasena'";
    $q = mysqli_query($link, $query);
    try{
        if($q && mysqli_num_rows($q) > 0)
        {
            $result = mysqli_fetch_assoc($q);
            //header("Location: https://www.lanacion.com.co/", true, 301);
            //exit();

            //echo '<script type="text/javascript">
            //window.location = "http://www.google.com/"
            //</script>';

            //echo "<script>location.href= '$url'</script>";
            echo "<script> window.location.href = $url; </script>";
            //echo "Usuario Valido Correctamente";
        }else
            echo "Usuario o Contraseña Erroneos";
    }catch(Exception $error) {}

    mysqli_close($link);
} else {
    echo "Error de conexión a la base de datos";
}
?>