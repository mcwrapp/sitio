<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Pasar variables de un archivo a otro</title>
</head>
<body>
<?php
// echo($nombre); 
?> 
<form action="recibe2.php" method="GET">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" required>
    <br>
    <label for="foto">Apellido</label>
    <input type="text" name="apellido" required>
    <br>
    <label for="foto">Elija su foto (1, 2 o 3)</label>
    <input type="number" name="foto" max="3" min="1">
    <br>
    <button type="submit">Enviar</button>
</form>
</body>
</html>