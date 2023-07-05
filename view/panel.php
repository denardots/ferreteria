<!DOCTYPE html>
<html lang="es">
<?php
    // Comprobamos si el usuario se logueo previamente
    session_start();
    if(!isset($_SESSION['username'])){
        header("location:../view/login.php");
    }
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Denardo Taco Sánchez">
    <link rel="icon" href="../resources/images/icono.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/normalize.css">
    <title>PANEL DEL ADMINISTRADOR</title>
</head>
<body>
    <h1>BIENVENIDO ADMINISTRADOR</h1>
    <a href="../controller/close.php">Cerrar Sesión</a>
</body>
</html>