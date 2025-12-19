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

<body class="page" data-page="page7">
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
            <!-- Content currently static as texts appear missing in DB dump -->
            <h2 id="titulo-ventana"><?php echo getTexto($conn, 401, $idioma); ?></h2>
            <h3 id="descripcion-general"><?php echo getTexto($conn, 402, $idioma); ?></h3>
            <p id="descripcion-texto">
                <?php echo getTexto($conn, 403, $idioma); ?>
            </p>

            <img src="../Imagenes/ventana-registro.png" alt="">

            <div class="linea">
                <div></div>
            </div>

            <h3 id="componentes-ventana"><?php echo getTexto($conn, 404, $idioma); ?></h3>
            <ol>
                <li id="titulo-principal"><?php echo getTexto($conn, 405, $idioma); ?></li>
                <ul>
                    <li id="texto-registro"><?php echo getTexto($conn, 406, $idioma); ?></li>
                    <li id="funcion-registro">
                        <?php echo getTexto($conn, 407, $idioma); ?>
                    </li>
                </ul>

                <li id="campos-entrada"><?php echo getTexto($conn, 408, $idioma); ?></li>
                <p id="descripcion-campos">
                    <?php echo getTexto($conn, 409, $idioma); ?>
                </p>
                <ul>
                    <li id="campo-mail"><?php echo getTexto($conn, 410, $idioma); ?></li>
                    <li id="campo-nombre"><?php echo getTexto($conn, 411, $idioma); ?></li>
                    <li id="campo-apellidos"><?php echo getTexto($conn, 412, $idioma); ?></li>
                    <li id="campo-dni"><?php echo getTexto($conn, 413, $idioma); ?></li>
                    <li id="campo-alias"><?php echo getTexto($conn, 414, $idioma); ?></li>
                    <li id="campo-contraseña"><?php echo getTexto($conn, 415, $idioma); ?></li>
                </ul>

                <li id="botones-funcionales"><?php echo getTexto($conn, 416, $idioma); ?></li>
                <ul>
                    <li id="boton-ok">
                        <?php echo getTexto($conn, 417, $idioma); ?>
                    </li>
                    <li id="boton-cancel">
                        <?php echo getTexto($conn, 418, $idioma); ?>
                    </li>
                </ul>
            </ol>
        </div>

        <!-- Botones -->
        <div class="botones">
            <input type="button" id="boton-anterior" onclick="abrirPagina('page6.php?lang=<?php echo $idioma; ?>')"
                value="<?php echo getTexto($conn, 113, $idioma); ?>">
            <input type="button" id="boton-siguiente" onclick="abrirPagina('../index.php?lang=<?php echo $idioma; ?>')"
                value="<?php echo getTexto($conn, 115, $idioma); ?>">
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

    <!-- Paginación -->
    <p id="paginacion" class="paginacion">7</p>

    <!-- Pie de página -->
    <footer>
        <p id="footer-autor"><?php echo getTexto($conn, 102, $idioma); ?></p>
        <p id="footer-derechos"><?php echo getTexto($conn, 116, $idioma); ?></p>
    </footer>

    <!-- Scripts -->
    <script src="../script.js"></script>
</body>

</html>