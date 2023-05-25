<?php
	require('connect.php');
    $username=$_POST['user'];
    $password=$_POST['password'];
    $connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $query=$connect->prepare("SELECT * FROM login WHERE username= :username AND password= :password");
    $query->bindParam(":username",$username);
    $query->bindParam(":password",$password);
    $query->execute();
    $exists=$query->fetch(PDO::FETCH_ASSOC);
    if($exists){
        echo "1";
    }else{
        echo "0";
    }
?>