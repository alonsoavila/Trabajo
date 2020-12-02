<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Carrito de compras</title>
    <script type="application/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/eventos.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="css/estilos.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/resize.css">
    <link href="https://fonts.googleapis.com/css?family=Lato|Lora|Spectral+SC:300" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
</head>
<body>

<div id="contenedor">

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

    <div id="contenido">
        <h2>Carrito de compras</h2>
        <form method="post">
            <table class="shopping_cart" id="shopping_cart">
                <thead>
                <tr>
                    <th scope="col">Libro</th>
                    <th scope="col" id="price">Precio</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody id="tableBody"></tbody>
            </table>
        </form>

        <p><br><strong>Total:</strong> $<span id="cost_total"></span></p>
        <ul id="cart_actions">
            <li>
                <a href="pago.php" class="btn"><input type="button" class="btn" value="Pagar"></a>
            </li>
            <li>
                <input type="submit" name="delete" id="empty-cart" class="btn" value="Vaciar carrito" onclick="emptyCart()">
            </li>
            <li>
                <a href="index.php" class="btn">Seguir navegando</a>
            </li>

        </ul>
    </div>

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