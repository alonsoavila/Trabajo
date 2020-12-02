<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
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
                <span>Florish y Blotts</span>
            </div>

            <div id="perfil">
                <a><img id="usuario" src="images/user.png"></a>
                <a href="shopping_list.php"><img id="carrito" src="images/shopping-cart.png"></a>
                <div id="nombre_usuario"></div>
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

    <section id="content_signup">
        <div id="signup">
            <h2>Registro</h2>
            <p>Registrate para iniciar a navegar a través de las historias</p>
            <form id="form_signup" method="post" action="login.php" onsubmit="return signup(this);">
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
                        <td>Vuelva a escribir la contraseña:</td>
                        <td><input name="contrasena_repeat" id="contrasena_repeat" type="password" required="required"></td>
                    </tr>
                    <tr>
                        <td>
                            Nombre:
                        </td>
                        <td><input name="name" id="name" type="text" required="required"></td>
                    </tr>

                    <tr>
                        <td>
                            Correo electrónico:
                        </td>
                        <td><input name="email" id="email" type="email" required="required" placeholder="email@company.com"></td>
                    </tr>

                    <tr>
                        <td>
                            Telefono:
                        </td>
                        <td><input name="telephone" id="telephone" type="tel" required="required" pattern="[0-9]{10}" placeholder="0123456789"></td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input id="button_signup" type="submit" value="Registrar">
                        </td>
                    </tr>

                </table>

            </form>
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
