<?php
//Valores del servidor, usuario, password, bd
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blog_cm";

$conexion = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

?>