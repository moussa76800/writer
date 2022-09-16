<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('title')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/favicon.ico')}}">
        <!-- Place favicon.ico in the root directory -->
        <!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Poppins:400,700,600,500,300' rel='stylesheet' type='text/css'>

		<!-- all css here -->
		<!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
		<!-- animate css -->
        <link rel="stylesheet" href="{{asset('css/animate.css')}}">
		<!-- jquery-ui.min css -->
        <link rel="stylesheet" href="{{asset('css/jquery-ui.min.css')}}">
		<!-- meanmenu css -->
        <link rel="stylesheet" href="{{asset('css/meanmenu.min.css')}}">
		<!-- Font-Awesome css -->
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
		<!-- pe-icon-7-stroke css -->
        <link rel="stylesheet" href="{{asset('css/pe-icon-7-stroke.css')}}">
		<!-- Flaticon css -->
        <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
		<!-- venobox css -->
        <link rel="stylesheet" href="{{asset('css/venobox/venobox.css')}}" type="text/css" media="screen" />
		<!-- nivo slider css -->
		<link rel="stylesheet" href="{{asset('lib/css/nivo-slider.css')}}" type="text/css" />
		<link rel="stylesheet" href="{{asset('lib/css/preview.css')}}" type="text/css" media="screen" />
		<!-- owl.carousel css -->
        <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
		<!-- style css -->
		<link rel="stylesheet" href="{{asset('css/style.css')}}">
		<!-- responsive css -->
        <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
		<!-- modernizr css -->
        <script src="{{asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>
    </head>
     <!--Header Area Start-->
     <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-6 col-xs-6">
                    <div class="header-logo">
                        <a href="index.html">
                            <img src="{{asset('img/logo1.png')}}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-1 col-sm-6 visible-sm  col-xs-6">
                    <div class="header-right">
                        <ul>
                            <li>
                                <a href="account.html"><i class="flaticon-people"></i></a>
                            </li>
                            <li class="shoping-cart">
                                <a href="#">
                                    <i class="flaticon-shop"></i>
                                    <span>2</span>
                                </a>
                                <div class="add-to-cart-product">
                                    <div class="cart-product">
                                        <div class="cart-product-image">
                                            <a href="single-product.html">
                                                <img src="{{asset('img/shop/1.jpg')}}" alt="">
                                            </a>
                                        </div>
                                        <div class="cart-product-info">
                                            <p>
                                                <span>1</span>
                                                x
                                                <a href="single-product.html">East of eden</a>
                                            </p>
                                            <a href="single-product.html">S, Orange</a>
                                            <span class="cart-price">$ 140.00</span>
                                        </div>
                                        <div class="cart-product-remove">
                                            <i class="fa fa-times"></i>
                                        </div>
                                    </div>
                                    <div class="cart-product">
                                        <div class="cart-product-image">
                                            <a href="single-product.html">
                                                <img src="{{asset('img/shop/1.jpg')}}" alt="">
                                            </a>
                                        </div>
                                        <div class="cart-product-info">
                                            <p>
                                                <span>1</span>
                                                x
                                                <a href="single-product.html">East of eden</a>
                                            </p>
                                            <a href="single-product.html">S, Orange</a>
                                            <span class="cart-price">$ 140.00</span>
                                        </div>
                                        <div class="cart-product-remove">
                                            <i class="fa fa-times"></i>
                                        </div>
                                    </div>
                                    <div class="total-cart-price">
                                        <div class="cart-product-line fast-line">
                                            <span>Shipping</span>
                                            <span class="free-shiping">$10.50</span>
                                        </div>
                                        <div class="cart-product-line">
                                            <span>Total</span>
                                            <span class="total">$ 140.00</span>
                                        </div>
                                    </div>
                                    <div class="cart-checkout">
                                        <a href="checkout.html">
                                            Check out
                                            <i class="fa fa-chevron-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>                    
                <div class="col-md-9 col-sm-12 hidden-xs">
                    <div class="mainmenu text-center">
                        <nav>
                            <ul id="nav">
                                <li><a href="{{url('/')}}">HOME</a></li>
                                <li><a href="shop.html">FEATURED</a></li>
                                <li><a href="shop.html">REVIEW BOOK</a></li>
                                <li><a href="about.html">ABOUT AUTHOR</a></li>
                                <li><a href="#">pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{url('/about_us')}}">About Us</a></li>
                                        <li><a href="{{url('/cart')}}">Cart Page</a></li>
                                        <li><a href="{{url('/paiement')}}">Check Out</a></li>
                                        <li><a href="{{url('/contact')}}">Contact</a></li>
                                        <li><a href="{{url('/login')}}">Login</a></li>
                                        <li><a href="my-account.html">My Account</a></li>
                                        <li><a href="{{url('/shop')}}">Shopping Page</a></li>
                                        <li><a href="{{url('/singleProduct')}}">Un article</a></li>
                                        <li><a href="{{url('/wishlist')}}">Wishlist Page</a></li>
                                        <li><a href="404.html">404 Page</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">CONTACT</a></li>
                            </ul>
                        </nav>
                    </div>                        
                </div>
                <div class="col-md-1 hidden-sm">
                    <div class="header-right">
                        <ul>
                            <li>
                                <a href="account.html"><i class="flaticon-people"></i></a>
                            </li>
                            <li class="shoping-cart">
                                <a href="#">
                                    <i class="flaticon-shop"></i>
                                    <span>2</span>
                                </a>
                                <div class="add-to-cart-product">
                                    <div class="cart-product">
                                        <div class="cart-product-image">
                                            <a href="single-product.html">
                                                <img src="{{asset('img/shop/1.jpg')}}" alt="">
                                            </a>
                                        </div>
                                        <div class="cart-product-info">
                                            <p>
                                                <span>1</span>
                                                
                                                <a href="single-product.html">East of eden</a>
                                            </p>
                                            <a href="single-product.html">S, Orange</a>
                                            <span class="cart-price">$ 140.00</span>
                                        </div>
                                        <div class="cart-product-remove">
                                            <i class="fa fa-times"></i>
                                        </div>
                                    </div>
                                    <div class="cart-product">
                                        <div class="cart-product-image">
                                            <a href="single-product.html">
                                                <img src="{{asset('img/shop/1.jpg')}}" alt="">
                                            </a>
                                        </div>
                                        <div class="cart-product-info">
                                            <p>
                                                <span>1</span>
                                                x
                                                <a href="single-product.html">East of eden</a>
                                            </p>
                                            <a href="single-product.html">S, Orange</a>
                                            <span class="cart-price">$ 140.00</span>
                                        </div>
                                        <div class="cart-product-remove">
                                            <i class="fa fa-times"></i>
                                        </div>
                                    </div>
                                    <div class="total-cart-price">
                                        <div class="cart-product-line fast-line">
                                            <span>Shipping</span>
                                            <span class="free-shiping">$10.50</span>
                                        </div>
                                        <div class="cart-product-line">
                                            <span>Total</span>
                                            <span class="total">$ 140.00</span>
                                        </div>
                                    </div>
                                    <div class="cart-checkout">
                                        <a href="checkout.html">
                                            Check out
                                            <i class="fa fa-chevron-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>