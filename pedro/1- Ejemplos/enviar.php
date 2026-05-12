


// LÃ³gica de EnvÃ­o de Email
$destinatario = "tu-email@dominio.com";
$asunto = "Nueva consulta desde la web";
$cuerpo = "Has recibido un nuevo mensaje:\n\n";
$cuerpo .= "Nombre: " . $nombre . "\n";
$cuerpo .= "Email: " . $email . "\n";
$cuerpo .= "Mensaje: " . $mensaje;

$cabeceras = "From: webmaster@tuweb.com";

mail($destinatario, $asunto, $cuerpo, $cabeceras);

- - - - - - - - - - - - - - - - - - - - - - - - 

// InserciÃ³n en la Base de Datos
$consulta = "INSERT INTO consultas (nombre, email, mensaje) VALUES ('$nombre', '$email', '$mensaje')";
$resultado = mysqli_query($conexion, $consulta);


mysqli_close($conexion);



CREATE TABLE `consultas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mensaje` text NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;