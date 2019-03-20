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
                    <a class="nav-brand" href="{{route('index')}}"><img src="{{asset('/img/core-img/logo.png')}}"
                                                                        alt="{{env('APP_NAME')}}"></a>

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
                                <li><a href="{{route('index')}}">Beranda</a></li>
                                <li><a href="{{route('about')}}">Tentang Kami</a></li>
                                <li><a href="{{route('product')}}">Produk</a>
                                    <ul class="dropdown" style="width: 208px">
                                        @foreach($data['product'] as $product)
                                            <li class="has-down">
                                                <a href="{{route('productDetails',['product'=>$product->id])}}">- {{strlen($product->name)<20?$product->name:substr($product->name,0,19).'...'}}</a>
                                                <ul class="dropdown" style="left: 197px;">
                                                    @foreach($product->brands as $brand)
                                                        <li><a href="{{route('subProduct',['product'=>$product->id,'brand'=>$brand->id])}}">- {{strlen($brand->name)<20?$brand->name:substr($brand->name,0,19).'...'}}</a></li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li><a href="{{route('catalogue')}}">Download Katalog</a></li>
                                <li><a href="{{route('news')}}">Berita & Event</a></li>
                                <li><a href="{{route('contact')}}">Hubungi Kami</a></li>
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
                    <a href="{{asset('index')}}" class="d-block mb-4"><img src="{{asset('/img/core-img/logo.png')}}"
                                                                           alt=""></a>
                    <p>{{isset($data['about']->short_info)?$data['about']->short_info:
                    'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda ducimus et explicabo facilis fuga, illo ipsam odio perspiciatis quaerat quas quia quidem repellendus similique sint veniam. Amet eius in pariatur!'}}</p>
                    <div class="footer-contact">
                        <p>
                            <i class="icon_pin"></i> {{isset($data['contact']->address)?$data['contact']->address:'the address unset'}}
                        </p>
                        <p>
                            <i class="icon_phone"></i> {{isset($data['contact']->phone)?$data['contact']->phone:'phone number unset'}}
                        </p>
                        <p>
                            <i class="icon_mail"></i> {{isset($data['contact']->email)?$data['contact']->email:'the email unset'}}
                        </p>
                    </div>
                </div>
            </div>

            <!-- Single Footer Widget -->
            <div class="col-12 col-sm-6 col-lg">
                <div class="single-footer-widget">
                    <!-- Widget Title -->
                    <h5 class="widget-title">Jam Operasional</h5>

                    <!-- Opening Hours -->
                    <ul class="opening-hours">
                        <li><span>Senin - Jum'at</span> <span>8.00-17.00</span></li>
						<li><span>Sabtu</span><span>8.00-12.00</span></li>	
                        <li><span>Minggu</span> <span>Tutup</span></li>
                    </ul>
                </div>
            </div>

            <!-- Single Footer Widget -->
            <div class="col-12 col-sm-6 col-lg">
                <div class="single-footer-widget">
                    <!-- Widget Title -->
                    <h5 class="widget-title">Akses Cepat</h5>

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

                    <p>Temukan kami di sosial media</p>

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
                    <p>
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                        {{env('APP_NAME')}} All rights reserved 
                        </p>
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
<script src="{{asset('js/popper.min.js')}}"></script>
<!-- Bootstrap js -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- All js -->
<script src="{{asset('js/dento.bundle.js')}}"></script>
<!-- Active js -->
<script src="{{asset('js/default-assets/active.js')}}"></script>
<!-- Active js -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
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
