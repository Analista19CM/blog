<?php
$serverName = "//10.142.0.3\CIUDADMADERAS, 1433"; //serverName\instanceName, portNumber (por defecto es 1433)
$connectionInfo = array( "Database"=>"cobranzafire", "UID"=>"sa", "PWD"=>"05DEmAYO");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Conexión establecida.<br />";
}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>