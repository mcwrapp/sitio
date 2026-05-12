<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Fecha y Hora</title>
</head>

<body>
    <?php
        $hora = date("H:i:s"); //"h:i:s" es una cadena que define el formato en que será mostrada la fecha (horas:minutos:segundos) 
        echo ($hora)."<br>"."<br>";
    ?>

    <?php
        $sdate = date("d")."/".date("m")."/".date("Y");
        $stime = date("h").":".date("i");
        $fecha = date("d/m/Y H:i"); // 
        echo($fecha);
    ?>



</body>
</html>
