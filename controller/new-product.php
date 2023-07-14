<?php
    // Llamamos al archivo de conexión
    require_once('../model/connect.php');
    // Clase hija que permitirá insertar nuevos productos
    class Product extends Database{
        // Función que recibe la conexión, los datos del formulario y los inserta en la base de datos
        public function newProduct($connect,$code,$name,$brand,$category,$stock,$price,$description,$img,$temp,$file){
            // Comvertimos el dato de la imagen en la ruta a guardar en la base de datos
            $route=$file.'/'.$img;
            // Movemos la ubicación de la imagen a nuestro directorio
            move_uploaded_file($temp,$file.'/'.$img);
            // Preparamos la consulta SQL
            $connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $query=$connect->prepare("INSERT INTO products VALUES(
                '',
                :code,
                :name,
                :brand,
                :category,
                :stock,
                :price,
                :description,
                :route
            )");
            // Convertimos los datos del formulario en parámetros para la consulta
            $query->bindParam(":code",$code);
            $query->bindParam(":name",$name);
            $query->bindParam(":brand",$brand);
            $query->bindParam(":category",$category);
            $query->bindParam(":stock",$stock);
            $query->bindParam(":price",$price);
            $query->bindParam(":description",$description);
            $query->bindParam(":route",$route);
            // Ejecutamos la consulta
            $query->execute();
        }
    }
    // Recibimos los datos del formulario
    $code=$_POST['code'];
    $name=$_POST['name'];
    $brand=$_POST['brand'];
    $category=$_POST['category'];
    $stock=$_POST['stock'];
    $price=$_POST['price'];
    $description=$_POST['description'];
    // Cuando necesitemos subir imagenes, debemos pedir dos datos: el nombre de la imagen y su ruta actual
    $img=$_FILES['file']['name'];
    $temp=$_FILES['file']['tmp_name'];
    // Creamos una variable con la ruta de nuestra directorio
    $file='../resources/images';
    // Creamos el objeto para agregar los productos
    $product=new Product;
    // En primer lugar debemos realizar la conexión a la base de datos y la guardamos en una variable
    $connect=$product->connect();
    // Luego enviamos la conexión a la función de agregar producto y agregamos el producto
    $product->newProduct($connect,$code,$name,$brand,$category,$stock,$price,$description,$img,$temp,$file);
    // Finalmente redireccionamos a la lista de productos
    header('location:../view/product-list.php');
?>