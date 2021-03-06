@extends('layouts.layout')
@section('nombre')
    Ofertas
@endsection

<!Aparatado CSS>
    @section('css')
        <link href="assets/css/datatables.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/styles.css" rel="stylesheet" type="text/css" />
    @endsection
    @section('content')


        <section id="topic-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h1>EN OFERTA</h1>
                        <p>A Bunch Of Products</p>
                    </div> <!-- End of /.col-md-4 -->
                    <div class="col-md-8 hidden-xs">
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Home</a></li>
                            <li class="active">Shop</li>
                        </ol>
                    </div> <!-- End of /.col-md-8 -->
                </div> <!-- End of /.row -->
            </div> <!-- End of /.container -->
        </section> <!-- End of /#Topic-header -->



        <!-- PRODUCTS Start
        ================================================== -->

        <section id="shop">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="products-heading">
                            <h2>NEW PRODUCTS</h2>
                        </div> <!-- End of /.Products-heading -->
                        <div class="product-grid">
                            <ul>
                                <li>
                                    <div class="products">
                                        <a href="#">
                                            <img src="{{$medi1->imagen}}" alt="">
                                        </a>
                                        <a href="#">
                                            <h4>{{$medi1->nombre}}</h4>
                                        </a>
                                        <p class="price">From: ??69.99</p>
                                        <div>
                                            <a class="view-link shutter" href="#">
                                                <i class="fa fa-plus-circle"></i>Add To Cart</a>
                                        </div>
                                    </div> <!-- End of /.products -->
                                </li>
                                <li>
                                    <div class="products">
                                        <a href="#">
                                            <img src="{{$medi2->imagen}}" alt="">
                                        </a>
                                        <a href="#">
                                            <h4>{{$medi2->nombre}}</h4>
                                        </a>
                                        <p class="price">From: ??69.99</p>
                                        <div>
                                            <a class="view-link shutter" href="#">
                                                <i class="fa fa-plus-circle"></i>Add To Cart</a>
                                        </div>
                                    </div> <!-- End of /.products -->
                                </li>
                                <li>
                                    <div class="products">
                                        <a href="#">
                                            <img src="{{$medi3->imagen}}" alt="">
                                        </a>
                                        <a href="#">
                                            <h4>{{$medi3->nombre}}</h4>
                                        </a>
                                        <p class="price">From: ??69.99</p>
                                        <div>
                                            <a class="view-link shutter" href="#">
                                                <i class="fa fa-plus-circle"></i>Add To Cart</a>
                                        </div>
                                    </div> <!-- End of /.products -->
                                </li>
                                <li>
                                    <div class="products">
                                        <a href="#">
                                            <img src="{{$medi4->imagen}}" alt="">
                                        </a>
                                        <a href="#">
                                            <h4>{{$medi4->nombre}}</h4>
                                        </a>
                                        <p class="price">From: ??69.99</p>
                                        <div>
                                            <a class="view-link shutter" href="#">
                                                <i class="fa fa-plus-circle"></i>Add To Cart</a>
                                        </div>
                                    </div> <!-- End of /.products -->
                                </li>
                                <li>
                                    <div class="products">
                                        <a href="#">
                                            <img src="{{$medi5->imagen}}" alt="">
                                        </a>
                                        <a href="#">
                                            <h4>{{$medi5->nombre}}</h4>
                                        </a>
                                        <p class="price">From: ??69.99</p>
                                        <div>
                                            <a class="view-link shutter" href="#">
                                                <i class="fa fa-plus-circle"></i>Add To Cart</a>
                                        </div>
                                    </div> <!-- End of /.products -->
                                </li>
                                <li>
                                    <div class="products">
                                        <a href="#">
                                            <img src="{{$medi6->imagen}}" alt="">
                                        </a>
                                        <a href="#">
                                            <h4>{{$medi6->nombre}}</h4>
                                        </a>
                                        <p class="price">From: ??69.99</p>
                                        <div>
                                            <a class="view-link shutter" href="#">
                                                <i class="fa fa-plus-circle"></i>Add To Cart</a>
                                        </div>
                                    </div> <!-- End of /.products -->
                                </li>
                                <!--  ... -->
                            </ul>
                        </div> <!-- End of /.products-grid -->

                        <!-- Pagination -->

                        <div class="pagination-bottom">
                            <ul class="pagination">
                                <li class="disabled"><a href="#">&laquo;</a></li>
                                <li class="active"><a href="#">1 <span class="sr-only"></span></a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">??</a></li>
                            </ul> <!-- End of /.pagination -->
                        </div>
                    </div> <!-- End of /.col-md-9 -->
                    <div class="col-md-3">
                        <div class="blog-sidebar">
                            <div class="block">
                                <h4>Catagories</h4>
                                <div class="list-group">
                                    <a href="#" class="list-group-item">
                                        <i class="fa  fa-dot-circle-o"></i>
                                        Italian Foods
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <i class="fa  fa-dot-circle-o"></i>
                                        Traditional Food
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <i class="fa  fa-dot-circle-o"></i>
                                        Indian Food
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <i class="fa  fa-dot-circle-o"></i>
                                        Spanish Food
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <i class="fa  fa-dot-circle-o"></i>
                                        Thai FoodN
                                    </a>
                                </div>
                            </div>
                            <div class="block">
                                <img src="images/food-ad.png" alt="">
                            </div>
                            <div class="block">
                                <h4>OTRAS OFERTAS</h4>
                                <ul class="media-list">
                                    <li class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object" src="{{$medi7->imagen}}" alt="...">
                                        </a>
                                        <div class="media-body">
                                            <a href="" class="media-heading">{{$medi7->nombre}}
                                                <p></p>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object" src="{{$medi8->imagen}}" alt="...">
                                        </a>
                                        <div class="media-body">
                                            <a href="" class="media-heading">{{$medi8->nombre}}
                                                <p></p>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="block">
                                <h4>Food Tag</h4>
                                <div class="tag-link">
                                    <a href="">BALLET</a>
                                    <a href="">CHRISTMAS</a>
                                    <a href="">ELEGANCE</a>
                                    <a href="">ELEGANT</a>
                                    <a href="">SHOPPING</a>
                                    <a href="">SHOP</a>
                                </div>
                            </div>
                        </div> <!-- End of /.col-md-3 -->

                    </div> <!-- End of /.row -->
                </div> <!-- End of /.container -->
        </section> <!-- End of Section --

        <a id="back-top" href="#"></a>
        </body>

        @endsection
@section('js')
    <script src="assets/js/datatables.min.js"></script>
    <script src="assets/js/script.js"></script>
@endsection
