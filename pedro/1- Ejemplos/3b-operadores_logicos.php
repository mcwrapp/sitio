<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<?php
$var1 = 2;
$var2 = 3;

echo ($var1);
echo "<br>";
echo ($var2);
echo "<br>";


$var1 += $var2;
// 2 = 2+3;
echo ($var1);
echo "<br>";
echo "<br>";

?>

<?php

$numero = 10;
echo (++$numero);

echo('<br>');

$numero = 10;
echo ($numero++);
echo('<br>');
echo ($numero);

?>
</body>
</html>
