<?php
include("php/config.php");

// Consulta SQL para obtener todos los médicos
$sql = "SELECT * FROM medicos";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // Crear la tabla HTML con los resultados de la consulta
    echo "<table border='1'>";
    echo "<tr><th>Cédula</th><th>Código de Médico</th><th>Nombre</th><th>Apellido</th><th>Cargo</th><th>Departamento</th><th>Sede</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['Cedula'] . "</td>";
        echo "<td>" . $row['Codigo_de_medico'] . "</td>";
        echo "<td>" . $row['Nombre'] . "</td>";
        echo "<td>" . $row['Apellido'] . "</td>";
        echo "<td>" . $row['Cargo'] . "</td>";
        echo "<td>" . $row['Departamento'] . "</td>";
        echo "<td>" . $row['Sede'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No hay médicos registrados";
}

mysqli_close($con);
?>
