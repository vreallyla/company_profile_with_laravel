@extends('layouts.public')
@section('title',env('APP_NAME')."'s contact")
@section('main')

    <!-- ***** Breadcrumb Area Start ***** -->
    @component('components.breadcrumb')
        @slot('img',asset('img/bg-img/3.jpg'))
        @slot('quote',$data['about']->quote)
        @slot('thirdLink',false)

        Contact
    @endcomponent
    <!-- ***** Breadcrumb Area End ***** -->

    <!-- ***** Contact Area Start ***** -->
    <section class="dento-contact-area mt-50 mb-100">
        <div class="container">

            <div class="row">
                <!-- Contact Information -->
                <div class="col-12 col-md-4">
                    <div class="contact-information">
                        <h5>Address</h5>
                        <p>{{isset($data['contact']->address)?$data['contact']->address:'unset'}}</p>

                        <h5>Phone</h5>
                        <p>{{isset($data['contact']->phone)?$data['contact']->phone:'unset'}}</p>

                        <h5>Fax</h5>
                        <p>{{isset($data['contact']->fax)?$data['contact']->fax:'unset'}}</p>

                        <h5>Email</h5>
                        <p>{{isset($data['contact']->email)?$data['contact']->email:'unset'}}</p>

                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-12 col-md-8">
                    <div class="contact-form">
                        <!-- Section Heading -->
                        <div class="section-heading">
                            <h2>Get In Touch</h2>
                            <div class="line"></div>
                        </div>
                        <!-- Form -->
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-lg-6 mb-30">
                                    <input type="text" name="message_name" class="form-control"
                                           placeholder="Your Name">
                                </div>
                                <div class="col-lg-6 mb-30">
                                    <input type="email" name="message_email" class="form-control"
                                           placeholder="Your Email">
                                </div>
                                <div class="col-12 mb-30">
                                    <textarea name="message" class="form-control"
                                              placeholder="Your Message"></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn dento-btn">Submit</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Contact Area End ***** -->

@endsection

@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
    <script>
        /**
         * submit feedback
         */
        $('.contact-form').on('submit', 'form', function (e) {
            e.preventDefault();
            const elErr = $('<div class="invalid-feedback"></div>');

            let fieldForm = $(this).find('input,textarea');
            let btnForm = $(this).find('button');

            fieldForm.prop('readonly', true);
            btnForm.html('<i class="fa fa-circle-o-notch loading-spin"></i>');

            $(this).find('.invalid-feedback').remove();
            $(this).find('input,textarea').prop('class', 'form-control');

            axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

            axios.post('{{route('sendMsgApi')}}', $(this).serialize())
                .then(function (data) {
                    swal2('success', data.data.msg);
                    fieldForm.val('').prop('readonly', false);
                    btnForm.text('Submit').blur();
                })
                .catch(function (er) {
                    console.log(er.response.data.errors);
                    if (er.response.status === 422) {
                        setTimeout(function () {
                            testAnim('shake','.col-md-8');
                            $.each(er.response.data.errors, function (i, val) {
                                let fillErr = elErr.clone().text(val);
                                $('.contact-form').find('[name=' + i + ']').addClass('is-invalid').parent().append(fillErr);

                            });
                        }, 500);
                    } else {
                        swal2('error','message can\'t send, you can try again....');
                    }
                    fieldForm.prop('readonly', false);
                    btnForm.text('Submit').blur();

                });
        });

        function swal2(type, msg) {
            Swal.fire({
                // position: 'top-end',
                type: type,
                title: msg,
                showConfirmButton: false,
                timer: 1500
            })
        }

        function testAnim(x,animateObj) {
            const classObj=$(animateObj).prop('class');
            $(animateObj).removeClass().addClass(x + ' animated '+classObj).one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
                $(this).removeClass().addClass(classObj);
            });
        };
    </script>
@endpush

@push('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    @endpush
