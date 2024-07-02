@extends('frontend.layout')
@section('css')
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
@endsection
@section('script')
    <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="assets/js/template.js"></script>
    <script src="{{ asset('./script.js/slider.js') }}"></script>
@endsection
@section('content')
    <main id="main">

        <div class="container" style="padding-top:5%; margin-bottom:5%">

            {{-- <div class="row section topspace">
                <div class="col-md-12">
                    <p class="lead text-center text-muted">Let me tell you something my friend. hope is a dangerous
                        thing. hope can drive a man insane. you <a href="{{ url('/about') }}">measure</a> yourself by
                        the people who measure themselves by you. it only took me <a
                            href="{{ url('/sidebar-right') }}">six days</a>. </p>

                </div> --}}
            <section class="testimonials" id="gobottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 mb-3 wow bounceInUp" data-wow-duration="1.4s">
                            <div class="big-img">
                                <img src="assets/images/7.jpg" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="inner-section wow fadeInUp">
                                <h5>مرحبًا بكم في
                                    <span class="bg-main">مكتبتنا الإلكترونية</span>
                                </h5>
                                <h5>ⵎⵔⵖⴰⴱⴰ ⴱⵓ ⵢⵉⵍ ⵎⵉⴽⵟⵉⴱⵏⴰ ⴳ
                                    <span class="bg-main"> ⴽⵍⴰⵢⵜ ⵉⵏⵍⵓⵙⴻⴽⴻⵏ</span>
                                </h5>
                                <h5>Welcome to our
                                    <span class="bg-main">online bookstore!</span>
                                </h5>
                                <br>
                                <p class="text-justify">We are delighted to welcome you to our site, where you will find a
                                    diverse collection of books catering to all interests. Our selection includes religious,
                                    historical, and romantic books, as well as scientific works, literary pieces, children's
                                    books, and self-development guides.

                                    Enjoy browsing our carefully curated library. Thank you for visiting, and we wish you a
                                    pleasant and enriching experience..</p>

                                <div class="linear-grid">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-3 mb-2 wow bounceInUp" data-wow-duration="1.4s">
                                            <img src="assets/images/44.jpg" class="img-thumbnail">
                                        </div>
                                        <div class=" col-sm-6 col-md-3 mb-2 wow bounceInUp" data-wow-duration="1.4s">
                                            <img src="assets/images/2.jpg" class="img-thumbnail">
                                        </div>
                                        <div class="col-sm-4 col-md-3 mb-2 wow bounceInUp" data-wow-duration="1.4s">
                                            <img src="assets/images/55.jpg" class="img-thumbnail">
                                        </div>
                                        <div class="col-sm-6 col-md-3 mb-2 wow bounceInUp" data-wow-duration="1.4s">
                                            <img src="assets/images/tt.jpg" class="img-thumbnail">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div> <!-- / section -->

       

        <div class="row section featured topspace">
            <h2 class="section-title"><span>Categories</span></h2>
            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
            <div class="container">
                <div class="shop-default shop-cards shop-tech">
                    <div class="row">
                        @foreach ($categories as $category)
                            <div class="col-md-4">
                                <div class="block product no-border z-depth-2-top z-depth-2--hover">
                                    <div class="block-image">
                                        <a href="#">
                                            <img src="{{ asset('storage/category') . '/' . $category->image }}"
                                                style="object-fit: cover;" class="img-center">
                                        </a>
                                        <span
                                            class="product-ribbon product-ribbon-right product-ribbon--style-1 bg-blue text-uppercase">New</span>
                                    </div>
                                    <div class="block-body text-center">
                                        <h3 class="heading heading-5 strong-600 text-capitalize">
                                            <p>
                                                {{ $category['name'] }}
                                            </p>
                                        </h3>

                                        <div class="product-colors mt-2">

                                        </div>
                                        <div class="product-buttons mt-4">
                                            <div class="row align-items-center justify-content-center">


                                                <div class="">
                                                    <a href="/showproduct/{{ $category['id'] }}">
                                                        <button type="button"
                                                            class="btn btn-block btn-primary btn-circle btn-icon-left ">
                                                            Show Products
                                                        </button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- / section -->
                        @endforeach
                    </div>
                    <div class="row section recentworks topspace">

                        <h2 class="section-title"><span>Products</span></h2>

                        <div class="thumbnails recentworks row">

                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                <a class="thumbnail" href="{{ url('/product-details/12') }}">
                                    <span class="img">
                                        <img src="assets/images/ppl.webp" alt="">
                                        <span class="cover"><span class="more">See details &rarr;</span></span>
                                    </span>
                                    <span class="title">QATAR: FIFA WORLD CUP 2022™ </span>
                                </a>
                                <span class="details"><a href="">Web design</a> | <a href="">Wordpress</a>
                                    |
                                    <a href="">Logotype</a></span>
                                <h4></h4>
                                <p></p>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                <a class="thumbnail" href="{{ url('/product-details/11') }}">
                                    <span class="img">
                                        <img src="assets/images/the.webp" alt="">
                                        <span class="cover"><span class="more">See details &rarr;</span></span>
                                    </span>
                                    <span class="title">THE HOBBIT</span>
                                </a>
                                <span class="details"><a href="">Web design</a> | <a
                                        href="">Wordpress</a></span>
                                <h4></h4>
                                <p></p>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                <a class="thumbnail" href="{{ url('/product-details/13') }}">
                                    <span class="img">
                                        <img src="assets/images/never.webp" alt="">
                                        <span class="cover"><span class="more">See details &rarr;</span></span>
                                    </span>
                                    <span class="title">NEVERWHERE</span>
                                </a>
                                <span class="details"><a href="">Web design</a> | <a
                                        href="">Logotype</a></span>
                                <h4></h4>
                                <p></p>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                <a class="thumbnail" href="{{ url('/product-details/14') }}">
                                    <span class="img">
                                        <img src="assets/images/pullman.webp" alt="">
                                        <span class="cover"><span class="more">See details &rarr;</span></span>
                                    </span>
                                    <span class="title">His Dark Materials</span>
                                </a>
                                <span class="details">Web design</a> |
                                    Wordpress</span>
                                <h4></h4>
                                <p></p>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                <a class="thumbnail" href="{{ url('/product-details/15') }}">
                                    <span class="img">
                                        <img src="assets/images/far.webp" alt="">
                                        <span class="cover"><span class="more">See details &rarr;</span></span>
                                    </span>
                                    <span class="title"> The Tombs of Atuan</span>
                                </a>
                                <span class="details"><a href="">Web design</a> | <a
                                        href="">Logotype</a></span>
                                <h4></h4>
                                <p></p>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                <a class="thumbnail" href="{{ url('/product-details/16') }}">
                                    <span class="img">
                                        <img src="assets/images/good.webp" alt="">
                                        <span class="cover"><span class="more">See details &rarr;</span></span>
                                    </span>
                                    <span class="title">GOOD OMENS </span>
                                </a>
                                <span class="details"><a href="">Web design</a> | <a
                                        href="">Logotype</a></span>
                                <h4></h4>
                                <p></p>
                            </div>
                        </div>

                    </div> <!-- /section -->

                </div> <!-- /container -->

                {{-- section comments --}}
                <section class="t-bq-section" id="jasper">
                    <h2 class="section-title"><span>What Clients Say</span></h2>
                    <div class="team-boxed">
                        <div class="container">
                            <div class="row people">
                                <div class="col-md-6 col-lg-4 item">
                                    <div class="box"><img class="rounded-circle" src="assets/images/cappe.png">
                                        <h3 class="name">Ilyas Elfassi</h3>
                                        <label aria-label="1 star" class="rating__label" for="rating-1"><i
                                                class="rating__icon rating__icon--star fa fa-star"></i></label>
                                        <label aria-label="1 star" class="rating__label" for="rating-1"><i
                                                class="rating__icon rating__icon--star fa fa-star"></i></label>
                                        <label aria-label="1 star" class="rating__label" for="rating-1"><i
                                                class="rating__icon rating__icon--star fa fa-star"></i></label>
                                        <label aria-label="1 star" class="rating__label" for="rating-1"><i
                                                class="rating__icon rating__icon--star fa fa-star"></i></label>
                                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus
                                            lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, et
                                            interdum justo suscipit id. Etiam dictum feugiat tellus, a semper massa. </p>

                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 item">
                                    <div class="box"><img class="rounded-circle" src="assets/images/ca.png">
                                        <h3 class="name">Naciri Ayoub</h3>
                                        <label aria-label="1 star" class="rating__label" for="rating-1"><i
                                                class="rating__icon rating__icon--star fa fa-star"></i></label>
                                        <label aria-label="1 star" class="rating__label" for="rating-1"><i
                                                class="rating__icon rating__icon--star fa fa-star"></i></label>
                                        <label aria-label="1 star" class="rating__label" for="rating-1"><i
                                                class="rating__icon rating__icon--star fa fa-star"></i></label>
                                        <label aria-label="1 star" class="rating__label" for="rating-1"><i
                                                class="rating__icon rating__icon--star fa fa-star"></i></label>
                                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus
                                            lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, et
                                            interdum justo suscipit id. Etiam dictum feugiat tellus, a semper massa. </p>

                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 item">
                                    <div class="box"><img class="rounded-circle" src="assets/images/cap.png">
                                        <h3 class="name">Anas Mouhib</h3>
                                        <label aria-label="1 star" class="rating__label" for="rating-1"><i
                                                class="rating__icon rating__icon--star fa fa-star"></i></label>
                                        <label aria-label="1 star" class="rating__label" for="rating-1"><i
                                                class="rating__icon rating__icon--star fa fa-star"></i></label>
                                        <label aria-label="1 star" class="rating__label" for="rating-1"><i
                                                class="rating__icon rating__icon--star fa fa-star"></i></label>
                                        <label aria-label="1 star" class="rating__label" for="rating-1"><i
                                                class="rating__icon rating__icon--star fa fa-star"></i></label>
                                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus
                                            lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, et
                                            interdum justo suscipit id. Etiam dictum feugiat tellus, a semper massa. </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>

                {{-- hadi section d contact --}}
                <section class="t-bq-section" id="jasper">
                    <h2 class="section-title"><span>Contact</span></h2>
                    <div class="container">
                        <div class="innerwrap">

                            {{-- <section class="section1 clearfix">
                                <div class="textcenter">
                                    <span class="shtext">Contact Us</span>
                                    <span class="seperator"></span>
                                </div>
                            </section> --}}

                            <section class="section2 clearfix">
                                <div class="column1 first">
                                    {{--  --}}
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3440.962716331553!2d-9.550893724640288!3d30.40879967474216!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdb3b62b243c1fab%3A0x1789e74eee2b384d!2sDakhla!5e0!3m2!1sfr!2sma!4v1719487257001!5m2!1sfr!2sma" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    {{--  --}}
                                    {{-- <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script> --}}
                                    {{-- <div class="sec2map" style='overflow:hidden;height:550px;width:100%;'>
                                        <div id='gmap_canvas' style='height:100%;width:100%;'></div>
                                        <div><small><a href="http://embedgooglemaps.com"> embed google maps </a></small>
                                        </div>
                                        <div><small><a href="http://freedirectorysubmissionsites.com/">free web
                                                    directories</a></small></div>
                                        <style>
                                            #gmap_canvas img {
                                                max-width: none !important;
                                                background: none !important
                                            }
                                        </style>
                                    </div>
                                    <script type='text/javascript'>
                                        function init_map() {
                                            var myOptions = {
                                                zoom: 14,
                                                center: new google.maps.LatLng(19.075314480255834, 72.88153973865361),
                                                mapTypeId: google.maps.MapTypeId.ROADMAP
                                            };
                                            map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
                                            marker = new google.maps.Marker({
                                                map: map,
                                                position: new google.maps.LatLng(19.075314480255834, 72.88153973865361)
                                            });
                                            infowindow = new google.maps.InfoWindow({
                                                content: '<strong>My Location</strong><br>mumbai<br>'
                                            });
                                            google.maps.event.addListener(marker, 'click', function() {
                                                infowindow.open(map, marker);
                                            });
                                            infowindow.open(map, marker);
                                        }
                                        google.maps.event.addDomListener(window, 'load', init_map);
                                    </script> --}}
                                </div>
                                <div class="column2 last">
                                    <div class="sec2innercont">
                                        <div class="sec2addr">
                                            <p>45 BC, a Latin professor at Hampden-Sydney College in Virginia</p>
                                            <p><span class="collig">Phone :</span> +91 976885083</p>
                                            <p><span class="collig">Email :</span> vivek.mengu016@gmail.com</p>
                                            <p><span class="collig">Fax :</span> +91 9768850839</p>
                                        </div>
                                    </div>
                                    <div class="sec2contactform">
                                        <h3 class="sec2frmtitle">Want to Know More.. Drop Us a Mail</h3>
                                        <form action="">
                                            <div class="clearfix">
                                                <input class="col2 first" type="text" placeholder="FirstName">
                                                <input class="col2 last" type="text" placeholder="LastName">
                                            </div>
                                            <div class="clearfix">
                                                <input class="col2 first" type="Email" placeholder="Email">
                                                <input class="col2 last" type="text" placeholder="Contact Number">
                                            </div>
                                            <div class="clearfix">
                                                <textarea name="textarea" id="" cols="30" rows="7">Your message here...</textarea>
                                            </div>
                                            <div class="clearfix"><input type="submit" value="Send"></div>
                                        </form>
                                    </div>

                                </div>
                            </section>
                </section>

            </div>
        </div>

        {{-- end section d contact --}}


        <div class="row section clients topspace">
            <h2 class="section-title"><span>Clients</span></h2>
            <div class="col-lg-12">
                <p>
                    <img src="assets/images/sample_clients.png" alt="">
                </p>
            </div>
        </div> <!-- /section -->


    </main>
@endsection
