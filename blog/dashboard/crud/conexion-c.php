<?php
//Valores del servidor, usuario, password, bd
$servername = "127.0.0.1:3306";
$username = "root";
$password = "";
$dbname = "blog_cm";
// $servername = "127.0.0.1:3306";
// $username = "blog";
// $password = "NuIx&=LsFP;,Zmy";
// $dbname = "blog_cm";

//$conexion = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conexion= new PDO("mysql:host=127.0.0.1:3306;dbname=blog_cm", "root", "");

?>