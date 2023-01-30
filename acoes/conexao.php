<?php
    $hostname = "localhost";
    $usuario = "root";
    $senha = "";
    $bancodedados = "bea";

    $mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
    if ($mysqli->connect_errno){
        echo "erro";
    }
    else {
        echo "Connected Successfully";
    }
?>