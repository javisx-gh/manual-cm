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

<body class="page" data-page="page4">
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
            <h2 id="ventana-email-titulo"><?php echo getTexto($conn, 14, $idioma); ?></h2>

            <p id="descripcion-correos">
                <?php echo getTexto($conn, 15, $idioma); ?>
            </p>

            <h3><?php echo getTexto($conn, 16, $idioma); ?></h3>
            <ul>
                <li><?php echo getTexto($conn, 17, $idioma); ?></li>
                <li><?php echo getTexto($conn, 18, $idioma); ?></li>
            </ul>

            <img src="../Imagenes/ventana-email.png" alt="">

            <div class="linea">
                <div></div>
            </div>

            <h3 id="gestion-correos-secundaria"><?php echo getTexto($conn, 19, $idioma); ?></h3>

            <p>
                <?php echo getTexto($conn, 20, $idioma); ?>
            </p>

            <ul>
                <li><?php echo getTexto($conn, 21, $idioma); ?></li>
                <li><?php echo getTexto($conn, 22, $idioma); ?></li>
                <li><?php echo getTexto($conn, 23, $idioma); ?></li>
                <li><?php echo getTexto($conn, 24, $idioma); ?></li>
                <ul>
                    <li><?php echo getTexto($conn, 25, $idioma); ?></li>
                    <li><?php echo getTexto($conn, 26, $idioma); ?></li>
                    <li><?php echo getTexto($conn, 27, $idioma); ?></li>
                </ul>
            </ul>

            <div class="linea">
                <div></div>
            </div>

            <h3><?php echo getTexto($conn, 28, $idioma); ?></h3>
            <p><?php echo getTexto($conn, 29, $idioma); ?></p>

            <ul>
                <li><?php echo getTexto($conn, 30, $idioma); ?></li>
                <li><?php echo getTexto($conn, 31, $idioma); ?></li>
                <li><?php echo getTexto($conn, 32, $idioma); ?></li>
                <ul>
                    <li><?php echo getTexto($conn, 33, $idioma); ?></li>
                    <li><?php echo getTexto($conn, 34, $idioma); ?></li>
                    <li><?php echo getTexto($conn, 35, $idioma); ?></li>
                    <li><?php echo getTexto($conn, 36, $idioma); ?></li>
                </ul>
            </ul>

        </div>

        <!-- Botones -->
        <div class="botones">
            <input type="button" id="boton-anterior" onclick="abrirPagina('page3.php?lang=<?php echo $idioma; ?>')"
                value="<?php echo getTexto($conn, 113, $idioma); ?>">
            <input type="button" id="boton-siguiente" onclick="abrirPagina('page5.php?lang=<?php echo $idioma; ?>')"
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

    <p id="paginacion" class="paginacion">4</p>

    <!-- Pie de página -->
    <footer>
        <p id="footer-autor"><?php echo getTexto($conn, 102, $idioma); ?></p>
        <p id="footer-derechos"><?php echo getTexto($conn, 116, $idioma); ?></p>
    </footer>

    <!-- Scripts -->
    <script src="../script.js"></script>
</body>

</html>