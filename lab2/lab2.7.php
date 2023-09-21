<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Laboratorio 2.7</title>
    </head>
    <body>
        <?php
        $posicion="arriba";

        switch($posicion){
            case "arriba": //Bloque 1
                echo "la variable contiene ";
                echo "el valor de arriba";
                break;
                case "abajo"; //Bloque 2
                echo "la variable contiene";
                echo "el valor de abajo";
                break;
                default: //bloque3
                echo "la variable contiene otro valor";
                echo "distinto de arriba o abajo";
        }
        ?>
    </body>
</html>