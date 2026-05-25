
<?php

//conexion por procedimientos
        $link = mysqli_connect("localhost","root","","santa_maria_2026_comercio");

        if(!$link){
            die ("conexion fallida: ".mysqli_connect_error());
            echo "Acceso denegado :-(";
        }
?>        