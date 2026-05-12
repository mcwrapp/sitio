<html>
<head><title>Los Signos del Zodiaco</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"><style type="text/css">
<!--
body {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 12px;
	color: #333333;
	background-image: url(StarsBlue3.jpg);
}
-->
</style>
</head>

<body>
<p>&nbsp;</p>
<table width="500" border="0" align="center" cellpadding="10" cellspacing="0" bgcolor="#999999">
  <tr>
    <td><p><br>
<?php

$zodiaco = $_GET['zodiaco'];

echo ($zodiaco)."<br>";

switch($zodiaco) {

case "Aries": echo "Representa la agresividad, el deseo de afirmación viril , la violencia, el ímpetu y la fuerza brutal necesaria, a menudo, para defender el entorno en el que el hombre vive. 
A Aries le corresponde la primera casa del Zodíaco, que encarna la personalidad en el estado puro. Representa el nacimiento, que es siempre un acto violento. Quien nace con el Sol, en este signo, es valiente, intrépido, pero también informal en el trabajo, intolerante y a menudo agresivo.";
			break;
case "Tauro": echo "Tauro es posesivo, siempre a la búsqueda de seguridad y goce de las alegrías de la vida. Venus, regente del signo, empuja a buscar el placer y la satisfacción de los deseos materiales. 
Ve la posesión de los bienes como indispensable para conquistar la seguridad material, que pueda asegurarle a él y a los suyos la supervivencia, protegiéndole de todo riesgo. ";
		         break;
case "Geminis": echo "Mercurio, regente del signo Géminis, se asocia con la adolescencia: curiosidad, percepción intelectual, primeras experiencias de relaciones sociales, disponibilidad y deseo de movimiento continuo. 
Géminis afronta las dificultades y los obstáculos con rapidez y sentido del humor. ";
		         break;
case "Cancer": echo "Es un soñador, sentimental, sensible, imaginativo, inclinado a lo esquizoide, al autismo y a la sumisión pasiva y femenina, en primer lugar a la madre y después al mundo. 

Es, además, introvertido, narcisista, contemplativo y lírico. Sueña su vida o vive sus sueño. Ama lo maravilloso, lo fantástico, los cuentos de hadas.";
		         break;
case "Leo": echo "El mayor riesgo que corren los individuos nacidos bajo el signo es la excesiva valoración de sus propias cualidades que da como resultado un individualismo exacerbado con todos los excesos que esto conlleva. ";
		         break;
case "Virgo": echo "Práctico, realista, busca la seguridad, la quietud. Vive en defensa contra el instinto a través de mecanismos de protección como la introversión, reserva, pudor, timidez, sobriedad, sentimiento de inferioridad, desapego.";
		         break;
case "Libra": echo "La naturaleza de este Signo está basada en el equilibrio de dos temperamentos opuestos: Uno influenciado por Saturno: delicado, refinado, evadiéndose de la materia o depurándola. 
Otro influenciado por Venus: volátil, destinado a realizarse a través de los intercambios, realizados con el medio ambiente. ";
		         break;
case "Escorpio": echo "Dos grandes instintos se enfrentan en una ambivalencia intensificadora: la agresividad y el erotismo. 

El instinto sexual se prolonga bajo el aspecto creador: don de producir, de fecundar, de realizar en un arranque irresistible; el poder del ser procede del sexo y a través de este poder sexual, encuentra Escorpio su razón de ser. ";
		         break;
case "Sagitario": echo "Los nacidos bajo este signo poseen una doble y mutable naturaleza. El Sagitario está dominado por el deseo de cambio para conquistar situaciones siempre distintas y vivirlas con alegría. 
Las disposiciones extremas de este signo doble son muy acentuadas:

Si el tema es armónico en su carta natal, el sujeto tiende hacia un conformismo confortable. Asimila las buenas maneras, se acomoda a las costumbres establecidas, es partidario de la legalidad, del orden y las convenciones sociales. ";
		         break;
case "Capricornio": echo "Corresponde a la décima casa del Zodiaco, la de la autonomía y del éxito social. El Capricornio puede llegar a sacrificar mucho de sí mismo (y de los demás) con tal de satisfacer su propia ambición. 

Para Capricornio, el pasado no puede estar presente, ya que le obstaculizaría su caminar inexorable, que debe conducirle a su meta, incluso si ésta está llena de soledad. 
";
			   break;
case "Acuario": echo "Acuario sueña un mundo colectivo donde sus mil ideales puedan realizarse. Su personalidad es extremadamente abierta a toda nueva opción, sobre todo si ésta no merma su sed de libertad. 
La ductilidad, la curiosidad por todo aquello que no es tradicional, la disposición tanto material como intelectual son de hecho las claves de la personalidad de este signo. 
";
			   break;
case "Piscis": echo "El peligro de una naturaleza tan compleja es caer en el caos psicológico y en las irregularidades típicamente de Neptuno (sobre todo si Neptuno se muestra muy conflictivo en la carta natal). 
En este caso se dan individuos que intentan construir su propia personalidad, porque no son capaces de integrarse completamente en el mundo que los rodea, manteniéndose durante toda su vida algo infantiles, susceptibles, incoherentes, soñadores, muy dados al lamento y a ser víctimas, con el miedo a asumir sus propias responsabilidades. ";
				break;
default: echo "No se ha seleccionado ningun signo. Por favor vuelva a intentarlo";
}
?>
      <br>
      <br>
    </p>
    </td>
  </tr>
</table>
</body>
</html>