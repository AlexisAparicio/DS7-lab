<?php
    $tamaño = intval($_POST['tamaño']);
    if ($tamaño% 2== 0 )
    {
            $filas = $tamaño;
            $columnas =$tamaño;
    
            for ($i = 0; $i < $filas; $i++)
                {
                    $fila = array();
                    for ($j = 0; $j < $columnas; $j++) {
                        if ($i == $j) {
                            if ($i != 0 && $i != ($filas - 1))
                            {
                                $valor = rand(101, 200);
                                $sumaDiagonal += $valor;
                            }
                            else
                            {
                                $valor = 0;
                            }
                        }
                        else
                        {
                            $valor = 0;
                        }
                        $fila[] = $valor;
                    }
                    $matriz[] = $fila;
                }
            echo "Matriz creada";
            echo "<table border='1'>";
            foreach ($matriz as $fila)
                {
                echo "<tr>";
                foreach ($fila as $valor)
                {
                    echo "<td>" . $valor . "</td>";
                }
                echo "</tr>";
                }
            echo "</table>";
            echo "<p>Suma de la diagonal: " . $sumaDiagonal . "</p>";
    }
    else{
    echo "ingresar un numero Par";
    }
    ?>