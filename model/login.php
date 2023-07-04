<?php
    // Archivo para recibir los datos del fetch, compararlos con la base de datos y enviar una respuesta al controlador
    session_start();
    // Agregamos la conexión y los datos del fetch
	require('connect.php');
    $username=$_POST['user'];
    $password=$_POST['password'];
    // Realizamos la consulta SQL para comprobar el login
    $connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $query=$connect->prepare("SELECT * FROM login WHERE username= :username AND password= :password");
    // Convertimos los datos del fetch en parametros para la consulta SQL
    $query->bindParam(":username",$username);
    $query->bindParam(":password",$password);
    $query->execute();
    // Comprobamos si existe algún usuario con esos datos
    $exists=$query->fetch(PDO::FETCH_ASSOC);
    // Si existe el usuario logueado creamos una variable de sesión con su nombre y envaimos la respuesta al controlador
    if($exists){
        $_SESSION['username']=$username;
        echo "1";
    // Si no existe un usuario con esos datos enviamos otra respuesta al controlador
    }else{
        echo "0";
    }
    $query=null;
    $connect=null;
?>