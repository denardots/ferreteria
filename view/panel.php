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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Denardo Taco Sánchez">
    <link rel="icon" href="../resources/images/icono.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/normalize.css">
    <link rel="stylesheet" href="styles/nav-admin.css">
    <link rel="stylesheet" href="styles/panel.css">
    <title>PANEL DEL ADMINISTRADOR</title>
</head>
<body>
    <nav>
        <div class="logo">
            <figure>
                <a href="panel.php">
                    <img class="logo__img" src="../resources/images/logo.webp" alt="logo">
                </a>
            </figure>
            <h1><a class="logo__title" href="panel.php">EL PERNO DORADO</a></h1>
        </div>
        <ul>
            <li class="list">
                <a class="list__link" href="panel.php">Panel del Administrador</a>
            </li>
            <li class="list">
                <a class="list__link" href="product-list.php">Lista de Productos</a>
            </li>
            <li class="list">
                <a class="list__link" href="new-product.php">Nuevo Producto</a>
            </li>
            <li class="list">
                <a class="list__link" href="sales-history.html">Historial de Ventas</a>
            </li>
            <li class="list">
                <a class="list__link close" href="../controller/close.php">Cerrar Sesión</a>
            </li>
        </ul>
    </nav>
    <header class="header">
        <h2 class="header__title">PANEL DEL ADMINISTRADOR</h2>
    </header>
    <main>
        <article class="option">
            <h2 class="option__title">LISTA DE PRODUCTOS</h2>
            <a class="option__button" href="product-list.php">VER LISTA DE PRODUCTOS</a>
        </article>
        <article class="option">
            <h2 class="option__title">NUEVO PRODUCTO</h2>
            <a class="option__button" href="new-product.php">AGREGAR NUEVO PRODUCTO</a>
        </article>
        <article class="option">
            <h2 class="option__title">HISTORIAL DE VENTAS</h2>
            <a class="option__button" href="sales-history.html">VER HISTORIAL DE VENTAS</a>
        </article>
    </main>
</body>
</html>