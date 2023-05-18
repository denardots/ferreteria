<?php
	include("connect.php");
	$username=$_POST['user'];
	$password=$_POST['password'];
    $login="SELECT * FROM login WHERE username='$username' AND password='$password'";
    $result=mysqli_query($connect,$login);
    // Para saber la cantidad de filas que cumplen la condición utilizamos: num-rows
    if($result->num_rows>0){
        // Para enviar una respuesta al controlador JavaScript debemos imrpmirla con un echo
        echo "1";
    }else{
        echo "0";
    }
?>