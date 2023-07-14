<!DOCTYPE html>
<html lang="es">
<?php
    // Llamamos al archivo de conexión
    require_once('../model/connect.php');
    // Clase hija que permitirá visualizar las categorías
    class Products extends Database{
        // Función que recibe la conexión, el dato de la URL y obtiene los datos de las categorías
        public function viewProducts($connect,$id){
            // Preparamos la consulta SQL
            $connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $query=$connect->prepare("SELECT * FROM products INNER JOIN categories ON products.idCategory = categories.id WHERE code= :id");
            // Convertimos los datos del formulario en parámetros para la consulta
            $query->bindParam(":id",$id);
            // Ejecutamos la consulta y guardamos la respuesta en una variable
            $query->execute();
            $exists=$query->fetch(PDO::FETCH_ASSOC);
            // Retornamos el array asociativo con los datos que cumplen la condición
            return $exists;
        }
    }
    // Recibimos los datos del producto
    $id=$_REQUEST['id'];
    // Creamos el objeto para obtener las categorias
    $products=new Products;
    // En primer lugar debemos realizar la conexión a la base de datos y la guardamos en una variable
    $connect=$products->connect();
    // Luego enviamos la conexión a la función de ver categorías y guardamos la respuesta en una variable
    $exists=$products->viewProducts($connect,$id);
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
    <link rel="stylesheet" href="styles/update-product.css">
    <title>MODIFICAR PRODUCTO</title>
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
        <h2 class="header__title">MODIFICAR PRODUCTO</h2>
    </header>
    <main>
        <form class="update-form" action="../controller/update-product.php" method="post">
            <input type="hidden" name="code" value="<?php echo $exists['code']; ?>">
            <div class="update-form__input"><?php echo "Código: ".$exists['code']; ?></div>
            <div class="update-form__input"><?php echo "Nombre: ".$exists['name']; ?></div>
            <div class="update-form__input"><?php echo "Marca: ".$exists['brand']; ?></div>
            <div class="update-form__input"><?php echo "Categoría: ".$exists['category']; ?></div>
            <div class="update-form__editable">
                <label  class="update-form__input label">Precio: S/</label>
                <input class="update-form__input" type="text" name="price" value="<?php echo number_format($exists['price'],2,'.','');?>" required>
            </div>
            <div class="update-form__editable">
                <label  class="update-form__input label">Stock</label>
                <input class="update-form__input" type="number" name="stock" value="<?php echo $exists['stock']; ?>" required>
            </div>
            <textarea class="update-form__input textarea" name="description" rows="5" required><?php echo $exists['description']; ?></textarea>
            <input class="update-form__button" type="submit" value="MODIFICAR PRODUCTO">
        </form>
    </main>
</body>
</html>