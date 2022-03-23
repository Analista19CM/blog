<?php
//Valores de la BD, servidor, usuario y password
    class Conexion{
        public static function conectar(){
            try{
                $conexion= new PDO("mysql:host=127.0.0.1:3306;dbname=blog_cm", "root", "");
                $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $conexion;
                
            }
            catch(PDOException $e){
                echo "no se pudo conectar". $e->getMessage();
            }
            
            return $conexion;
        }
    }
?>