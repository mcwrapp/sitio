<!doctype html>
<html lang="es">

<head>
<meta charset="utf-8">
<title>Resultados de búsqueda</title>
<link rel="stylesheet" href="css/style.css">
</head>

<body>

<section style="width: 900px; margin: 80px auto;">

<?php

$buscar = strtolower($_POST['buscar']);

echo "<h1>Resultados para: <em>$buscar</em></h1>";

$resultados = [];

/* ARTISTAS */

if (
    str_contains($buscar, 'warhol') ||
    str_contains($buscar, 'andy')
) {
    $resultados[] = [
        "titulo" => "Andy Warhol",
        "link" => "pages/artistas.html"
    ];
}

if (
    str_contains($buscar, 'lichtenstein') ||
    str_contains($buscar, 'roy')
) {
    $resultados[] = [
        "titulo" => "Roy Lichtenstein",
        "link" => "pages/artistas.html"
    ];
}

if (
    str_contains($buscar, 'richard') ||
    str_contains($buscar, 'hamilton')
) {
    $resultados[] = [
        "titulo" => "Richard Hamilton",
        "link" => "pages/artistas.html"
    ];
}
/* SECCIONES */

if (str_contains($buscar, 'historia')) {
    $resultados[] = [
        "titulo" => "Historia del Pop Art",
        "link" => "pages/historia.html"
    ];
}

if (str_contains($buscar, 'galeria')) {
    $resultados[] = [
        "titulo" => "Galería",
        "link" => "pages/galeria.html"
    ];
}

if (str_contains($buscar, 'contacto')) {
    $resultados[] = [
        "titulo" => "Contacto",
        "link" => "pages/contacto.html"
    ];
}

if (
    str_contains($buscar, 'sobre') ||
    str_contains($buscar, 'nosotros')
) {
    $resultados[] = [
        "titulo" => "Sobre Nosotros",
        "link" => "pages/sobre-nosotros.html"
    ];
}

/* RESULTADOS */

if (count($resultados) > 0) {

    echo "<p>Cantidad de resultados: ".count($resultados)."</p>";

    foreach($resultados as $resultado){

        echo "
        <article style='margin-bottom:20px; padding:20px; border:4px solid black; background:white;'>

            <h2>".$resultado['titulo']."</h2>

            <a href='".$resultado['link']."'>
                Ir a la página
            </a>

        </article>
        ";
    }

} else {

    echo "<p>No se encontraron resultados.</p>";

}

?>

</section>

</body>
</html>