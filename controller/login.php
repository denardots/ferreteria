<?php
    // Archivo para recibir los datos del formulario, compararlos con la base de datos y enviar una respuesta al usuario
    // Iniciamos la sesión y llamamos al archivo de conexión
    session_start();
    require_once('../model/connect.php');
    // Clase hija que permitirá realizar el login
    class Login extends Database{
        // Función que recibe la conexión, los datos del formulario y los verifica para realizar el login
        public function enter($connect,$username,$password){
            // Preparamos la consulta SQL
            $connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $query=$connect->prepare("SELECT * FROM login WHERE username= :username AND password= :password");
            // Convertimos los datos del formulario en parámetros para la consulta
            $query->bindParam(":username",$username);
            $query->bindParam(":password",$password);
            // Ejecutamos la consulta y guardamos la respuesta en un array asociativo
            $query->execute();
            $exists=$query->fetch(PDO::FETCH_ASSOC);
            // Retornamos el array asociativo con los datos que cumplen la condición
            return $exists;
        }
    }
    // Recibimos los datos del formulario
    $username=$_POST['user'];
    $password=$_POST['password'];
    // Creamos el objeto para realizar el login
    $login=new Login;
    // En primer lugar debemos realizar la conexión a la base de datos y la guardamos en una variable
    $connect=$login->connect();
    // Luego enviamos la conexión y los datos del formulario a la función de login y guardamos la respuesta en una variable
    $exists=$login->enter($connect,$username,$password);
    // Cerramos la conexión a la base de datos
    $login->close($connect);
    // Consultamos si la variable recibió alguna respuesta del login
    if($exists){
        // Si los datos son correctos creamos la sesión del usuario y redirigimos al panel
        $_SESSION['username']=$username;
        header("location:../view/panel.php");
    }else{
        // Si los datos son incorrectos creamos la sesión de error y redirigimos al login
        $_SESSION['error']="ERROR";
        header("location:../view/login.php");
    }
?>