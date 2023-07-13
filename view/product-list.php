<!DOCTYPE html>
<html lang="es">
<?php
    // Llamamos al archivo de conexión
    require_once('../model/connect.php');
    // Clase hija que permitirá visualizar las categorías
    class Products extends Database{
        // Función que recibe la conexión y obtiene los datos de las categorías
        public function viewProducts($connect){
            // Preparamos la consulta SQL
            $connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $query=$connect->prepare("SELECT * FROM products INNER JOIN categories ON products.idCategory = categories.id");
            // Ejecutamos la consulta y guardamos la respuesta en una variable
            $query->execute();
            // Retornamos la variable que guarda el resultado
            return $query;
        }
    }
    // Creamos el objeto para obtener las categorias
    $products=new Products;
    // En primer lugar debemos realizar la conexión a la base de datos y la guardamos en una variable
    $connect=$products->connect();
    // Luego enviamos la conexión a la función de ver categorías y guardamos la respuesta en una variable
    $list=$products->viewProducts($connect);
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
    <link rel="stylesheet" href="styles/product-list.css">
    <title>LISTA DE PRODUCTOS</title>
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
        <h2 class="header__title">LISTA DE PRODUCTOS</h2>
    </header>
    <main>
        <table>
            <tr>
                <th>CÓDIGO</th>
                <th>NOMBRE</th>
                <th>CATEGORÍA</th>
                <th>MARCA</th>
                <th>STOCK</th>
                <th>PRECIO</th>
                <th colspan="2">ACCIONES</th>
            </tr>
    <?php
        // Convertimos la variable en array y lo recorremos en un array
        while($row=$list->fetch(PDO::FETCH_ASSOC)){
    ?>
            <tr>
                <td><?php echo $row['code'];?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['category'];?></td>
                <td><?php echo $row['brand'];?></td>
                <td><?php echo $row['stock'];?></td>
                <td><?php echo "S/".$row['price'];?></td>
                <td>
                    <a class="button" href="update-product.php?id=<?php echo $row['code'];?>">ACTUALIZAR</a>
                </td>
                <td>
                    <button class="button delete">ELIMINAR</button>
                </td>
            </tr>
    <?php
        }
        // Cerramos la conexión a la base de datos
        $products->close($connect);
    ?>
        </table>
        <button class="download">DESCARGAR LISTA</button>
    </main>
</body>
</html>