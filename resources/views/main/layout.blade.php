<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Travel to Uzbekistan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Travel to Uzbekistan"/>
    <meta name="keywords" content="Travel to Uzbekistan, travel, uzbekistan, tour"/>
    <meta name="author" content="@adizbek"/>

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="Travel to Uzbekistan"/>
    <meta property="og:image" content="{{ url("/images/uzb-1.jpg")}} "/>
    <meta property="og:url" content="{{url("/images/uzb-1.jpg")}}"/>
    <meta property="og:site_name" content="Travel to Uzbekistan"/>
    <meta property="og:description" content="Travel to Uzbekistan"/>
    <meta name="twitter:title" content="Travel to Uzbekistan"/>
    <meta name="twitter:image" content="{{url("/images/uzb-1.jpg")}}"/>
    <meta name="twitter:url" content="{{url("/images/uzb-1.jpg")}}"/>
    {{--<meta name="twitter:card" content=""/>--}}

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="/css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="/css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="/css/bootstrap.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="/css/magnific-popup.css">

    <!-- Flexslider  -->
    <link rel="stylesheet" href="/css/flexslider.css">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">

    <!-- Date Picker -->
    <link rel="stylesheet" href="/css/bootstrap-datepicker.css">
    <!-- Flaticons  -->
    <link rel="stylesheet" href="/fonts/flaticon/font/flaticon.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="/css/style.css">

    <!-- Modernizr JS -->
    <script src="/js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="/js/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<div class="colorlib-loader"></div>

<div id="page">
    <nav class="colorlib-nav" role="navigation">
        <div class="top-menu">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-2">
                        <div id="colorlib-logo"><a href="/">Uzbekistan</a></div>
                    </div>
                    <div class="col-xs-10 text-right menu-1">
                        <ul>
                            <li @yield('nav.main')><a href="/">Главная страница</a></li>
                            <li @yield('nav.city') class="has-dropdown">
                                <a href="#">Города</a>
                                <ul class="dropdown">
                                    @foreach($cities as $city)
                                        <li><a href="#">{{$city->name}}</a></li>
                                    @endforeach
            </ul>
        </li>
        <li @yield('nav.hotels')><a href="
    /hotels">Отели</a></li>
    <li @yield('nav.monuments')><a href="/monuments">Памятники</a></li>
    <li @yield('nav.news')><a href="/news">Новости</a></li>
    <li @yield('nav.contacts')><a href="/contact">Контакт</a></li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </nav>

    @yield('content')

    <div id="colorlib-subscribe" style="background-image: url(/images/uzb-13.jpg);"
         data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                </div>
            </div>
        </div>
    </div>


    <footer id="colorlib-footer" role="contentinfo">
        <div class="container">
            <div class="row row-pb-md">
                <div class="col-md-3 colorlib-widget">
                    <h4>Travel to Uzbekistan</h4>
                    <p>Special for <a href="http://vci.venkon.uz">vci.venkon.uz</a></p>
                    <p>
                    <ul class="colorlib-social-icons">
                        <li><a href="https://t.me/Adizbek"><i class="icon-telegram"></i></a></li>
                        <li><a href="https://www.facebook.com/adizbek98"><i class="icon-facebook"></i></a></li>
                    </ul>
                    </p>
                </div>
                <div class="col-md-3 colorlib-widget">
                    <h4>Отели</h4>
                    <p>
                    <ul class="colorlib-footer-links">
                        @foreach($fHotels as $h)
                            <li><a href="{{route('hotel.view', ['id' => $h->id])}}">{{$h->name}}</a></li>
                        @endforeach
                    </ul>
                    </p>
                </div>
                <div class="col-md-3 colorlib-widget">
                    <h4>Памятники</h4>
                    <p>
                    <ul class="colorlib-footer-links">
                        @foreach($fMonuments as $h)
                            <li><a href="{{route('monument.view', ['id' => $h->id])}}">{{$h->name}}</a></li>
                        @endforeach
                    </ul>
                    </p>
                </div>
                <div class="col-md-3">
                    <h4>Новости</h4>
                    <ul class="colorlib-footer-links">
                        @foreach($fNews as $h)
                            <li><a href="{{route('news.view', ['id' => $h->id])}}">{{$h->title}}</a></li>
                        @endforeach
                    </ul>
                </div>

            </div>

        </div>
    </footer>
    </div>


    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
    </div>

    <!-- jQuery -->
    <script src="/js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="/js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="/js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="/js/jquery.waypoints.min.js"></script>
    <!-- Flexslider -->
    <script src="/js/jquery.flexslider-min.js"></script>
    <!-- Owl carousel -->
    <script src="/js/owl.carousel.min.js"></script>
    <!-- Magnific Popup -->
    <script src="/js/jquery.magnific-popup.min.js"></script>
    <script src="/js/magnific-popup-options.js"></script>
    <!-- Date Picker -->
    <script src="/js/bootstrap-datepicker.js"></script>
    <!-- Stellar Parallax -->
    <script src="/js/jquery.stellar.min.js"></script>

    <!-- Main -->
    <script src="/js/main.js"></script>

    </body>
</html>

