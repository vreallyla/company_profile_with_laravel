<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0,shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Title -->
    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('img/core-img/favicon.ico')}}">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{asset('style.css')}}">

    @stack('style')

</head>

<body>
<!-- Preloader -->
<div id="preloader">
    <div class="preload-content">
        <div id="dento-load"></div>
    </div>
</div>

<!-- ***** Header Area Start ***** -->
<header class="header-area">
    <!-- Top Header Area -->
    <div class="top-header-area">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <!-- Top Content -->
                <div class="col-6 col-md-9 col-lg-8">
                    <div class="top-header-content">
                        <a href="tel:{{isset($data['contact']->phone)?$data['contact']->phone:'#'}}"
                           data-toggle="tooltip" data-placement="bottom"
                           title="{{isset($data['contact']->phone)?$data['contact']->phone:'phone number unset'}}">
                            <i class="fa fa-phone"></i>
                            <span>{{isset($data['contact']->phone)?$data['contact']->phone:'phone number unset'}}</span>
                        </a>
                        <a href="tel:{{isset($data['contact']->email)?$data['contact']->email:'#'}}"
                           data-toggle="tooltip" data-placement="bottom"
                           title="{{isset($data['contact']->email)?$data['contact']->email:'the email unset'}}">
                            <i class="fa fa-phone"></i>
                            <span>{{isset($data['contact']->email)?$data['contact']->email:'the email unset'}}</span>
                        </a>
                    </div>
                </div>
                <!-- Top Header Social Info -->
                <div class="col-6 col-md-3 col-lg-4">
                    <div class="top-header-social-info text-right">
                        @if(isset($data['contact']->facebook))
                            <a target="_blank" href="{{$data['contact']->facebook}}" data-toggle="tooltip"
                               data-placement="bottom" title="Facebook"><i
                                    class="fa fa-facebook"></i></a>
                        @endif
                        @if(isset($data['contact']->instagram))
                            <a target="_blank" href="{{$data['contact']->instagram}}" data-toggle="tooltip"
                               data-placement="bottom" title="Instagram"><i
                                    class="fa fa-instagram"></i></a>
                        @endif
                        @if(isset($data['contact']->twitter))
                            <a target="_blank" href="{{$data['contact']->twitter}}" data-toggle="tooltip"
                               data-placement="bottom" title="Twitter"><i
                                    class="fa fa-twitter"></i></a>
                        @endif
                        @if(isset($data['contact']->google_plus))
                            <a target="_blank" href="{{$data['contact']->google_plus}}" data-toggle="tooltip"
                               data-placement="bottom" title="Google Plus"><i
                                    class="fa fa-google-plus"></i></a>
                        @endif
                        @if(isset($data['contact']->linkedin))
                            <a target="_blank" href="{{$data['contact']->linkedin}}" data-toggle="tooltip"
                               data-placement="bottom" title="Linkedin"><i
                                    class="fa fa-linkedin"></i></a>
                        @endif
                        @if(isset($data['contact']->pinterest))
                            <a target="_blank" href="{{$data['contact']->pinterest}}" data-toggle="tooltip"
                               data-placement="bottom" title="Pinterest"><i
                                    class="fa fa-pinterest"></i></a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Header End -->

    <!-- Main Header Start -->
    <div class="main-header-area">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="dentoNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="{{route('index')}}"><img src="./img/core-img/logo.png" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul id="nav">
                                <li><a href="{{route('index')}}">Home</a></li>
                                <li><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="{{route('index')}}">- Home</a></li>
                                        <li><a href="{{route('about')}}">- About Us</a></li>
                                        <li><a href="service.html">- Service</a></li>
                                        <li><a href="pricing.html">- Pricing</a></li>
                                        <li><a href="blog.html">- Blog</a></li>
                                        <li><a href="blog-details.html">- Blog Details</a></li>
                                        <li><a href="contact.html">- Contact</a></li>
                                        <li><a href="#">- Dropdown</a>
                                            <ul class="dropdown">
                                                <li><a href="#">- Dropdown Item</a></li>
                                                <li><a href="#">- Dropdown Item</a>
                                                    <ul class="dropdown">
                                                        <li><a href="#">- Even Dropdown</a></li>
                                                        <li><a href="#">- Even Dropdown</a></li>
                                                        <li><a href="#">- Even Dropdown</a></li>
                                                        <li><a href="#">- Even Dropdown</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">- Dropdown Item</a></li>
                                                <li><a href="#">- Dropdown Item</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="{{route('about')}}">About</a></li>
                                <li><a href="service.html">Service</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="{{route('news')}}">News</a></li>
                                <li><a href="./contact.html">Contact</a></li>
                            </ul>
                        </div>
                        <!-- Nav End -->
                    </div>

                    <!-- Booking Now Button -->
                    {{--<a href="#" class="btn dento-btn booking-btn">Booking Now</a>--}}
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->

@yield('main')

<!-- ***** Footer Area Start ***** -->
<footer class="footer-area bg-img bg-gradient-overlay" style="background-image: url({{asset('img/bg-img/3.jpg')}});">
    <div class="container">
        <div class="row">
            <!-- Single Footer Widget -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-footer-widget">
                    <a href="./index.html" class="d-block mb-4"><img src="./img/core-img/logo.png" alt=""></a>
                    <p>{{isset($data['about']->short_info)?$data['about']->short_info:
                    'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda ducimus et explicabo facilis fuga, illo ipsam odio perspiciatis quaerat quas quia quidem repellendus similique sint veniam. Amet eius in pariatur!'}}</p>
                    <div class="footer-contact">
                        <p><i class="icon_pin"></i> {{isset($data['contact']->address)?$data['contact']->address:'the address unset'}}</p>
                        <p><i class="icon_phone"></i> {{isset($data['contact']->phone)?$data['contact']->phone:'phone number unset'}}</p>
                        <p><i class="icon_mail"></i> {{isset($data['contact']->email)?$data['contact']->email:'the email unset'}}</p>
                    </div>
                </div>
            </div>

            <!-- Single Footer Widget -->
            <div class="col-12 col-sm-6 col-lg">
                <div class="single-footer-widget">
                    <!-- Widget Title -->
                    <h5 class="widget-title">Opening Hours</h5>

                    <!-- Opening Hours -->
                    <ul class="opening-hours">
                        <li><span>Mon-Wed</span> <span>8.00-18.00</span></li>
                        <li><span>Thu-Fri</span> <span>8.00-17.00</span></li>
                        <li><span>Sat</span> <span>9.00-17.00</span></li>
                        <li><span>Sun</span> <span>10.00-17.00</span></li>
                        <li><span>Holiday</span> <span>Closed</span></li>
                    </ul>
                </div>
            </div>

            <!-- Single Footer Widget -->
            <div class="col-12 col-sm-6 col-lg">
                <div class="single-footer-widget">
                    <!-- Widget Title -->
                    <h5 class="widget-title">Quick Link</h5>

                    <!-- Quick Links Nav -->
                    <nav>
                        <ul class="quick-links">
                            <li><a href="#">About</a></li>
                            <li><a href="#">FAQs</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Policy</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="#">Advisors</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Dentist</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Legals</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <!-- Single Footer Widget -->
            <div class="col-12 col-sm-6 col-lg">
                <div class="single-footer-widget">
                    <!-- Widget Title -->
                    <h5 class="widget-title">Sosial Media</h5>

                    <p>we excited to see you. feel free to touch us.</p>

                    <!-- Social Info -->
                    <div class="footer-social-info">
                        @if(isset($data['contact']->facebook))
                            <a target="_blank" href="{{$data['contact']->facebook}}" data-toggle="tooltip"
                               data-placement="bottom" title="Facebook"><i
                                    class="fa fa-facebook"></i></a>
                        @endif
                        @if(isset($data['contact']->instagram))
                            <a target="_blank" href="{{$data['contact']->instagram}}" data-toggle="tooltip"
                               data-placement="bottom" title="Instagram"><i
                                    class="fa fa-instagram"></i></a>
                        @endif
                        @if(isset($data['contact']->twitter))
                            <a target="_blank" href="{{$data['contact']->twitter}}" data-toggle="tooltip"
                               data-placement="bottom" title="Twitter"><i
                                    class="fa fa-twitter"></i></a>
                        @endif
                        @if(isset($data['contact']->google_plus))
                            <a target="_blank" href="{{$data['contact']->google_plus}}" data-toggle="tooltip"
                               data-placement="bottom" title="Google Plus"><i
                                    class="fa fa-google-plus"></i></a>
                        @endif
                        @if(isset($data['contact']->linkedin))
                            <a target="_blank" href="{{$data['contact']->linkedin}}" data-toggle="tooltip"
                               data-placement="bottom" title="Linkedin"><i
                                    class="fa fa-linkedin"></i></a>
                        @endif
                        @if(isset($data['contact']->pinterest))
                            <a target="_blank" href="{{$data['contact']->pinterest}}" data-toggle="tooltip"
                               data-placement="bottom" title="Pinterest"><i
                                    class="fa fa-pinterest"></i></a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Copywrite Area -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="copywrite-content">
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                        {{env('APP_NAME')}} All rights reserved | This template is made with <i class="fa fa-heart-o"
                                                                                                aria-hidden="true"></i>
                        by <a
                            href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ***** Footer Area End ***** -->

<!-- ******* All JS ******* -->
<!-- jQuery js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.0.1/jquery-migrate.min.js"></script>
<!-- Popper js -->
<script src="js/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="js/bootstrap.min.js"></script>
<!-- All js -->
<script src="js/dento.bundle.js"></script>
<!-- Active js -->
<script src="js/default-assets/active.js"></script>
<!-- Active js -->
<script type="text/javascript">
    $(document).ready(function () {

        var owl = $("#owl-demo");

        owl.owlCarousel({
            loop: true,
            itemsCustom: [
                [0, 2],
                [450, 4],
                [600, 7],
                [700, 9],
                [1000, 10],
                [1200, 12],
                [1400, 13],
                [1600, 15]
            ],
            navigation: true
        });
    });
</script>
@stack('js')
</body>

</html>
