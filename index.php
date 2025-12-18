<?php
// Conexión a la base de datos
$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASS = '';
$DB_NAME = 'metro';

$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
if ($mysqli->connect_error) {
    http_response_code(500);
    die('Conexión fallida: ' . $mysqli->connect_error);
}

/*
Obtiene un campo (es|en) de la tabla textos por id
@param int $id
@param string $field 'es' o 'en'
@return string|null
*/
function get_text($id, $field = 'es') {
    global $mysqli;

    // Columnas permitidas (whitelist)
    $allowed = ['es', 'en'];

    if (!in_array($field, $allowed, true)) {
        return null; // campo no permitido
    }

    // Consulta segura (el nombre de columna ya está validado)
    $sql = sprintf('SELECT %s FROM textos WHERE id = ? LIMIT 1', $field);
    $stmt = $mysqli->prepare($sql);
    if (!$stmt) {
        return null;
    }

    $stmt->bind_param('i', $id);
    $stmt->execute();
    $stmt->bind_result($value);

    $result = null;
    if ($stmt->fetch()) {
        $result = $value;
    }

    $stmt->close();
    return $result;
}

// Endpoint simple para solicitudes AJAX desde el HTML
if (isset($_GET['action']) && $_GET['action'] === 'get_text') {

    $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
    $field = isset($_GET['field']) ? trim($_GET['field']) : 'es';

    $text = get_text($id, $field);

    header('Content-Type: text/plain; charset=utf-8');
    echo $text !== null ? $text : '';
    exit;
}
?>
