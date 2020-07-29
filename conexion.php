<?php

$mysqli = new mysqli("localhost","root","","BBDD");
    
    if($mysqli->connect_errno) {
        die("Fallo en la conexion");
    } else {
        echo "Conexion realizada con éxito<br>";
    }

?>