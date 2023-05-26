<?php
    // Archivo para cerrar la sesión del usuario y redirigirlo al login
    session_start();
    session_destroy();
    header("location:../view/login.html");
?>