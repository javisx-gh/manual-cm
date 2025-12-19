<?php
include '../conexion.php';

// Determinar idioma
$idioma = isset($_GET['lang']) ? $_GET['lang'] : 'es';
?>
<!DOCTYPE html>
<html lang="<?php echo $idioma; ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../Imagenes/Icono.png" type="image/png">
    <link rel="stylesheet" href="../styles.css">
    <title>Centímetro Málaga</title>
</head>

<body class="page" data-page="page6">
    <!-- Cabecera -->
    <header></header>

    <!-- Barra de navegación -->
    <nav class="navbar">
        <div class="logo">
            <p><a href="../index.php?lang=<?php echo $idioma; ?>"
                    id="link-logo"><?php echo getTexto($conn, 102, $idioma); ?></a></p>
        </div>

        <!-- Menú -->
        <ul class="menu">
            <li><a href="page1.php?lang=<?php echo $idioma; ?>"><?php echo getTexto($conn, 106, $idioma); ?></a></li>
            <li><a href="page2.php?lang=<?php echo $idioma; ?>"
                    id="link-menu-seleccion"><?php echo getTexto($conn, 107, $idioma); ?></a></li>
            <li><a href="page3.php?lang=<?php echo $idioma; ?>"
                    id="link-ventana-ftp"><?php echo getTexto($conn, 109, $idioma); ?></a></li>

            <!-- Menú desplegable -->
            <li class="dropdown">
                <a href="#" id="link-menu-mas"><img src="../Imagenes/caret-down-fill.svg" alt="">
                    <?php echo getTexto($conn, 108, $idioma); ?></a>
                <ul class="submenu">
                    <li><a href="page4.php?lang=<?php echo $idioma; ?>"
                            id="link-ventana-email"><?php echo getTexto($conn, 110, $idioma); ?></a></li>
                    <li><a href="page5.php?lang=<?php echo $idioma; ?>"
                            id="link-ventana-configuracion"><?php echo getTexto($conn, 111, $idioma); ?></a></li>
                    <li><a href="page6.php?lang=<?php echo $idioma; ?>"
                            id="link-ventana-informacion"><?php echo getTexto($conn, 112, $idioma); ?></a></li>
                    <li><a href="page7.php?lang=<?php echo $idioma; ?>"
                            id="link-ventana-registro"><?php echo getTexto($conn, 105, $idioma); ?></a></li>
                </ul>
            </li>
        </ul>
    </nav>

    <!-- Contenido -->
    <main class="content-manual">
        <div class="parrafo">
            <!-- Static for now -->
            <h2 id="titulo-pagina"><?php echo getTexto($conn, 301, $idioma); ?></h2>
            <p>
                <?php echo getTexto($conn, 302, $idioma); ?>
            </p>
            <img src="../Imagenes/ventana-informacion.png" alt="Información">
        </div>

        <!-- Botones -->
        <div class="botones">
            <input type="button" id="boton-anterior" onclick="abrirPagina('page5.php?lang=<?php echo $idioma; ?>')"
                value="<?php echo getTexto($conn, 113, $idioma); ?>">
            <input type="button" id="boton-siguiente" onclick="abrirPagina('page7.php?lang=<?php echo $idioma; ?>')"
                value="<?php echo getTexto($conn, 114, $idioma); ?>">
        </div>
    </main>

    <!-- Selector Idioma -->
    <div class="selector-idioma">
        <form action="" method="get">
            <select name="lang" id="language" onchange="this.form.submit()">
                <option value="es" <?php if ($idioma == 'es')
                    echo 'selected'; ?>>Español</option>
                <option value="en" <?php if ($idioma == 'en')
                    echo 'selected'; ?>>English</option>
            </select>
        </form>
    </div>

    <p id="paginacion" class="paginacion">6</p>

    <!-- Pie de página -->
    <footer>
        <p id="footer-autor"><?php echo getTexto($conn, 102, $idioma); ?></p>
        <p id="footer-derechos"><?php echo getTexto($conn, 116, $idioma); ?></p>
    </footer>

    <!-- Scripts -->
    <script src="../script.js"></script>
</body>

</html>