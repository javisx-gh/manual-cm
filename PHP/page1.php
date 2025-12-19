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

<body class="page" data-page="page1">
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
            <h2><?php echo getTexto($conn, 8, $idioma); ?></h2>
            <h3 id="titulo-descripcion"><?php echo getTexto($conn, 501, $idioma); ?></h3>
            <p id="parrafo-descripcion">
                <?php echo getTexto($conn, 9, $idioma); ?>
            </p>

            <img src="../Imagenes/login.png" alt="Login" id="imagen-login">

            <div class="linea">
                <div></div>
            </div>

            <h3 id="titulo-componentes"><?php echo getTexto($conn, 502, $idioma); ?></h3>
            <ol>
                <li id="campo-nombre-usuario"><?php echo getTexto($conn, 503, $idioma); ?></li>
                <ul>
                    <li id="funcion-nombre-usuario">
                        <?php echo getTexto($conn, 10, $idioma); ?>
                    </li>
                </ul>

                <li id="boton-ok"><?php echo getTexto($conn, 504, $idioma); ?></li>
                <ul>
                    <li id="funcion-ok"><?php echo getTexto($conn, 11, $idioma); ?>
                    </li>
                </ul>

                <li id="sistema-verificacion"><?php echo getTexto($conn, 505, $idioma); ?></li>
                <ul>
                    <li><?php echo getTexto($conn, 12, $idioma); ?></li>
                </ul>

                <li id="sesion"><?php echo getTexto($conn, 506, $idioma); ?></li>
                <ul>
                    <li><?php echo getTexto($conn, 13, $idioma); ?></li>
                </ul>
            </ol>
        </div>

        <!-- Botones -->
        <div class="botones">
            <input type="button" id="boton-anterior" onclick="abrirPagina('../index.php?lang=<?php echo $idioma; ?>')"
                value="<?php echo getTexto($conn, 113, $idioma); ?>">
            <input type="button" id="boton-siguiente" onclick="abrirPagina('page2.php?lang=<?php echo $idioma; ?>')"
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

    <p id="paginacion" class="paginacion">1</p>

    <!-- Pie de página -->
    <footer>
        <p id="footer-autor"><?php echo getTexto($conn, 102, $idioma); ?></p>
        <p id="footer-derechos"><?php echo getTexto($conn, 116, $idioma); ?></p>
    </footer>
    <!-- Scripts -->
    <script src="../script.js"></script>
</body>

</html>