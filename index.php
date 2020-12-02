<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/estilos.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/resize.css" type="text/css" media="screen">
    <link href="https://fonts.googleapis.com/css?family=Lato|Lora|Spectral+SC:300" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="application/javascript" src="js/eventos.js"></script>
    <script type="application/javascript" src="js/jquery-3.2.1.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

        <section>
            <article id="presentacion">
                
            </article>
            <article id="ofertas">
                <h3>Ofertas</h3>
                <ul>
                    <li>
                        <img src="images/productos/respirador1.png">
                        <span id="title_oferta_1" class="bookName">Respirador Media Cara Silicona - 7502 - 3M</span>
                        <div id="valoracion_1">
                        </div>
                        Precio: S/.<span id="precio_1" class="bookPrice">299.50</span>
                        <br><br>
                        <input type="button" class="addBook" value="Agregar al carrito" onclick="addToCart_I(this)">
                    </li>
                    <li>
                        <img src="images/productos/orejera.jpg">
                        <span id="title_oferta_2" class="bookName">Orejera Aviator A301</span>
                        <div id="valoracion_2">
                        </div>
                        Precio: S/.<span id="precio_2" class="bookPrice">215.00</span>
                        <br><br><br>
                        <input type="button" class="addBook" value="Agregar al carrito" onclick="addToCart_I(this)">
                    </li>
                    <li>
                        <img src="images/productos/arnes.png">
                        <span id="title_oferta_3" class="bookName">Arnés 4 Anillos Cruzados - H44 - 011032 - WEB DEVICES</span>
                        <div id="valoracion_3">
                        </div>
                        Precio: S/.<span id="precio_3" class="bookPrice">198.00</span>
                        <input type="button" class="addBook" value="Agregar al carrito" onclick="addToCart_I(this)">
                    </li>
                    <li>
                        <img src="images/productos/respirador2.png">
                        <span id="title_oferta_1" class="bookName">Respiradores Desechables - 8210 - 3M</span>
                        <div id="valoracion_1">
                        </div>
                        Precio: S/.<span id="precio_1" class="bookPrice">299.50</span>
                        <br><br>
                        <input type="button" class="addBook" value="Agregar al carrito" onclick="addToCart_I(this)">
                    </li>
                    <li>
                        <img src="images/productos/guante.png">
                        <span id="title_oferta_2" class="bookName">Guante 306 - SHOWA</span>
                        <div id="valoracion_2">
                        </div>
                        Precio: S/.<span id="precio_2" class="bookPrice">215.00</span>
                        <br><br><br>
                        <input type="button" class="addBook" value="Agregar al carrito" onclick="addToCart_I(this)">
                    </li>
                    <li>
                        <img src="images/productos/guante2.png">
                        <span id="title_oferta_3" class="bookName">Guante de nitrilo SOLVEX 727 - SHOWA</span>
                        <div id="valoracion_3">
                        </div>
                        Precio: S/.<span id="precio_3" class="bookPrice">200.00</span>
                        <br><br>
                        <input type="button" class="addBook" value="Agregar al carrito" onclick="addToCart_I(this)">
                    </li>
                    <li>
                        <img src="images/productos/bota.png">
                        <span id="title_oferta_1" class="bookName">Botin 9000 A Dieléctrico - BOMPEL</span>
                        <div id="valoracion_1">
                        </div>
                        Precio: S/.<span id="precio_1" class="bookPrice">299.50</span>
                        <br><br>
                        <input type="button" class="addBook" value="Agregar al carrito" onclick="addToCart_I(this)">
                    </li>
                    <li>
                        <img src="images/productos/lentes.png">
                        <span id="title_oferta_2" class="bookName">Anteojos GX 100 de malla - GALAXY</span>
                        <div id="valoracion_2">
                        </div>
                        Precio: S/.<span id="precio_2" class="bookPrice">215.00</span>
                        <br><br>
                        <input type="button" class="addBook" value="Agregar al carrito" onclick="addToCart_I(this)">
                    </li>
                    <li>
                        <img src="images/productos/casco.png">
                        <span id="title_oferta_3" class="bookName">Casco Omega - ERB</span>
                        <div id="valoracion_3">
                        </div>
                        Precio: S/.<span id="precio_3" class="bookPrice">200.00</span>
                        <br><br><br>
                        <input type="button" class="addBook" value="Agregar al carrito" onclick="addToCart_I(this)">
                    </li>
                </ul>

            </article>
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

         
</footer >
</div>

<div class="alertingdivbg"  style="display: none">
    <div class="alertingdiv"></div>
</div>
</body>
</html>