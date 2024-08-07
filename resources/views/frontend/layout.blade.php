<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Sergey Pozhilov (GetTemplate.com)">

    <title>Initio - Free, multipurpose html5 template by GetTemplate</title>

    <link rel="shortcut icon" href="assets/images/gt_favicon.png">

    <!-- Bootstrap -->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.no-icons.min.css" rel="stylesheet">
    <!-- Icons -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <!-- Fonts -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Alice|Open+Sans:400,300,700">
    <!-- Custom styles -->
    <link rel="stylesheet" href="{{ asset('./assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('./assets/css/contactpage.css') }}">
    <link rel="stylesheet" href="{{ asset('./assets/css/comment.css') }}">
    <link rel="stylesheet" href="{{ asset('./assets/css/conactuspage.css') }}">
    <link rel="stylesheet" href="{{ asset('./assets/css/slider.css') }}">
    
    @yield('css')
 <script src="assets/js/html5shiv.js"></script>
</head>

<body class="home" style="background-color: #c690536b">
    <header id="header">

        <div id="head" class="parallax" parallax-speed="2">
            <h1 id="logo" class="text-center">
                <img class="img-circle" src="assets/images/moi7.png" alt="">
                <span class="title">Welcome to the El fassi Libary</span>

            </h1>
        </div>
        <nav class="navbar navbar-default navbar-sticky">
            <div class="container-fluid">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                    </button>
                </div>

                <div class="navbar-collapse collapse">

                    <ul class="nav navbar-nav">
                        <li class="active"><a href="{{ url('/home') }}">Home</a></li>
                        <li><a href="{{ url('/about') }}">About</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">More Pages <b
                                    class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ url('/sidebar-left') }}">Left Sidebar</a></li>
                                <li><a href="{{ url('/sidebar-right') }}">Right Sidebar</a></li>
                                <li><a href="{{ url('/single') }}">Blog Post</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ url('/blog') }}">Blog</a></li>
                    </ul>

                </div><!--/.nav-collapse -->
            </div>
        </nav>
    </header>

    @yield('content')

    <footer id="footer" class="topspace">
        <div class="container">
            <div class="row">
                <div class="col-md-3 widget">
                    <h3 class="widget-title">Contact</h3>
                    <div class="widget-body">
                        <p>+234 23 9873237<br>
                            <a href="mailto:#">some.email@somewhere.com</a><br>
                            <br>
                            234 Hidden Pond Road, Ashland City, TN 37015
                        </p>
                    </div>
                </div>

                <div class="col-md-3 widget">
                    <h3 class="widget-title">Follow me</h3>
                    <div class="widget-body">
                        <p class="follow-me-icons">
                            <a href=""><i class="fa fa-twitter fa-2"></i></a>
                            <a href=""><i class="fa fa-dribbble fa-2"></i></a>
                            <a href=""><i class="fa fa-github fa-2"></i></a>
                            <a href=""><i class="fa fa-facebook fa-2"></i></a>
                        </p>
                    </div>
                </div>

                <div class="col-md-3 widget">
                    <h3 class="widget-title">Text widget</h3>
                    <div class="widget-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, nihil natus explicabo ipsum
                            quia iste aliquid repellat eveniet velit ipsa sunt libero sed aperiam id soluta officia
                            asperiores adipisci maxime!</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, nihil natus explicabo ipsum
                            quia iste aliquid repellat eveniet velit ipsa sunt libero sed aperiam id soluta officia
                            asperiores adipisci maxime!</p>
                    </div>
                </div>

                <div class="col-md-3 widget">
                    <h3 class="widget-title">Form widget</h3>
                    <div class="widget-body">
                        <p>+234 23 9873237<br>
                            <a href="mailto:#">some.email@somewhere.com</a><br>
                            <br>
                            234 Hidden Pond Road, Ashland City, TN 37015
                        </p>
                    </div>
                </div>

            </div> <!-- /row of widgets -->
        </div>
    </footer>

    <footer id="underfooter">
        <div class="container">
            <div class="row">

                <div class="col-md-6 widget">
                    <div class="widget-body">
                        <p>234 Hidden Pond Road, Ashland City, TN 37015 </p>
                    </div>
                </div>

                <div class="col-md-6 widget">
                    <div class="widget-body">
                        <p class="text-right">
                            Copyright &copy; 2014, Your awesome name here<br>
                            Design: <a href="http://www.gettemplate.com" rel="designer">Initio by GetTemplate</a> </p>
                    </div>
                </div>

            </div> <!-- /row of widgets -->
        </div>
    </footer>

    @yield('script')
</body>

</html>
