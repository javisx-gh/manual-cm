<?php
include 'conexion.php';

// Determinar idioma
$idioma = isset($_GET['lang']) ? $_GET['lang'] : 'es';
?>
<!DOCTYPE html>
<html lang="<?php echo $idioma; ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Imagenes/Icono.png" type="image/png">
    <link rel="stylesheet" href="styles.css">
    <title>Centímetro Málaga</title>
</head>

<body class="index">

    <!-- Contenido -->
    <main class="content">
        <img src="Imagenes/Icono.png" alt="logo">
        <div class="contenido">
            <p id="titulo"><?php echo getTexto($conn, 101, $idioma); ?></p>
            <p id="marca"><?php echo getTexto($conn, 102, $idioma); ?></p>
            <h1 id="titulo-manual"><?php echo getTexto($conn, 103, $idioma); ?></h1>
            <p id="explicacion-manual">
                <?php echo getTexto($conn, 2, $idioma); ?>
            </p>

            <!-- Botón -->
            <!-- Botón -->
            <a href="#" onclick="abrirPagina('PHP/page1.php?lang=<?php echo $idioma; ?>'); return false;"
                style="text-decoration: none;">
                <input type="button" value="<?php echo getTexto($conn, 104, $idioma); ?>">
            </a>
        </div>
    </main>

    <!-- Selector Idioma -->
    <div class="selector-idioma">
        <form action="index.php" method="get">
            <select name="lang" id="language" onchange="this.form.submit()">
                <option value="es" <?php if ($idioma == 'es')
                    echo 'selected'; ?>>Español</option>
                <option value="en" <?php if ($idioma == 'en')
                    echo 'selected'; ?>>English</option>
            </select>
        </form>
    </div>

    <!-- Scripts -->
    <script src="script.js"></script>
</body>

</html>