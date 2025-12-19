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

<body class="page" data-page="page3">
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
            <h2><?php echo getTexto($conn, 44, $idioma); ?></h2>

            <p id="descripcion-ftp">
                <?php echo getTexto($conn, 45, $idioma); ?>
            </p>

            <img src="../Imagenes/FTP.png" alt="FTP" id="imagen-ftp">

            <div class="linea">
                <div></div>
            </div>

            <h3 id="interfaz-ftp"><?php echo getTexto($conn, 46, $idioma); ?></h3>

            <p id="descripcion-interfaz">
                <?php echo getTexto($conn, 47, $idioma); ?>
            </p>

            <ul>
                <li id="columna-nombre"><?php echo getTexto($conn, 48, $idioma); ?></li>
                <li id="columna-tamano"><?php echo getTexto($conn, 49, $idioma); ?></li>
                <li id="columna-fecha"><?php echo getTexto($conn, 50, $idioma); ?></li>
                <li id="columna-botones"><?php echo getTexto($conn, 51, $idioma); ?></li>
            </ul>

            <div class="linea">
                <div></div>
            </div>

            <h3 id="acciones-archivos"><?php echo getTexto($conn, 52, $idioma); ?></h3>

            <p id="descripcion-acciones">
                <?php echo getTexto($conn, 53, $idioma); ?>
            </p>
            <ul>
                <li id="accion-descargar"><?php echo getTexto($conn, 54, $idioma); ?></li>
                <li id="accion-eliminar"><?php echo getTexto($conn, 55, $idioma); ?></li>
                <li id="accion-renombrar"><?php echo getTexto($conn, 56, $idioma); ?></li>
            </ul>

            <div class="linea">
                <div></div>
            </div>

            <h3 id="navegacion-directorios"><?php echo getTexto($conn, 57, $idioma); ?></h3>

            <p id="descripcion-navegacion">
                <?php echo getTexto($conn, 58, $idioma); ?>
            </p>
            <ul>
                <li id="accion-subir"><?php echo getTexto($conn, 59, $idioma); ?></li>
                <li id="accion-subir-nivel"><?php echo getTexto($conn, 60, $idioma); ?></li>
                <li id="accion-crear-carpeta"><?php echo getTexto($conn, 61, $idioma); ?></li>
                <li id="accion-volver"><?php echo getTexto($conn, 62, $idioma); ?></li>
            </ul>

            <div class="linea">
                <div></div>
            </div>

            <h3 id="busqueda-filtrado"><?php echo getTexto($conn, 63, $idioma); ?></h3>
            <p id="descripcion-busqueda">
                <?php echo getTexto($conn, 64, $idioma); ?>
            </p>
            <ul>
                <li id="paso-filtrar"><?php echo getTexto($conn, 65, $idioma); ?></li>
                <li id="resultado-filtrar"><?php echo getTexto($conn, 66, $idioma); ?></li>
            </ul>

            <!-- NAVEGACIÓN DOBLE CLICK -->
            <h3><?php echo getTexto($conn, 67, $idioma); ?></h3>
            <p><?php echo getTexto($conn, 68, $idioma); ?></p>
            <ul>
                <li><?php echo getTexto($conn, 69, $idioma); ?></li>
            </ul>

            <!-- NOTAS ADICIONALES -->
            <h3><?php echo getTexto($conn, 70, $idioma); ?></h3>
            <ul>
                <li><?php echo getTexto($conn, 71, $idioma); ?></li>
                <li><?php echo getTexto($conn, 72, $idioma); ?></li>
            </ul>

        </div>

        <!-- Botones -->
        <div class="botones">
            <input type="button" id="boton-anterior" onclick="abrirPagina('page2.php?lang=<?php echo $idioma; ?>')"
                value="<?php echo getTexto($conn, 113, $idioma); ?>">
            <input type="button" id="boton-siguiente" onclick="abrirPagina('page4.php?lang=<?php echo $idioma; ?>')"
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

    <p id="paginacion" class="paginacion">3</p>

    <!-- Pie de página -->
    <footer>
        <p id="footer-autor"><?php echo getTexto($conn, 102, $idioma); ?></p>
        <p id="footer-derechos"><?php echo getTexto($conn, 116, $idioma); ?></p>
    </footer>

    <!-- Scripts -->
    <script src="../script.js"></script>
</body>

</html>