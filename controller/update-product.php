<?php
    // Llamamos al archivo de conexión
    require_once('../model/connect.php');
    // Clase hija que permitirá actualizar los productos
    class Product extends Database{
        // Función que recibe la conexión, los datos del formulario y actualiza la base de datos
        public function updateProduct($connect,$code,$stock,$price,$description){
            // Preparamos la consulta SQL
            $connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $query=$connect->prepare("UPDATE products SET
                stock= :stock,
                price= :price,
                description= :description
            WHERE code= :code");
            // Convertimos los datos del formulario en parámetros para la consulta
            $query->bindParam(":code",$code);
            $query->bindParam(":stock",$stock);
            $query->bindParam(":price",$price);
            $query->bindParam(":description",$description);
            // Ejecutamos la consulta
            $query->execute();
        }
    }
    // Recibimos los datos del formulario
    $code=$_POST['code'];
    $stock=$_POST['stock'];
    $price=$_POST['price'];
    $description=$_POST['description'];
    // Creamos el objeto para actualizar el producto
    $product=new Product;
    // En primer lugar debemos realizar la conexión a la base de datos y la guardamos en una variable
    $connect=$product->connect();
    // Luego enviamos la conexión a la función de agregar producto y agregamos el producto
    $product->updateProduct($connect,$code,$stock,$price,$description);
    // Finalmente redireccionamos a la lista de productos
    header('location:../view/product-list.php');
?>