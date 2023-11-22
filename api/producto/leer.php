<?php
// Encabezados obligatorios
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// Incluir archivos de conexión y objetos
include_once '../configuracion/conexion.php';
include_once '../objetos/producto.php';

// Inicializar base de datos y objeto producto
$conex = new Conexion();
$db = $conex->obtenerConexion();

// Inicializar objeto Producto
$producto = new Producto($db);

// Lectura de productos
$stmt = $producto->read();
$num = $stmt->rowCount();

// Verificar si hay más de 0 registros encontrados
if ($num > 0) {
    $products_arr = array();
    $products_arr["records"] = array();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        extract($row);

        $product_item = array(
            "id" => $id,
            "nombre" => $nombre,
            "descripcion" => html_entity_decode($descripcion),
            "precio" => $precio,
            "categoria_id" => $categoria_id,
            "categoria_desc" => $categoria_desc
        );

        array_push($products_arr["records"], $product_item);
    }

    // Código de respuesta - 200 OK
    http_response_code(200);

    // Mostrar productos en formato JSON
    echo json_encode($products_arr);
} else {
    // Código de respuesta - 404 No encontrado
    http_response_code(404);

    // Informar al usuario que no se encontraron productos
    echo json_encode(
        array("message" => "No se encontraron productos.")
    );
}
// Aquí se manejaría la lógica si no se encuentran productos
?>
