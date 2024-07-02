@extends('frontend.layout')
@section('css')
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/styleshowproduct.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font- awesome.min.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.no-icons.min.css" rel="stylesheet">
@endsection
@section('script')
    <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="assets/js/template.js"></script>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <!-- product -->
            @foreach ($products as $product)
                <div class="col-xs-12 col-md-6 bootstrap snippets bootdeys">

                    <div class="product-content product-wrap clearfix">
                        <div class="row">
                            <div class="col-md-5 col-sm-12 col-xs-12">
                                <div class="product-image">
                                    <img src="/assets/images/{{ $product['image'] }}" alt="194x228" class="img-responsive">
                                    <span class="tag2 hot">
                                        HOT
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-12 col-xs-12">
                                <div class="product-deatil">
                                    <h5 class="name">
                                        <a href="#">
                                            {{ $product['name '] }}<span>{{ $product['category'] }}</span>
                                        </a>
                                    </h5>
                                    <p class="price-container">
                                        <span> {{ $product['price'] }}</span>
                                    </p>
                                    <span class="tag1"></span>
                                </div>
                                <div class="description">
                                    <p> {{ $product['description'] }}</p>
                                </div>
                                <div class="product-info smart-form">
                                    <div class="row">
                                        {{-- <div class="col-md-6 col-sm-6 col-xs-6">
                                            <a href="javascript:void(0);" class="btn btn-success">Add to cart</a>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <a href="javascript:void(0);" class="btn btn-success">See Details</a> --}}

                                        <div class="mt-3"><button class="btn btn-dark mr-2" type="button">ADD TO
                                                CART</button><a href="{{ url('/formproduct').'/'.$product['id'] }}" class="btn btn-success" type="button">BUY NOW</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- end product -->
@endsection
