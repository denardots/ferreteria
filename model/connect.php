<?php
    // Archivo para realizar la conexión a la base de datos mediante PDO
	$connect=null;
    $server="localhost";
    $database="ferreteria";
    $username="root";
    $password="";
    $connect=new PDO("mysql:host=".$server.";dbname=".$database,$username,$password);
?>