<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="ferretería,arequipa">
    <meta name="description" content="Página web de la Ferretería El Perno Dorado">
    <meta name="author" content="Denardo Taco Sánchez">
    <meta name="robots" content="index">
    <link rel="icon" href="resources/images/icono.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="view/styles/normalize.css">
    <link rel="stylesheet" href="view/styles/nav-footer.css">
    <link rel="stylesheet" href="view/styles/index.css">
    <title>EL PERNO DORADO</title>
    <script src="https://kit.fontawesome.com/dd474d89cd.js" crossorigin="anonymous"></script>
</head>
<body>
<nav class="nav">
        <div class="nav__logo">
            <figure>
                <a href="index.php">
                    <img class="nav__logo__img" src="resources/images/logo.webp" alt="logo">
                </a>
            </figure>
            <h1><a class="nav__logo__title" href="index.php">EL PERNO DORADO</a></h1>
        </div>
        <ul>
            <li class="nav__list">
                <a class="nav__list__link" href="index.php">Inicio</a>
            </li>
            <li class="nav__list">
                <a class="nav__list__link" href="view/categories.php">Categorías</a>
            </li>
            <li class="nav__list">
                <a class="nav__list__link" href="view/products.php">Productos</a>
            </li>
            <li class="nav__list">
                <a class="nav__list__link" href="view/about.html">Nosotros</a>
            </li>
            <li class="nav__list">
                <a class="nav__list__link" href="view/contact.html">Contacto</a>
            </li>
            <li class="nav__list">
                <a class="nav__list__link" href="view/login.php">Admin</a>
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
        <a class="shopping-cart__icon" href="view/shopping-cart.html">
            <i class="fa-solid fa-cart-shopping fa-2xl"></i>
        </a>
    </div>
    <header>
        <div class="slogan">
            <figure>
                <img class="slogan__user" src="resources/images/user.webp" alt="usuario">
            </figure>
            <div class="slogan__phrase">
                <h2 class="slogan__phrase__title">Las mejores marcas</h2>
                <h2 class="slogan__phrase__subtitle">Los mejores precios</h2>
                <h3 class="slogan__phrase__idea">Cuidamos Vida pero también tu Economía</h3>
                <a class="slogan__phrase__link" href="view/contact.html">CONTÁCTANOS</a>
                <a class="slogan__phrase__link" href="view/products.php">VER PRODUCTOS</a>
            </div>
        </div>
    </header>
    <main>
        <section class="benefits">
            <h2 class="benefits__title">BENEFICIOS PARA NUESTROS USUARIOS</h2>
            <div class="benefits__container">
                <figure class="benefits__container__item">
                    <img class="benefits__container__item__img" src="resources/images/attention.webp" alt="atención">
                    <figcaption class="benefits__items__name">Atención por WhatsApp</figcaption>
                </figure>
                <figure class="benefits__container__item">
                    <img class="benefits__container__item__img" src="resources/images/delivery.webp" alt="delivery">
                    <figcaption class="benefits__items__name">Delivery en minutos</figcaption>
                </figure>
                <figure class="benefits__container__item">
                    <img class="benefits__container__item__img" src="resources/images/pay.webp" alt="pago">
                    <figcaption class="benefits__items__name">Pagos Virtuales</figcaption>
                </figure>
                <figure class="benefits__container__item">
                    <img class="benefits__container__item__img" src="resources/images/transport.png" alt="transporte">
                    <figcaption class="benefits__items__name">Transporte a Obra</figcaption>
                </figure>
            </div>
        </section>
    </main>
    <section class="section">
        <h2 class="section__title">PRODUCTOS DESTACADOS</h2>
    </section>
    <div class="container">
        <article class="product">
            <figure class="product__card">
                <a href="view/details.php">
                    <img class="product__card__img" src="resources/images/electric-extension.jpg" alt="producto">
                </a>
                <a class="product__card__button" href="view/shopping-cart.html">AGREGAR AL CARRITO</a>
            </figure>
            <a href="details.html" class="product__info">
                <h2 class="product__info__name">Extensión Eléctrica 5M</h2>
                <p class="product__info__price">S/99.99</p>
            </a>
        </article>
        <article class="product">
            <figure class="product__card">
                <a href="view/details.php">
                    <img class="product__card__img" src="resources/images/electric-extension.jpg" alt="producto">
                </a>
                <a class="product__card__button" href="view/shopping-cart.html">AGREGAR AL CARRITO</a>
            </figure>
            <a href="details.html" class="product__info">
                <h2 class="product__info__name">Extensión Eléctrica 5M</h2>
                <p class="product__info__price">S/99.99</p>
            </a>
        </article>
        <article class="product">
            <figure class="product__card">
                <a href="view/details.php">
                    <img class="product__card__img" src="resources/images/electric-extension.jpg" alt="producto">
                </a>
                <a class="product__card__button" href="view/shopping-cart.html">AGREGAR AL CARRITO</a>
            </figure>
            <a href="details.html" class="product__info">
                <h2 class="product__info__name">Extensión Eléctrica 5M</h2>
                <p class="product__info__price">S/99.99</p>
            </a>
        </article>
        <article class="product">
            <figure class="product__card">
                <a href="view/details.php">
                    <img class="product__card__img" src="resources/images/electric-extension.jpg" alt="producto">
                </a>
                <a class="product__card__button" href="view/shopping-cart.html">AGREGAR AL CARRITO</a>
            </figure>
            <a href="details.html" class="product__info">
                <h2 class="product__info__name">Extensión Eléctrica 5M</h2>
                <p class="product__info__price">S/99.99</p>
            </a>
        </article>
        <article class="product">
            <figure class="product__card">
                <a href="view/details.php">
                    <img class="product__card__img" src="resources/images/electric-extension.jpg" alt="producto">
                </a>
                <a class="product__card__button" href="view/shopping-cart.html">AGREGAR AL CARRITO</a>
            </figure>
            <a href="details.html" class="product__info">
                <h2 class="product__info__name">Extensión Eléctrica 5M</h2>
                <p class="product__info__price">S/99.99</p>
            </a>
        </article>
        <article class="product">
            <figure class="product__card">
                <a href="view/details.php">
                    <img class="product__card__img" src="resources/images/electric-extension.jpg" alt="producto">
                </a>
                <a class="product__card__button" href="view/shopping-cart.html">AGREGAR AL CARRITO</a>
            </figure>
            <a href="details.html" class="product__info">
                <h2 class="product__info__name">Extensión Eléctrica 5M</h2>
                <p class="product__info__price">S/99.99</p>
            </a>
        </article>
        <article class="product">
            <figure class="product__card">
                <a href="view/details.php">
                    <img class="product__card__img" src="resources/images/electric-extension.jpg" alt="producto">
                </a>
                <a class="product__card__button" href="view/shopping-cart.html">AGREGAR AL CARRITO</a>
            </figure>
            <a href="details.html" class="product__info">
                <h2 class="product__info__name">Extensión Eléctrica 5M</h2>
                <p class="product__info__price">S/99.99</p>
            </a>
        </article>
        <article class="product">
            <figure class="product__card">
                <a href="view/details.php">
                    <img class="product__card__img" src="resources/images/electric-extension.jpg" alt="producto">
                </a>
                <a class="product__card__button" href="view/shopping-cart.html">AGREGAR AL CARRITO</a>
            </figure>
            <a href="details.html" class="product__info">
                <h2 class="product__info__name">Extensión Eléctrica 5M</h2>
                <p class="product__info__price">S/99.99</p>
            </a>
        </article>
    </div>
    <footer class="footer">
        <figure>
            <img class="footer__logo" src="resources/images/logo.webp" alt="logo">
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