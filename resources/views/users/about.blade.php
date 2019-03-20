@extends('layouts.public')
@section('title',env('APP_NAME')."'s home")
@section('main')

    <!-- ***** Breadcrumb Area Start ***** -->
    @component('components.breadcrumb')
        @slot('img',asset('img/bg-img/meeting.jpg'))
        @slot('quote',$data['about']->quote)
        @slot('thirdLink',false)

        About Us
    @endcomponent
    <!-- ***** Breadcrumb Area End ***** -->

    <!-- ****** About Us Area Start ******* -->
    <section class="dento-about-us-area mt-70">
        <div class="container">
            <div class="row align-items-center">

                <!-- About Content -->
                <div class="col-12 col-md-8">
                    <div class="about-us-content mb-50">
                        <!-- Section Heading -->
                        <div class="section-heading">
                            <h4>HOW WE STARTED</h4>
                            <div class="line"></div>
                        </div>
                    {!! $data['about']->history !!}

                    <!--Single Skills Area -->
                        <!--<div class="single-skills-area mt-30">-->
                        <!--<h6>Experience Dentist</h6>-->
                        <!--<div id="bar1" class="barfiller">-->
                        <!--<span class="tip"></span>-->
                        <!--<span class="fill" data-percentage="80"></span>-->
                        <!--</div>-->
                        <!--</div>-->


                    </div>
                </div>
                <!-- About Us Thumbnail -->
                <div class="col-12 col-md-4">
                    <div class="about-us-thumbnail mb-50" style="max-width: 410px   ">
                        <img src="{{asset($data['about']->img)}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ****** About Us Area End ****** -->

    <div class="container">
        <div class="dento-border clearfix"></div>
    </div>

    <!-- Cool Facts Area Start -->
    <section class="dento-about-us-area mt-70">
        <div class="container">
            <div class="row">
                <!-- About Content -->
                <div class="col-12 col-md-6">
                    <div class="about-us-content mb-50">
                        <!-- Section Heading -->
                        <div class="section-heading">
                            <h4>WHO WE ARE</h4>
                            <div class="line"></div>
                        </div>
                        <p>Vestibulum condimentum, risus sedones honcus rutrum, salah lacus mollis zurna, nec finibusmi
                            velit advertisis. Proin vitae odin quis magna aliquet laciniae. Etiam auctor, nisi vel.
                            Pellentesque ultrices nisl quam iaculis, nec pulvinar
                            augue.</p>
                        <p>Vestibulum condimentum, risus sedones honcus rutrum, salah lacus mollis zurna, nec finibusmi
                            velit advertisis. Proin vitae odin quis magna aliquet laciniae. Etiam auctor, nisi vel.
                            Pellentesque ultrices nisl quam iaculis, nec pulvinar
                            augue.</p>
                        <p>Vestibulum condimentum, risus sedones honcus rutrum, salah lacus mollis zurna, nec finibusmi
                            velit advertisis. Proin vitae odin quis magna aliquet laciniae. Etiam auctor, nisi vel.
                            Pellentesque ultrices nisl quam iaculis, nec pulvinar
                            augue.</p>

                        <!--Single Skills Area -->
                        <!--<div class="single-skills-area mt-30">-->
                        <!--<h6>Experience Dentist</h6>-->
                        <!--<div id="bar1" class="barfiller">-->
                        <!--<span class="tip"></span>-->
                        <!--<span class="fill" data-percentage="80"></span>-->
                        <!--</div>-->
                        <!--</div>-->


                    </div>
                </div>
                <!-- About Us Thumbnail -->
                <div class="col-12 col-md-6">
                    <div class="section-heading">
                        <h4>VISION</h4>
                        <div class="line"></div>
                    </div>
                    <p>Vestibulum condimentum, risus sedones honcus rutrum, salah lacus mollis zurna, nec finibusmi
                        velit advertisis. Proin vitae odin quis magna aliquet laciniae. Etiam auctor, nisi vel.
                        Pellentesque ultrices nisl quam iaculis, nec pulvinar
                        augue.</p>
                    <div class="section-heading">
                        <h4>MISSION</h4>
                        <div class="line"></div>
                    </div>
                    <p>Vestibulum condimentum, risus sedones honcus rutrum, salah lacus mollis zurna, nec finibusmi
                        velit advertisis. Proin vitae odin quis magna aliquet laciniae. Etiam auctor, nisi vel.
                        Pellentesque ultrices nisl quam iaculis, nec pulvinar
                        augue.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Cool Facts Area End -->

    <!-- ***** Testimonials Area Start ***** -->
    <section class="testimonials-area section-padding-100 bg-img bg-gradient-overlay jarallax clearfix"
             style="background-image: url('{{asset('img/bg-img/2.jpg')}}');">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Testimonials Slides -->
                    <div class="testimonials-slides owl-carousel">
                        <!-- Single Testimonials Slide -->
                        @foreach($testi as $row)
                            @component('components.testimonials')
                                @slot('img',$row->ava)
                                @slot('name',$row->name)
                                @slot('as',$row->as)

                                {{$row->desc}}
                            @endcomponent
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Testimonials Area End ***** -->

    <!-- ***** Dento Dentist Area Start ***** -->
    <section class="dentist-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Our Dentist</h2>
                        <div class="line"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Dentist Area -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single-dentist-area mb-100">
                        <img src="./img/bg-img/9.png" alt="">
                        <!-- Dentist Content -->
                        <div class="dentist-content">
                            <!-- Social Info -->
                            <div class="dentist-social-info">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </div>
                            <!-- Dentist Info -->
                            <div class="dentist-info bg-gradient-overlay">
                                <h5>Michael Barley</h5>
                                <p>Implant Expert</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Dentist Area -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single-dentist-area mb-100">
                        <img src="./img/bg-img/10.png" alt="">
                        <!-- Dentist Content -->
                        <div class="dentist-content">
                            <!-- Social Info -->
                            <div class="dentist-social-info">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </div>
                            <!-- Dentist Info -->
                            <div class="dentist-info bg-gradient-overlay">
                                <h5>Michael Barley</h5>
                                <p>Implant Expert</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Dentist Area -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single-dentist-area mb-100">
                        <img src="./img/bg-img/11.png" alt="">
                        <!-- Dentist Content -->
                        <div class="dentist-content">
                            <!-- Social Info -->
                            <div class="dentist-social-info">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </div>
                            <!-- Dentist Info -->
                            <div class="dentist-info bg-gradient-overlay">
                                <h5>Michael Barley</h5>
                                <p>Implant Expert</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Dento Dentist Area End ***** -->

@endsection
