<!DOCTYPE html>
<html lang="es">
<?php
// Llamamos al archivo de conexión
require_once('../model/connect.php');
// Clase hija que permitirá visualizar las categorías
class Category extends Database{
    // Función que recibe la conexión y obtiene los datos de las categorías
    public function viewCategory($connect){
        // Preparamos la consulta SQL
        $connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $query=$connect->prepare("SELECT * FROM categories");
        // Ejecutamos la consulta y guardamos la respuesta en una variable
        $query->execute();
        // Retornamos la variable que guarda el resultado
        return $query;
    }
}
// Creamos el objeto para obtener las categorias
$category=new Category;
// En primer lugar debemos realizar la conexión a la base de datos y la guardamos en una variable
$connect=$category->connect();
// Luego enviamos la conexión a la función de ver categorías y guardamos la respuesta en una variable
$list=$category->viewCategory($connect);
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
    <link rel="stylesheet" href="styles/nav-footer.css">
    <link rel="stylesheet" href="styles/categories.css">
    <title>CATEGORÍAS</title>
    <script src="https://kit.fontawesome.com/dd474d89cd.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="nav">
        <div class="nav__logo">
            <figure>
                <a href="../index.php">
                    <img class="nav__logo__img" src="../resources/images/logo.webp" alt="logo">
                </a>
            </figure>
            <h1><a class="nav__logo__title" href="../index.php">EL PERNO DORADO</a></h1>
        </div>
        <ul>
            <li class="nav__list">
                <a class="nav__list__link" href="../index.php">Inicio</a>
            </li>
            <li class="nav__list">
                <a class="nav__list__link" href="categories.php">Categorías</a>
            </li>
            <li class="nav__list">
                <a class="nav__list__link" href="products.php">Productos</a>
            </li>
            <li class="nav__list">
                <a class="nav__list__link" href="about.html">Nosotros</a>
            </li>
            <li class="nav__list">
                <a class="nav__list__link" href="contact.html">Contacto</a>
            </li>
            <li class="nav__list">
                <a class="nav__list__link" href="login.php">Admin</a>
            </li>
        </ul>
        <form action="#" method="post">
            <input class="nav__input" type="text" placeholder="Busca un Producto" required>
            <input class="nav__button" type="submit" value="BUSCAR">
        </form>
    </nav>
    <div class="shopping-cart">
        <div class="shopping-cart__number">
            <span>10</span>
        </div>
        <a class="shopping-cart__icon" href="view/shopping-cart.php">
            <i class="fa-solid fa-cart-shopping fa-2xl"></i>
        </a>
    </div>
    <header class="header">
        <h2 class="header__title">CATEGORÍAS</h2>
    </header>
    <main>
<?php
    // Convertimos la variable en array y lo recorremos en un array
    while($row=$list->fetch(PDO::FETCH_ASSOC)){
?>
        <article class="category">
            <!-- Imprimimos el nombre de la categoría -->
            <h2 class="category__title"><?php echo $row['category']; ?></h2>
            <!-- Enviamos el id a la página de productos a través de un enlace -->
            <a class="category__button" href="products.php?id=<?php echo $row['id'];?>">VER CATEGORÍA</a>
        </article>
<?php
    }
    // Cerramos la conexión a la base de datos
    $category->close($connect);
?>
    </main>
    <footer class="footer">
        <figure>
            <img class="footer__logo" src="../resources/images/logo.webp" alt="logo">
            <figcaption class="footer__name">EL PERNO DORADO</figcaption>
        </figure>
        <div class="footer__info">
            <i class="fa-sharp fa-solid fa-address-card fa-2xl"></i>
            <h3 class="footer__info__title">CONTACTANOS</h3>
            <ul class="footer__info__list">
                <li>
                    <i class="fa-brands fa-facebook"></i>
                    <a class="footer__info__list__link" href="#">Facebook</a>
                </li>
                <li>
                    <i class="fa-brands fa-square-instagram"></i>
                    <a class="footer__info__list__link" href="#">Instagram</a>
                </li>
                <li>
                    <i class="fa-solid fa-phone-volume"></i>
                    <a class="footer__info__list__link" href="#">914314466</a>
                </li>
            </ul>
        </div>
        <div class="footer__info">
            <i class="fa-regular fa-credit-card fa-2xl"></i>
            <h3 class="footer__info__title">CUENTAS BANCARIAS</h3>
            <p class="footer__info__text">BCP: 191 – 2148712-0-48</p>
            <p class="footer__info__text">BCP CCI: 003-19100214871204821</p>
            <p class="footer__info__text">Interbank: 191-3169901575</p>
            <p class="footer__info__text">Interbank CCI: 003-191-013169901575-35</p>
        </div>
    </footer>
    <h4 class="copyright">&copy;Copyright - Todos los Derechos Reservados EL PERNO DORADO 2023</h4>
</body>
</html>