<?php
// Conexión a la base de datos
$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASS = '';
$DB_NAME = 'metro';

$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
if ($mysqli->connect_error) {
    http_response_code(500);
    die('Error de conexión');
}

// Forzar UTF-8
$mysqli->set_charset('utf8mb4');

/**
 * Obtiene un texto en español o inglés desde la tabla textos
 *
 * @param int $id
 * @param string $field 'es' o 'en'
 * @return string|null
 */
function get_text(int $id, string $field = 'es'): ?string {
    global $mysqli;

    // Validar columna permitida
    if (!in_array($field, ['es', 'en'], true)) {
        return null;
    }

    $sql = "SELECT $field FROM textos WHERE id = ? LIMIT 1";
    $stmt = $mysqli->prepare($sql);

    if (!$stmt) {
        return null;
    }

    $stmt->bind_param('i', $id);
    $stmt->execute();
    $stmt->bind_result($text);

    $result = $stmt->fetch() ? $text : null;

    $stmt->close();
    return $result;
}

// Endpoint para llamadas AJAX
if (
    isset($_GET['action']) &&
    $_GET['action'] === 'get_text'
) {
    $id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
    $field = isset($_GET['field']) ? $_GET['field'] : 'es';

    $text = get_text($id, $field);

    header('Content-Type: text/plain; charset=utf-8');
    echo $text ?? '';
    exit;
}
?>
