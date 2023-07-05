<?php
    // Archivo para realizar la conexión a la base de datos mediante PDO y POO
	$connect=null;
    // Clase para realizar la conexión
    class Database{
        private $server="localhost";
        private $database="ferreteria";
        private $username="root";
        private $password="";
        // Función que nos permitirá conectarnos a la base de datos
        public function connect(){
            $connect=new PDO("mysql:host=".$this->server.";dbname=".$this->database,$this->username,$this->password);
            // Retornamos la varaible que guarda la conexión
            return $connect;
        }
        // Función que recibe la variable de conexión y cierra la conexión a la base de datos
        public function close($connect){
            $connect=null;
        }
    }
?>