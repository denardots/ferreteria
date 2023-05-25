<?php
	$connect=null;
    $server="localhost";
    $database="ferreteria";
    $username="root";
    $password="";
    try{
        $connect=new PDO("mysql:host=".$server.";dbname=".$database,$username,$password);
    }catch(PDOException $e){
        echo "Error de conexión";
        exit;
    }
    return $connect;
?>