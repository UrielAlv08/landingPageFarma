<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('nombre')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700' rel='stylesheet' type='text/css'>

    <!-- Css -->
    <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" />
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- jS -->
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/jquery.nivo.slider.js" type="text/javascript"></script>
    <script src="js/owl.carousel.min.js" type="text/javascript"></script>
    <script src="js/jquery.nicescroll.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/main.js" type="text/javascript"></script>

    @yield('css')
</head>

<body>


    <!-- TOP HEADER Start
    ================================================== -->

    <section id="top">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <p class="contact-action">¡ENVIOS EN 120 MINUTOS!<strong>click aquí</strong> para conocer detalles y
                        lugares donde tenemos servicio.
                        ¡Cada día estamos más cerca de tí!</p>
                </div>
                <div class="col-md-3 clearfix">
                    <ul class="login-cart">
                        <li>
                            <a data-toggle="modal" data-target="#myModal" href="#">
                                <i class="fa fa-user"></i>
                                Login
                            </a>
                        </li>
                        <li>
                            <div class="cart dropdown">
                                <a data-toggle="dropdown" href="#"><i class="fa fa-shopping-cart"></i>Cart(1)</a>
                                <div class="dropdown-menu dropup">
                                    <span class="caret"></span>
                                    <ul class="media-list">
                                        <li class="media">
                                            <img class="pull-left" src="images/product-item.jpg" alt="">
                                            <div class="media-body">
                                                <h6>Italian Sauce
                                                    <span>$250</span>
                                                </h6>
                                            </div>
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-sm">Checkout</button>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <div class="search-box">
                        <div class="input-group">
                            <input placeholder="Search Here" type="text" class="form-control">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"></button>
                            </span>
                        </div><!-- /.input-group -->
                    </div><!-- /.search-box -->
                </div>
            </div> <!-- End Of /.row -->
        </div> <!-- End Of /.Container -->


        <!-- MODAL Start
    ================================================== -->

        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Introduce Yourself</h4>
                    </div>
                    <div class="modal-body clearfix">

                        <form action="#" method="post" id="create-account_form" class="std">
                            <fieldset>
                                <h3>Create your account</h3>
                                <div class="form_content clearfix">
                                    <h4>Enter your e-mail address to create an account.</h4>
                                    <p class="text">
                                        <label for="email_create">E-mail address</label>
                                        <span>
                                            <input placeholder="E-mail address" type="text" id="email_create"
                                                name="email_create" value="" class="account_input">
                                        </span>
                                    </p>
                                    <p class="submit">
                                        <button class="btn btn-primary">Create Your Account</button>
                                    </p>
                                </div>
                            </fieldset>
                        </form>
                        <form action="" method="post" id="login_form" class="std">
                            <fieldset>
                                <h3>Already registered?</h3>
                                <div class="form_content clearfix">
                                    <p class="text">
                                        <label for="email">E-mail address</label>
                                        <span><input placeholder="E-mail address" type="text" id="email" name="email"
                                                value="" class="account_input"></span>
                                    </p>
                                    <p class="text">
                                        <label for="passwd">Password</label>
                                        <span><input placeholder="Password" type="password" id="passwd" name="passwd"
                                                value="" class="account_input"></span>
                                    </p>
                                    <p class="lost_password">
                                        <a href="#popab-password-reset" class="popab-password-link">Forgot your
                                            password?</a>
                                    </p>
                                    <p class="submit">
                                        <button class="btn btn-success">Log in</button>
                                    </p>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- End of /Section -->



    <!-- LOGO Start
    ================================================== -->

    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('inicio') }}">
                        <img src="images/Logooo.png" alt="logo">
                    </a>
                </div> <!-- End of /.col-md-12 -->
            </div> <!-- End of /.row -->
        </div> <!-- End of /.container -->
    </header> <!-- End of /Header -->




    <!-- MENU Start
    ================================================== -->

    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div> <!-- End of /.navbar-header -->

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav nav-main">
                    <li class="active"><a href="{{ route('inicio') }}">Inicio</a></li>
                    <li><a href="{{ route('conocenos') }}">Conocenos</a></li>
                    <li><a href="{{ route('envioADomicilio') }}">Envio a domicilio</a></li>
                    <li><a href="{{ route('conocenos') }}">Tu carrito</a></li>
                    <li class="dropdown">
                        <a href="#">
                            Productos
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('productosDestacados') }}">Destacados</a></li>
                            <li><a href="{{ route('productosDeTemporada') }}">De temporada</a></li>
                            <li><a href="{{ route('ofertas') }}">Ofertas</a></li>
                        </ul>
                    </li> <!-- End of /.dropdown -->


                </ul> <!-- End of /.nav-main -->
            </div> <!-- /.navbar-collapse -->
        </div> <!-- /.container-fluid -->
    </nav> <!-- End of /.nav -->


    @yield('content')
    @yield('js')


    <!-- FOOTER Start
    ================================================== -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="block clearfix">
                        <a href="#">
                            <img src="images/Logooo.png" alt="">
                        </a>
                        <br>
                        <br>
                        <p>
                            Av. Enrique Díaz de León 261 Nte.<br>
                            Col. Villaseñor, Guadalajara<br>
                            Jalisco, México C.P. 44600<br><br><b>
                                Teléfonos Contact Center:</b><br><a href="tel:+523338181818" style="
    color: white;
    text-decoration: underline;
">(33) 3818 1818 </a>
                            <br><a href="tel:+528332762242" style="
    color: white;
    text-decoration: underline;
">(83) FARMACIA (32762242) </a>
                        </p>
                    </div> <!-- End Of /.block -->
                </div> <!-- End Of /.Col-md-4 -->
                <div class="col-md-4">
                    <div class="block">
                        <h4 class="connect-heading">Siguenos en nuestras redes</h4>
                        <ul class="social-icon">
                            <li>
                                <a class="facebook-icon" href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a class="plus-icon" href="#">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </li>
                            <li>
                                <a class="twitter-icon" href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a class="pinterest-icon" href="#">
                                    <i class="fa fa-pinterest"></i>
                                </a>
                            </li>
                            <li>
                                <a class="linkedin-icon" href="#">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                        </ul> <!-- End Of /.social-icon -->

                    </div> <!-- End Of /.block -->
                </div> <!-- End Of Col-md-3 -->
                <div class="col-md-4">
                    <div class="block">
                        <h4>UPCOMING ITEMS</h4>
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="images/product-item.jpg" alt="...">
                            </a>
                            <a class="pull-left" href="#">
                                <img class="media-object" src="images/product-item.jpg" alt="...">
                            </a>
                            <a class="pull-left" href="#">
                                <img class="media-object" src="images/product-item.jpg" alt="...">
                            </a>
                            <a class="pull-left" href="#">
                                <img class="media-object" src="images/product-item.jpg" alt="...">
                            </a>
                            <a class="pull-left" href="#">
                                <img class="media-object" src="images/product-item.jpg" alt="...">
                            </a>
                            <a class="pull-left" href="#">
                                <img class="media-object" src="images/product-item.jpg" alt="...">
                            </a>
                        </div> <!-- End Of /.media -->
                    </div> <!-- End Of /.block -->
                </div> <!-- End Of Col-md-3 -->
            </div> <!-- End Of /.row -->
        </div> <!-- End Of /.Container -->



        <!-- FOOTER-BOTTOM Start
        ================================================== -->

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="cash-out pull-left">
                            <li>
                                <a href="#">
                                    <img src="images/American-Express.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/PayPal.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/Maestro.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/Visa.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/Visa-Electron.png" alt="">
                                </a>
                            </li>
                        </ul>
                        <p class="copyright-text pull-right">AndoCodeando @2022 Designed by <a
                                href="https://www.youtube.com/watch?v=T-CyVvs-yJU&list=RDJf-dYCfMrw4&index=21">ByteCoders</a> All Rights Reserved</p>
                    </div> <!-- End Of /.col-md-12 -->
                </div> <!-- End Of /.row -->
            </div> <!-- End Of /.container -->
        </div> <!-- End Of /.footer-bottom -->
    </footer> <!-- End Of Footer -->


</body>
<!--end::Body-->

</html>
