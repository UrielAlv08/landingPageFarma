@extends('layouts.layout')
@section('nombre')
Inicio
@endsection

<!Aparatado CSS>
@section('css')
    <link href="assets/css/datatables.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/styles.css" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<body>

        <!-- PRODUCTS Start
    ================================================== -->
{{--
        <section id="products">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="products-heading">
                            <h2>PRODUCTOS</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($medica as $medi)
                        <div class="col-md-3">
                            <div class="products">
                                <a href="single-product.html">
                                    <img src="{{ $medi->imagen }}" alt="">
                                </a>
                                <a href="single-product.html">
                                    <h4>{{ $medi->nombre }}</h4>
                                </a>
                                <p class="price">{{ $medi->precio }}</p>
                                <a class="view-link shutter" href="#">
                                    <i class="fa fa-plus-circle"></i>Add To Cart</a>
                            </div> <!-- End of /.products -->
                        </div> <!-- End of /.col-md-3 -->
                    @endforeach

                </div> <!-- End of /.row -->
            </div> <!-- End of /.container -->
        </section> <!-- End of Section --> --}}





    <section id="slider-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="slider" class="nivoSlider">
                        <img src="images/Promocion1.jpg" alt="" />
                        <img src="images/Promocion2.jpeg" alt="" />
                        <img src="images/Promocion3.jpeg" alt="" />
                    </div> <!-- End of /.nivoslider -->
        </div> <!-- End of /.col-md-12 -->
        </div> <!-- End of /.row -->
        </div> <!-- End of /.container -->
        </section> <!-- End of Section -->


        <!-- CATAGORIE Start
    ================================================== -->

        <section id="catagorie">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <div class="block-heading">
                                <h2>Podría interesarte</h2>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-md-4">
                                    <div class="thumbnail">
                                        <a class="catagotie-head" href="{{ route('productosDestacados') }}">
                                            <img src="images/Destacados.jpeg" alt="...">
                                            <h3>Productos destacados</h3>
                                        </a>
                                        <div class="caption">
                                            <p>Productos destacados entre nuestros compradores</p>
                                            <p>
                                                <a href="{{ route('productosDestacados') }}"
                                                    class="btn btn-default btn-transparent" role="button">
                                                    <span>Ver más</span>
                                                </a>
                                            </p>
                                        </div> <!-- End of /.caption -->
                                    </div> <!-- End of /.thumbnail -->
                                </div> <!-- End of /.col-sm-6 col-md-4 -->
                                <div class="col-sm-6 col-md-4">
                                    <div class="thumbnail">
                                        <a class="catagotie-head" href="{{ route('productosDeTemporada') }}">
                                            <img src="images/Temporada.jpeg" alt="...">
                                            <h3>Artículos de temporada</h3>
                                        </a>
                                        <div class="caption">
                                            <p>Articulos de temporada pa la calor</p>
                                            <p>
                                                <a href="{{ route('productosDeTemporada') }}"
                                                    class="btn btn-default btn-transparent" role="button">
                                                    <span>Ver más</span>
                                                </a>
                                            </p>
                                        </div> <!-- End of /.caption -->
                                    </div> <!-- End of /.thumbnail -->
                                </div> <!-- End of /.col-sm-6 col-md-4 -->
                                <div class="col-sm-6 col-md-4">
                                    <div class="thumbnail">
                                        <a class="catagotie-head" href="{{ route('envioADomicilio') }}">
                                            <img src="images/Domicilio.png" alt="...">
                                            <h3>Envio a domicilio</h3>
                                        </a>
                                        <div class="caption">
                                            <p>Contamos con envio a domicilio :D</p>
                                            <p>
                                                <a href="{{ route('envioADomicilio') }}"
                                                    class="btn btn-default btn-transparent" role="button">
                                                    <span>Ver más</span>
                                                </a>
                                            </p>
                                        </div> <!-- End of /.caption -->
                                    </div> <!-- End of /.thumbnail -->
                                </div> <!-- End of /.col-sm-6 col-md-4 -->
                            </div> <!-- End of /.row -->
                        </div> <!-- End of /.block -->
                    </div> <!-- End of /.col-md-12 -->
                </div> <!-- End of /.row -->
            </div> <!-- End of /.container -->
        </section> <!-- End of Section -->




        <!-- PRODUCTS Start
>>>>>>> Stashed changes
    ================================================== -->

        <section id="products">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="products-heading">
                            <h2>Aprovecha estas ofertas</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="products">
                            <a href="single-product.html">
                                <img src="{{$medi1->imagen}}" alt="">
                            </a>
                            <a href="single-product.html">
                                <h4>{{$medi1->nombre}}</h4>
                            </a>
                            <p class="price"> $69.99</p>
                            <a class="view-link shutter" href="#">
                                <i class=""></i>Agregar al carrito</a>
                        </div> <!-- End of /.products -->
                    </div> <!-- End of /.col-md-3 -->
                    <div class="col-md-3">
                        <div class="products">
                            <a href="single-product.html">
                                <img src="{{$medi2->imagen}}" alt="">
                            </a>
                            <a href="single-product.html">
                                <h4>{{$medi2->nombre}}</h4>
                            </a>
                            <p class="price"> $69.99</p>
                            <a class="view-link shutter" href="#">
                                <i class=""></i>Agregar al carrito</a>
                        </div> <!-- End of /.products -->
                    </div> <!-- End Of Col-md-3 -->
                    <div class="col-md-3">
                        <div class="products">
                            <a href="single-product.html">
                                <img src="{{$medi3->imagen}}" alt="">
                            </a>
                            <a href="single-product.html">
                                <h4>{{$medi3->nombre}}</h4>
                            </a>
                            <p class="price"> $69.99</p>
                            <a class="view-link shutter" href="#">
                                <i class=""></i>Agregar al carrito</a>
                        </div> <!-- End of /.products -->
                    </div> <!-- End Of /.Col-md-3 -->
                    <div class="col-md-3">
                        <div class="products">
                            <a href="single-product.html">
                                <img src="{{$medi4->imagen}}" alt="">
                            </a>
                            <a href="single-product.html">
                                <h4>{{$medi4->nombre}}</h4>
                            </a>
                            <p class="price"> $69.99</p>
                            <a class="view-link shutter" href="#">
                                <i class=""></i>Agregar al carrito</a>
                        </div> <!-- End of /.products -->
                    </div> <!-- End Of /.Col-md-3 -->
                    <div class="col-md-3">
                        <div class="products">
                            <a href="single-product.html">
                                <img src="{{$medi5->imagen}}" alt="">
                            </a>
                            <a href="single-product.html">
                                <h4>{{$medi5->nombre}}</h4>
                            </a>
                            <p class="price"> $69.99</p>
                            <a class="view-link shutter" href="#">
                                <i class=""></i>Agregar al carrito</a>
                        </div> <!-- End of /.products -->
                    </div> <!-- End Of /.Col-md-3 -->
                    <div class="col-md-3">
                        <div class="products">
                            <a href="single-product.html">
                                <img src="{{$medi6->imagen}}" alt="">
                            </a>
                            <a href="single-product.html">
                                <h4>{{$medi6->nombre}}</h4>
                            </a>
                            <p class="price"> $69.99</p>
                            <a class="view-link shutter" href="#">
                                <i class=""></i>Agregar al carrito</a>
                        </div> <!-- End of /.products -->
                    </div> <!-- End Of /.Col-md-3 -->
                    <div class="col-md-3">
                        <div class="products">
                            <a href="single-product.html">
                                <img src="{{$medi7->imagen}}" alt="">
                            </a>
                            <a href="single-product.html">
                                <h4>{{$medi7->nombre}}</h4>
                            </a>
                            <p class="price"> $69.99</p>
                            <a class="view-link shutter" href="#">
                                <i class=""></i>Agregar al carrito</a>
                        </div> <!-- End of /.products -->
                    </div> <!-- End Of /.Col-md-3 -->
                    <div class="col-md-3">
                        <div class="products">
                            <a href="single-product.html">
                                <img src="{{$medi8->imagen}}" alt="">
                            </a>
                            <a href="single-product.html">
                                <h4>{{$medi8->nombre}}</h4>
                            </a>
                            <p class="price"> $69.99</p>
                            <div>
                                <a class="view-link shutter" href="#">
                                    <i class=""></i>Agregar al carrito</a>
                            </div>
                        </div> <!-- End of /.products -->
                    </div> <!-- End Of /.Col-md-3 -->
                </div> <!-- End of /.row -->
            </div> <!-- End of /.container -->
        </section> <!-- End of Section -->




        <!-- CALL TO ACTION Start
    ================================================== -->

        <section id="call-to-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <div class="block-heading">
                                <h2>Los mejores productos</h2>
                            </div>
                        </div> <!-- End of /.block -->
                        <div id="owl-example" class="owl-carousel">
                            <div> <img src="images/company-1.png" alt=""></div>
                            <div> <img src="images/company-2.png" alt=""></div>
                            <div> <img src="images/company-3.png" alt=""></div>
                            <div> <img src="images/company-4.png" alt=""></div>
                            <div> <img src="images/company-5.png" alt=""></div>
                            <div> <img src="images/company-6.png" alt=""></div>
                            <div> <img src="images/company-8.png" alt=""></div>
                            <div> <img src="images/company-9.png" alt=""></div>
                        </div> <!-- End of /.Owl-Slider -->
                    </div> <!-- End of /.col-md-12 -->
                </div> <!-- End Of /.Row -->
            </div> <!-- End Of /.Container -->
        </section> <!-- End of Section -->





        <a id="back-top" href="#"></a>
</body>



@endsection
@section('js')
    <script src="assets/js/datatables.min.js"></script>
    <script src="assets/js/script.js"></script>
@endsection

