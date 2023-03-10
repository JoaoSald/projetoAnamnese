<?php
    $hostname = "localhost";
    $bancodedados = "login_ficha";
    $usuario = "root";
    $senha = "";

    $mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados, 3312);
   // if($mysqli -> connect_errno){
   //     echo "falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_errno;
   // }
   // else
   //     echo "conectado ao banco";
?>

