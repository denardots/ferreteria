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
    <link rel="stylesheet" href="styles/nav-admin.css">
    <link rel="stylesheet" href="styles/new-product.css">
    <title>NUEVO PRODUCTO</title>
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
            <a class="list__link" href="product-list.html">Lista de Productos</a>
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
        <h2 class="header__title">AGREGAR NUEVO PRODUCTO</h2>
    </header>
    <main>
        <form class="insert-form" action="../controller/new-product.php" method="post">
            <input class="insert-form__input" type="text" name="code" placeholder="Código" required>
            <input class="insert-form__input" type="text" name="name" placeholder="Nombre" required>
            <input class="insert-form__input" type="text" name="brand" placeholder="Marca" required>
            <select class="insert-form__input" name="category">
        <?php
            // Convertimos la variable en array y lo recorremos en un array
            while($row=$list->fetch(PDO::FETCH_ASSOC)){
        ?>
                <option value="<?php echo $row['id'];?>">
                    <?php echo $row['name']; ?>
                </option>
        <?php
            }
            // Cerramos la conexión a la base de datos
            $category->close($connect);
        ?>
            </select>
            <input class="insert-form__input" type="number" name="stock" placeholder="Stock" required>
            <input class="insert-form__input" type="number" name="price" placeholder="Precio" required>
            <textarea class="insert-form__input textarea" name="description" rows="4" placeholder="Descripción del Producto" required></textarea>
            <input class="insert-form__input" type="file" name="file" required>
            <input class="insert-form__button" type="submit" value="AGREGAR PRODUCTO">
        </form>
    </main>
</body>
</html>