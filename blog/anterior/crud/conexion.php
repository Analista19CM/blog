<?php
//Valores de la BD, servidor, usuario y password
    class Conexion{
        public function conectar(){
            $conexion= new PDO("mysql:host=localhost;dbname=blog_cm", "root", "root");
            return $conexion;
        }
    }
?>
