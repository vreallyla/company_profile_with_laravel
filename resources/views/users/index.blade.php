@extends('layouts.public')
@section('title',env('APP_NAME')." Selamat Datang di PT UJADIPERKASA")
@section('main')
    <!-- ***** Welcome Area Start ***** -->
    <section class="welcome-area">
        <!-- Welcome Slides -->
        <div class="welcome-slides owl-carousel">
            <!-- Single Welcome Slide -->
            @foreach(\App\carousel::all() as $row)
                @component('components.carousel')
                    <!--@slot('title',$row->title)-->
                    @slot('btnPrimary',$row->fill_btn_primary)
                    @slot('btnSecondary',$row->fill_btn_secondary)
                    @slot('urlPrimary',$row->url_btn_primary)
                    @slot('urlSecondary',$row->url_btn_secondary)
                    @slot('img',asset($row->img))

                    <!--{{$row->desc}}-->
                @endcomponent
            @endforeach

        </div>
    </section>

    <!-- ***** opsional Area start ***** -->
    <section class="dento-services-area mt-50 mb-50">
        <div class="container">
            <div class="row">

                <!-- Single Service Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-service--area text-center mb-50">
                        <div class="icon--">
                            <i class="fa fa-building-o fa-10x"></i>
                        </div>
                        <h5>ABOUT UJPRIMATEK</h5>
                        <p>In pretium neque a libero congue. Elit diam lectus. Prasent lacinia vitae sit
                            mattis mollis maximus.</p>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-service--area text-center mb-50">
                        <div class="icon--">
                            <i class="fa fa-bookmark fa-10x"></i>
                        </div>
                        <h5>OUR RELIABLE PRODUCTS</h5>
                        <p>In pretium neque a libero congue. Elit diam lectus. Prasent lacinia vitae sit
                            mattis mollis maximus.</p>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-service--area text-center mb-50">
                        <div class="icon--">
                            <i class="fa fa-newspaper-o fa-10x"></i>
                        </div>
                        <h5>NEWS & EVENTS</h5>
                        <p>In pretium neque a libero congue. Elit diam lectus. Prasent lacinia vitae sit
                            mattis mollis maximus.</p>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- ***** opsional Area End ***** -->

    <!-- ***** touch-us Area Start ***** -->
    <section class="touch section-padding-100 bg-img bg-gradient-overlay"
             style="background-image: url('{{asset('img/bg-img/7.jpg')}}');">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8">
                    <p>PT. Usaha Jaya Primatek provides very reliable and
                        safe products which our users would definitely love and trust, Please browse through our
                        product- line-up ABOUT UJPRIMATEK PT Usaha Jaya Primatek is a trading and distribution company
                        that focuses on the Industrial Tools and Spare parts for use in factories, constructions,
                        shipyards and minings.</p>
                </div>
                <div class="col-lg-3 col-md-4">
                        <a href="#" class="btn dento-btn mx-2 active"
                       style="animation-delay: 700ms;">Touch Us</a>
                </div>

            </div>
        </div>
    </section>
    <!-- ***** touch-us Area End ***** -->
    <div class="container">
        <div class="dento-border clearfix"></div>
    </div>
    <!-- ***** brads Area Start ***** -->
    <section class="brands section-padding-100">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h3>Our Brands</h3>
                        <div class="line"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div id="owl-demo" class="owl-carousel owl-theme">
                        @foreach($brands as $brand)
                            <div class="item"><a href="#" tabindex="-1">
                                    <img class="aligncenter wp-image-2198 size-medium"
                                        src="{{asset($brand->logo)}}"
                                        alt="{{asset($brand->name)}}" width="184" height="70"
                                        srcset="{{asset($brand->logo)}}"
                                        sizes="(max-width: 300px) 100vw, 300px"></a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** brads Area End ***** -->
@endsection


