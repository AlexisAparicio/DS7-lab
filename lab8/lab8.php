<?php
    include "class_lib.php";

    $porcentaje = $_POST['porcentaje'];
    

    $fact=new Factorial($porcentaje);

    $factorial=$fact->obtieneFactorial();

    echo"<br> El NUMERO A CALCULAR ES ".$porcentaje." y su Factorial es ". $factorial." <br> Terminado";
?>