<?php
    // Archivo para comprobar la sesión del usuario y enviar una respuesta al controlador
    session_start();
    // Comprobamos si existe una sesión abierta del usuario
    if(isset($_SESSION['username'])){
        $data="1";
    }else{
        $data="0";
    }
    // Para enviar la respuesta al controlador, debemos convertirla en archivo JSON
    $json=json_encode($data);
    // Enviamos la respuesta al controlador
    echo $json;
?>