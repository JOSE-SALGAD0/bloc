<!DOCTYPE HTML>
<html>

<head>
    <link rel="icon" href="images/logo.png">
    <title>@yield('title')</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="css/main.css" />
    <noscript>
        <link rel="stylesheet" href="css/noscript.css" />
    </noscript>
</head>

<body class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Header -->
        <header id="header">
            <div class="inner">

                <!-- Logo -->
                <a href="index" class="logo">
                    <span class="symbol"><img src="images/logo.png" alt="" /></span><span
                        class="title">UPT</span>
                </a>

                <!-- Nav -->
                <nav>
                    <ul>
                        <li><a href="#menu">Menu</a></li>
                    </ul>
                </nav>

            </div>
        </header>

        <!-- Menu -->
        <nav id="menu">
            <h2>Menu</h2>
            <ul>
                <li><a href="inicio">Inicio</a></li>
                <li><a href="unidad-1">Unidad 1</a></li>
                <li><a href="unidad-2">Unidad 2</a></li>
            </ul>
        </nav>

        @yield('content')

        <!-- Footer -->
        <footer id="footer">
            <div class="inner">
                <section>
                    <h2>PONERSE EN CONTACTO</h2>
                    <form method="post" action="#">
                        <div class="fields">
                            <div class="field half">
                                <input type="text" name="name" id="name" placeholder="Nombre" />
                            </div>
                            <div class="field half">
                                <input type="email" name="email" id="email" placeholder="Correo" />
                            </div>
                            <div class="field">
                                <textarea name="message" id="message" placeholder="Mensaje"></textarea>
                            </div>
                        </div>
                        <ul class="actions">
                            <li><input type="submit" value="Enviar" class="primary" /></li>
                        </ul>
                    </form>
                </section>
                <section>
                    <h2>Seguir</h2>
                    <ul class="icons">
                        <li>
                            <a href="https://github.com/JOSE-SALGAD0" class="icon brands style2 fa-github"
                                target="_blank">
                                <span class="label">GitHub</span></a>
                        </li>
                        <li>
                            <a href="mailto:jose_1319104015@uptecamac.edu.mx" class="icon solid style2 fa-envelope"
                                target="_blank">
                                <span class="label">Email</span></a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/Xoxe.salgado/" class="icon brands style2 fa-facebook-f"
                                target="_blank">
                                <span class="label">Facebook</span></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/xoxe.salgad0" class="icon brands style2 fa-instagram"
                                target="_blank">
                                <span class="label">Instagram</span></a>
                        </li>
                    </ul>
                </section>
                <ul class="copyright">
                    <li>&copy; Todos los derechos reservados</li>
                    <li>Design: <a href="https://github.com/JOSE-SALGAD0" target="_blank">Jose Salgado</a></li>
                </ul>
            </div>
        </footer>

    </div>

    <!-- Scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/browser.min.js"></script>
    <script src="js/breakpoints.min.js"></script>
    <script src="js/util.js"></script>
    <script src="js/main.js"></script>

</body>

</html>