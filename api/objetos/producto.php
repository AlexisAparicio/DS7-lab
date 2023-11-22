<?php
class Producto{
// conexion de base de datos y tabla productos
private $conn;
private $nombre_tabla = "productos";
    // atributos de la clase
    public $id;
    public $nombre;
    public $descripcion;
    public $precio;
    public $categoria_id;
    public $categoria_desc;
    public $creado;
// constructor con $db como conexion a base de datos
    public function __construct($db){
        $this->conn = $db;

}
 // leer productos
 function read() {
    // Query para seleccionar todos los productos con la descripción de la categoría
    $query = "SELECT
                c.nombre as categoria_desc, p.id, p.nombre, p.descripcion, p.precio, p.categoria_id, p.creado
            FROM
                " . $this->nombre_tabla . " p
            LEFT JOIN
                categorias c
            ON
                p.categoria_id = c.id
            ORDER BY
                p.creado DESC";

    // Sentencia para preparar el query
    $stmt = $this->conn->prepare($query);

    // Ejecutar query
    $stmt->execute();

    return $stmt;
}

}
?>