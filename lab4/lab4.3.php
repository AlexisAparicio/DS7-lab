<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Laboratorio 4.3</title>
</head>
<body>
        <h1>Manejo de Arreglos P1 </h1>
        <br/>
<?php
    $arreglo = array();
    $elementos = 20;

    for ($i = 0; $i < $elementos; $i++) {
        do {
            $valor = rand(1, 100); // 
        } while (in_array($valor, $arreglo));

        $arreglo[] = $valor;
    }

    // Encontrar el elemento mayor en el arreglo
    $maxValor = max($arreglo);
    $posicionMax = array_search($maxValor, $arreglo);

    // Mostrar el arreglo
    echo "<h2>Arreglo generado:</h2>";
    echo "<pre>";
    print_r($arreglo);
    echo "</pre>";

    // Mostrar el elemento mayor y su posición
    echo "<p>El elemento mayor es $maxValor y se encuentra en la posición $posicionMax.</p>";
    ?>
        
</body>
</html>