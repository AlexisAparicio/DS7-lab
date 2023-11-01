<?php
    include "class_lib.php";

    $porcentaje = $_POST['porcentaje'];

    $res= new Calificacion($porcentaje);

    $resumen=$res->Evaluacion();

    echo "<br> La evaluación de desempeño del mes es ".$porcentaje."<br>".$resumen;

?>

