<!DOCTYPE html>
<html lang="es">
<?php
    // Comprobamos si el usuario tiene una sesión abierta
    session_start();
    if(isset($_SESSION['username'])){
        header("location:../view/panel.php");
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
    <link rel="stylesheet" href="styles/login.css">
    <title>LOGIN</title>
</head>
<body>
    <form class="login-form" action="../controller/login.php" method="post" autocomplete="off">
        <h1 class="login-form__title">INICIAR SESIÓN</h1>
        <input class="login-form__input" type="text" name="user" placeholder="Ingrese su nombre de usuario" required>
        <input class="login-form__input" type="password" name="password" placeholder="Ingrese su contraseña" required>
        <input class="login-form__button submit" type="submit" value="INICIAR SESIÓN">
        <input class="login-form__button reset" id="clean" type="reset" value="LIMPIAR">
        <a class="login-form__link" href="../index.php">VOLVER AL INICIO</a>
        <!-- Párrafo que mostrará el mensaje en caso de error -->
        <p class="login-form__message" id="message"></p>
    </form>
</body>
<?php
    // Comprobamos si se ingresaron datos incorrectos, para mostrar el mensaje de error
    if(isset($_SESSION['error'])){
        echo "<script>
                const message=document.getElementById(`message`);
                const clean=document.getElementById(`clean`);
                message.innerHTML=`¡DATOS INCORRECTOS!`;
                clean.addEventListener(`click`,()=>message.innerHTML=``);
            </script>";
    }
?>
</html>