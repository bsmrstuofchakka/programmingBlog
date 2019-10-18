<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>LOGIN/REGISTER</title>
    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="{{asset('/blog/css/bootstrap.min.css')}}">
    <!-- Font Awesome Css -->
    <link rel="stylesheet" href="{{asset('/blog/css/font-awesome.min.css')}}">
    <!-- Owl Carousel Css -->
    <link rel="stylesheet" href="{{asset('/blog/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('/blog/css/owl.theme.default.min.css')}}">

    <!-- Animate -->
    <link rel="stylesheet" href="{{asset('/blog/css/animate.css')}}">
    <!-- Swiper Master Css -->
    <link rel="stylesheet" href="{{asset('/blog/vendors/swiper-master/css/swiper.min.css')}}">
    <!-- magnific-popup -->
    <link rel="stylesheet" href="{{asset('/blog/css/magnific-popup.css')}}">
    <!-- Slicknav Master -->
    <link rel="stylesheet" href="{{asset('/blog/vendors/slicknav-master/slicknav.min.css')}}">
    <!-- Site Style Css -->
    <link rel="stylesheet" href="{{asset('blog/style.css')}}">
    <link rel="stylesheet" href="{{asset('/blog/css/responsive.css')}}">
    <!-- Modernizr Js -->
    <script src="{{asset('/blog/vendors/modernizr-js/modernizr.js')}}"></script>
</head>

<body>
<header class="header">
    <div class="top-header bg-1 txt-clr-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-3 d-sm-block d-none">


                </div>
                <div class="col-lg-5 fw-3 fz-14 top-hdr-padding d-none d-lg-block">
                    <span class="top-bar-article-text"></span>
                </div>
                <div class="col-lg-5 col-md-9 col-sm-9 col-12 top-hdr-padding">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <span><i class="fa fa-envelope"></i></span> muradmd312@gmail.com
                        </li>
                        <li class="list-inline-item">
                            <span><i class="fa fa-mobile"></i></span> 01701310878
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-12">
                    <div class="barnd-logo text-center ptb-40">
                        <a href="{{asset('/blog/index.html')}}" class="logo">
                            <img src="/blog/images/logo_image/code3.png" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start sitemenu -->
    <div class="sitemenu" id="sticky-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-9 col-6 offset-lg-2">
                    <nav class="navbar-expand-lg navbar-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul id="menubar" class="navbar-nav">
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li><a href="#">Algorithm</a></li>
                                <li><a href="#">Data Structure</a></li>
                                <li><a href="#">About me</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col-lg-2 col-md-3 col-6 trvel-user">
                    <ul class="d-flex justify-content-end">
                        <li class="blog-src-btn">
                            <a href="#"><i class="fa fa-search"></i></a>
                            <ul  class="blog-secrch">
                                <li>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search your article...">
                                        <div class="input-group-append">
                                            <button class="btn" type="submit">SEARCH</button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="user-option">
                            <i class="fa fa-user"></i>
                            <ul>
                                <li><a href="{{url('login')}}"><i class="fa fa-sign-in"></i> Login</a></li>
                                <li><a href="{{url('register')}}"><i class="fa fa-pencil-square-o"></i> Register</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h5 class="fz-26 fw-5">Programming </h5>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb text-center d-inline-flex">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Programming</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>


<!--
    <div id="app">


        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    -- Collapsed Hamburger
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    -- Branding Image --
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
              --
                    -- Left Side Of Navbar

                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>


                    -- Right Side Of Navbar --
                    <ul class="nav navbar-nav navbar-right">
                        -- Authentication Links --
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>


    </div

     Scripts    -->


@yield('content')

<!-- ================ Start Footer Section ================ -->
<footer class="footer txt-clr-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <a href="#" class="logo">
                    <img src="/blog/images/logo_image/code6.png" alt="">
                </a>
                <p class="mt-45">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature.</p>
                <form class="subscribe-form mt-25">
                    <div class="form-group mb-0">
                        <input type="email" class="form-control email-input" placeholder="Enter your email">
                    </div>
                    <button type="submit" class="btn btn-primary subscribe-btn bg-1">subscribe</button>
                </form>
                <p class="fz-14 mt-30">© 2018 All Right Reserved By Programming</p>
            </div>
            <div class="col-lg-3 ftr-link">
                <div class="ftr-title pt-15 mb-35">
                    <h3>Quick Link</h3>
                </div>
                <ul>
                    <li><a href="#">About Me</a></li>
                    <li><a href="#">Dynamic Programming</a></li>
                    <li><a href="#">Beginner's Problem</a></li>
                    <li><a href="#">BFS</a></li>
                    <li><a href="#">DFS</a></li>
                    <li><a href="#">CPU Scheduling</a></li>
                    <li><a href="#">Online Judge</a></li>
                    <li><a href="#">Laravel</a></li>
                </ul>
            </div>
            <div class="col-lg-3">
                <div class="ftr-title pt-15 mb-35">
                    <h3>Twitter Feed</h3>
                </div>
                <ul class="twitter-link">
                    <li class="mb-15"><span class="mr-10"><i class="fa fa-twitter"></i></span><a href="#">https://twitter.com /envato/status/ 944202192013144064 https://twitter.com/envato/status/944202192013144064</a></li>
                    <li><span class="mr-10"><i class="fa fa-twitter"></i></span><a href="#">https://twitter.com /envato/status/ 944202192013144064 https://twitter.com/envato/status/944202192013144064</a></li>
                </ul>
            </div>
            <div class="col-lg-3">
                <div class="ftr-title pt-15 mb-35">
                    <h3>Contact Information</h3>
                </div>
                <ul class="ftr-contact">
                    <li><span>Location:</span> W Jackson Blvd, Chicago United States</li>
                    <li><span>Email:</span> exampleemail.com</li>
                    <li><span>Phone:</span> (123) 45678910</li>
                </ul>
                <div class="ftr-social">
                    <div class="ftr-title pt-15 mb-15">
                        <h3 class="fz-18">Social Prifile</h3>
                    </div>
                    <ul class="d-flex">
                        <li><a href="#" class="icon-fb"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="icon-twit"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="icon-glg"><i class="fa fa-google"></i></a></li>
                        <li><a href="#" class="icon-ldn"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#" class="icon-utb"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <a href="#" class="scrollup"><i class="fa fa-angle-up"></i></a>
</footer>

<!-- ================ Start Jquery Plugins ================ -->
<script src="/blog/js/jquery.min.js"></script>
<!-- Bootstrap Js -->
<script src="/blog/js/bootstrap.min.js"></script>
<!-- Owl Carousel Js -->
<script src="/blog/js/owl.carousel.min.js"></script>
<!-- Swiper Master Js -->
<script src="/blog/vendors/swiper-master/js/swiper.min.js"></script>
<!-- Slicknav Master -->
<script src="/blog/vendors/slicknav-master/jquery.slicknav.min.js"></script>
<!-- magnific popup -->
<script src="/blog/js/magnific-popup.min.js"></script>
<!-- counterup -->
<script src="/blog/vendors/counterup/waypoints.min.js"></script>
<script src="/blog/vendors/counterup/counterup.min.js"></script>
<!-- scroll up -->
<script src="/blog/js/scrollup.js"></script>
<!-- main js -->
<script src="/blog/js/main.js"></script>



</body>
</html>
