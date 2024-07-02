@extends('frontend.layout')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Sergey Pozhilov (GetTemplate.com)">

        <title>Left Sidebar | Initio - Free, multipurpose html5 template by GetTemplate</title>

        <link rel="shortcut icon" href="assets/images/gt_favicon.png">

        <!-- Bootstrap -->
        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.no-icons.min.css" rel="stylesheet">
        <!-- Icon font -->
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <!-- Fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Alice|Open+Sans:400,300,700">
        <!-- Custom styles -->
        <link rel="stylesheet" href="assets/css/styles.css">

        <!--[if lt IE 9]> <script src="assets/js/html5shiv.js"></script> <![endif]-->
    </head>

    <body>


        <main id="main">

            <div class="container" dir="rtl">

                <div class="row topspace">

                    <div class="container-fluid mt-5">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="carousel slide" data-ride="carousel" id="carousel-1">
                                    <div class="carousel-inner" role="listbox">

                                        <div><a class="carousel-control-prev" href="#carousel-1" role="button"
                                                data-slide="prev"><span class="carousel-control-prev-icon"></span><span
                                                    class="sr-only">Previous</span></a><a class="carousel-control-next"
                                                href="#carousel-1" role="button" data-slide="next"><span
                                                    class="carousel-control-next-icon"></span><span
                                                    class="sr-only">Next</span></a></div>
                                        <ol class="carousel-indicators">
                                            <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                                            <li data-target="#carousel-1" data-slide-to="1"></li>
                                            <li data-target="#carousel-1" data-slide-to="2"></li>
                                        </ol>
                                    </div>
                                    <div class="carousel-item active">
                                        <img class="img-thumbnail w-100 d-block"
                                            src="{{ asset('storage/product') . '/' . $product->image }}" alt="Slide Image"
                                            loading="lazy">
                                    </div>


                                </div>
                            </div>
                            <div class="col-md-7">
                                <h4>{{ $product->name }}</h4>
                                <div class="price">
                                    <span class="mr-2"><i
                                            class="fa fa-rupee text-success"></i>&nbsp;{{ $product->price }}</span>
                                    <span class="mr-2 cut">{{ $product->category->name }}</span>
                                    <span class="text-success">25% OFF</span>
                                </div>
                                <div class="d-flex flex-row">
                                    <div class="icons mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star-half-o"></i><i
                                            class="fa fa-star-o"></i></div><span>1200 ratings &amp; 564 reviews</span>
                                </div>
                                <div class="d-flex align-items-center offers"><i class="fa fa-check-square-o mt-1"></i><span
                                        class="ml-1 font-weight-bold">Bank Offers</span><span class="ml-1">20% Instant
                                        Discount on pay with&nbsp;&nbsp;google wallet<br></span></div>
                                <div class="d-flex align-items-center mt-5 delivery"><i class="fa fa-map-marker"></i><span
                                        class="ml-2">Delivery by 23 Jul, Tuesday<br></span><span
                                        class="ml-2 mr-2">|<br></span><span class="ml-2 mr-2 text-success">FREE<br></span>
                                </div>
                                <hr>
                                <div class="d-flex align-items-center mt-2"> <label class="radio"> <input type="radio"
                                            name="ram" value="128GB" checked> <span>128 Page</span> </label> </div>

                                <p dir="rtl">{{ $product->description }}</p>
                                <div class="mt-3"><button class="btn btn-dark mr-2" type="button">ADD TO
                                        CART</button>
                                        <a href="{{ url('/formproduct')."/".$product->id }}" class="btn btn-success" type="button">BUY NOW</a></div>
                            </div>

                        </div>
                    </div>
        </main>




        <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="assets/js/template.js"></script>
    </body>

    </html>
@endsection
