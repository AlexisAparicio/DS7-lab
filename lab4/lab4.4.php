<?php

$valorA = $_POST['valor'];

    $arreglo = array();
    $elementos = 20;

    for ($i = 0; $i < $elementos; $i++) {
        do {
            $valor = readline("Ingrese un número par: ");
        } while ($valor % 2 != 0);

        $arreglo[] = $valor;
    }

    echo "<h2>Arreglo generado:</h2>";
    echo "<pre>";
    print_r($arreglo);
    echo "</pre>";

    ?>