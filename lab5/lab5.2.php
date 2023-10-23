<?php
$allowedExtensions = array("jpg", "jpeg", "png", "gif");
$fileExtension = pathinfo($_FILES["nombre_archivo_cliente"]["tmp_name"], PATHINFO_EXTENSION);

if (in_array($fileExtension, $allowedExtensions)) {
    if (is_uploaded_file($_FILES['nombre_archivo_cliente']['tmp_name']))
{
    $nombreDirectorio="archivos/";
    $nombrearchivo=$_FILES['nombre_archivo_cliente']['name'];
    $nombreCompleto= $nombreDirectorio. $nombrearchivo;

    if(is_file($nombreCompleto))
    {
        $idUnico=time();
        $nombrearchivo=$idUnico."-".$nombrearchivo;
        echo "Archivo Repetido, se cambiara el nombre a $nombrearchivo <br> <br>";
    }
    move_uploaded_file ($_FILES['nombre_archivo_cliente']['tmp_name'],$nombreDirectorio.$nombrearchivo);

    echo "El archivo se ha subido satisfactoriamente al directorio $nombreDirectorio <br>";
} else {
    echo"No se ha podido subir el archivo porque excede el tamaño de subida"
}
}
else if{
    echo"No se ha podido subir el archivo porque no es compatible con el formato de subida"
}




?>