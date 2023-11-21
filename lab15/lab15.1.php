<!DOCTYPE html>
<html lang="es">
<head>
    <title>Laboratorio 15.1 Data Table Jquery</title>
    <link rel="stylesheet" type="text/css" href="jquery.dataTables.min.css">
    <script type="text/javascript" src="jquery-3.1.1.js"></script>
    <script type="text/javascript" src="jquery.dataTables.min.js"></script>
</head>
<body>
    <h1>Consulta de noticias</h1>
    <?php
        require_once("../class/noticias.php");

        $obj_noticia = new noticia();
        $noticias = $obj_noticia->consultar_noticias();

        $nfilas = count($noticias);

        if ($nfilas > 0) {
            echo "<table id='grid' class='display' cellspacing='0'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th>Título</th>";
            echo "<th>Texto</th>";
            echo "<th>Categoría</th>";
            echo "<th>Fecha</th>";
            echo "<th>Imagen</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";

            foreach ($noticias as $resultado) {
                echo "<tr>";
                echo "<td>" . $resultado['titulo'] . "</td>";
                echo "<td>" . $resultado['texto'] . "</td>";
                echo "<td>" . $resultado['categoria'] . "</td>";
                echo "<td>" . date("j/n/Y", strtotime($resultado['fecha'])) . "</td>";

                if ($resultado['imagen'] != "") {
                    echo "<td><a target='_blank' href='img/" . $resultado['imagen'] . "'><img border='0' src='img/iconotexto.gif'></a></td>";
                } else {
                    echo "<td>&nbsp;</td>";
                }
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
        } else {
            echo "NO HAY NOTICIAS DISPONIBLES";
        }
    ?>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#grid').DataTable({
                "lengthMenu": [5, 10, 20, 50],
                "order": [[0, "asc"]],
                "language": {
                    "lengthMenu": "Mostrar _MENU_ registros por página",
                    "zeroRecords": "No existen resultados en su búsqueda",
                    "info": "mostrando página _PAGE_ de _PAGES_",
                    "infoFiltered": "(Buscado entre _MAX_ registros en total)",
                    "search": "Buscar: ",
                    "paginate": {
                        "first": "Primero",
                        "last": "Último",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                }
            });
        });
    </script>
</body>
</html>
