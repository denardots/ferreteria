<?php
    // Llamamos al archivo de conexión
    require_once('../model/connect.php');
    // Clase hija que permitirá eliminar los productos
    class Product extends Database{
        // Función que recibe la conexión, los datos de la URL y elimina la imagen del directorio
        public function deleteImage($connect,$id){
            // Preparamos la consulta SQL
            $connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $query=$connect->prepare("SELECT file FROM products WHERE code= :id");
            // Convertimos los datos del formulario en parámetros para la consulta
            $query->bindParam(":id",$id);
            // Ejecutamos la consulta y guardamos la respuesta en un array asociativo
            $query->execute();
            $exists=$query->fetch(PDO::FETCH_ASSOC);
            // Eliminamos la imagen del directorio
            unlink($exists['file']);
        }
        // Función que recibe la conexión, los datos de la URL y elimina el producto
        public function deleteProduct($connect,$id){
            // Preparamos la consulta SQL
            $connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $query=$connect->prepare("DELETE FROM products WHERE code= :id");
            // Convertimos los datos del formulario en parámetros para la consulta
            $query->bindParam(":id",$id);
            // Ejecutamos la consulta
            $query->execute();
        }
    }
    // Recibimos los datos del producto
    $id=$_REQUEST['id'];
    // Creamos el objeto para actualizar el producto
    $product=new Product;
    // En primer lugar debemos realizar la conexión a la base de datos y la guardamos en una variable
    $connect=$product->connect();
    // Luego enviamos la conexión a la función de eliminar imagen para quitar la imagen del directorio
    $product->deleteImage($connect,$id);
    // Luego enviamos la conexión a la función de eliminar producto para quitarlo de la base de datos
    $product->deleteProduct($connect,$id);
    // Finalmente redireccionamos a la lista de productos
    header('location:../view/product-list.php');
?>