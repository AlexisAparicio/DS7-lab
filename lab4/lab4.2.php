<?php
    $porcentaje = $_POST['porcentaje'];

    function obtieneFactorial($numero){
        $factorial = 1;
        for ($i = 1; $i <= $numero; $i++){
          $factorial = $factorial * $i;
        }
        return $factorial; 
    }

    $resultado = obtieneFactorial($porcentaje);
    echo "Factorial de $porcentaje  = $resultado";
?>
