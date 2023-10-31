<?php
    include "class_lib.php";

    $porcentaje = $_POST['porcentaje'];

    if($porcentaje>80){
        echo "Las ventas estan al ".$porcentaje."%";
        echo "<BR>";
        echo '<img src="../lab4/good.PNG"';
        echo "<BR>";
        }
        elseif($porcentaje>=50&& $porcentaje<=79) {
        echo ("Las ventas estan al ".$porcentaje."%");
        echo "<BR>";
        echo ('<img src="../lab4/mid.PNG"');
        echo "<BR>";
        }
        else
        {
            echo ("Las ventas estan al ".$porcentaje."%");
            echo "<BR>";
            echo ('<img src="../lab4/bad.PNG"');
            echo "<BR>";
        }
?>

