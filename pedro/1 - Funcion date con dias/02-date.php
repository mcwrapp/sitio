<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $day = date('l');
        if ($day=="Monday"){ 
             $dia="Lunes";
       } elseif ($day=="Tuesday"){ 
        $dia="Martes";
       } elseif ($day=="Wednseday"){ 
        $dia="Miercoles";
       } elseif ($day=="Thursday"){ 
        $dia="Jueves";
       } elseif ($day=="Friday"){ 
        $dia="Viernes";
       } elseif ($day=="Saturday"){ 
        $dia="Sabado";
       } else {$dia="Domingo";}
       
       
        echo 'Hoy es ' . $dia . '<br>';
    ?>
    <img src="<?php echo $day ?>.jpg" />    
</body>
</html>