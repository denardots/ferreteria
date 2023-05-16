<?php
	include("connect.php");
	$user=$_POST['user'];
	$password=$_POST['password'];
    $income=FALSE;
    $login="SELECT * FROM `login`";
    $result=mysqli_query($connect,$login);
    while($row=$result->fetch_array()){
        $username=$row['user'];
        $clue=$row['password'];
        if($user==$username && $password==$clue){
            $income=TRUE;
            break;
        }
    }
    if($income){
        header('location:../view/panel.html');
    }else{
        header('location:../view/.html');
    }
?>