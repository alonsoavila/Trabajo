<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ingresar</title>
    <link rel="stylesheet" href="css/estilos.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/resize.css" type="text/css" media="screen">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lato|Lora|Spectral+SC:300" rel="stylesheet">
    <script type="application/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="application/javascript" src="js/eventos.js"></script>
</head>
<body>
<div id="contenedor" class="defaultbody">
    <header>
        <div id="logotipo">
            <a href="index.php">
                <img src="images/logo.png">
            </a>
            <span>Andes Seguridad</span>
        </div>

        <div id="perfil">
            <div id="nombre_usuario"></div>
            <a><img id="usuario" src="images/user.png"></a>
            <a href="shopping_list.php"><img id="carrito" src="images/shopping-cart.png"></a>
        </div>
        <a id="menu_button"></a>
    </header>

    <nav>
        <hr>
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="producto.php">Productos</a></li>
            <li><a href="about.php">Acerca de</a></li>
        </ul>
        <hr>
    </nav>


    <!-- Fin de header -->

    <section id="content_login">
        <div id="login">
            <h2>Ingresar</h2>
            <p>Ingresa para iniciar a navegar a través de las historias</p>
            <form id="form_login" method="post" action="index.php" onsubmit="return login(this);">
                <table>
                    <tr>
                        <td colspan="2" id="validacion_login"></td>
                    </tr>
                    <tr>
                        <td>
                            Usuario:
                        </td>
                        <td><input name="usuario_input" id="usuario_input" type="text" required="required"></td>
                    </tr>
                    <tr>
                        <td>Contraseña:</td>
                        <td><input name="contrasena" id="contrasena" type="password" required="required"></td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input id="button_login" type="submit" value="Ingresar">
                        </td>
                    </tr>

                </table>

            </form>
            <div id="login_registrarse">
                <a href="registro.php">Registrate</a>

            </div>
        </div>

    </section>

    <!-- Footer -->

    <footer>
        <hr>
        <div id="social">
            <ul id="red_social">
                <li><a href="#" title="facebook"><img src="images/facebook.png"></a></li>
                <li><a href="#" title="twitter"><img src="images/twitter.png"></a></li>
            </ul>
        </div>

        <div id="derechos">
            <small>&copy;2017 Librería Flourish y Blotts. Todos los derechos reservados.</small>
        </div>

    </footer >
</div>
</body>
</html>