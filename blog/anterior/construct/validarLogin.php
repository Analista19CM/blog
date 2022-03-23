<?php 
$password = 'oG4%P6$DTc(q'; //PASSWORD SERVIDOR
$con = mysqli_connect("65.99.252.207", "sisgphco_test", "$password", "sisgphco_blog"); //CONEXION SERVIDOR
if (mysqli_connect_errno()) {
    echo "Fallo al conectar a MySQL: (" . mysqli_connect_errno() . ") " . mysqli_connect_error();
}
					
if (!isset($_SESSION)) {
  session_start();
}

$usuario= $_POST['usuario'];
$password= $_POST['password'];

$consulta= "SELECT usuario, clave, n_completo, a.nombre, idarea  FROM usuarios u INNER JOIN areas a ON a.idarea = u.area WHERE usuario='".$usuario."' and clave='".$password."'"; 
$resultado= mysqli_query($con, $consulta) or die (mysqli_error($con));


if (mysqli_num_rows($resultado) == 0)
{
	echo '<script language = javascript>
	alert("Verifique sus datos, error al inicar sesion")
	self.location = "../index.php"
	</script>';
}
else 
{
	$fila= mysqli_fetch_array($resultado, MYSQLI_ASSOC);

	$_SESSION['n_completo'] = $fila['n_completo'];

	header("Location: ../home.php");
}
?>
