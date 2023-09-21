<html>
    <head>
        <title> Laboratorio 2.4</title>
    </head>
    <body>
        <?php
        //Creacion del arreglo array("clave" => "Valor")
        $personas= array("juan"=> "Panama",
        "john"=> "USA",
        "eica"=>"finlandia",
        "kusanagi"=>"Japon");

        //Recorrer todo el arreglo
        foreach($personas as $personas=>$pais){
            print "$personas es de $pais <br>";
        }
        //Impresion especifica
        echo("<br>".$personas["juan"]);
        echo("<br>".$personas["eica"]);
        ?>
    </body>
</html>