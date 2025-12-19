<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "metro";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to get text by ID and Language
function getTexto($conn, $id, $lang = 'es')
{
    $sql = "SELECT $lang FROM textos WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row[$lang];
    } else {
        return "Texto no encontrado";
    }
}
?>