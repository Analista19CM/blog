<?php 
$password = 'NuIx&=LsFP;,Zmy'; //PASSWORD SERVIDOR
// $con = mysqli_connect("127.0.0.1:3306", "blog", "$password", "blog_cm"); //CONEXION SERVIDOR
$con = mysqli_connect("127.0.0.1:3306", "root", "", "blog_cm"); //CONEXION SERVIDOR
if (mysqli_connect_errno()) {
    echo "Fallo al conectar a MySQL: (" . mysqli_connect_errno() . ") " . mysqli_connect_error();
}
					
if (!isset($_SESSION)) {
  session_start();
}

$usuario= $_POST['usuario'];
$password= $_POST['password'];

$consulta= "SELECT u.usuario, u.clave, u.n_completo, a.nombre, a.idarea ,p_noticias FROM usuarios u INNER JOIN areas a ON  a.idarea = u.area WHERE usuario='".$usuario."' and clave='".$password."'"; 
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
	$_SESSION['idarea'] = $fila['idarea'];
	$_SESSION['p_noticias'] = $fila['p_noticias'];

	header("Location: ../home.php");
}
?>