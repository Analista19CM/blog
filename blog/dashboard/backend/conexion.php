<?php

//Editar archivo config.php con los valores de su servidor
$servidor="mysql:dbname=blog_cm;host=127.0.0.1:3306";
try{
    $pdo= new PDO($servidor,"root","",
        array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8")
        
    );
}catch(PDOException $e){
}
?>