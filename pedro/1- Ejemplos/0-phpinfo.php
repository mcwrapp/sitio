<?php
include_once("conector.php");
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

echo "Gracias $nombre, tu mensaje fue enviado.";
?>

<?php
$servidor = "localhost";
$usuario = "root";
$password = "";
$base_datos = "basededatos";

// Crear la conexiÃ³n
$conexion = mysqli_connect($servidor, $usuario, $password, $base_datos);

// Verificar conexiÃ³n
if (!$conexion) {
    die("Error de conexiÃ³n: " . mysqli_connect_error());
}
?>