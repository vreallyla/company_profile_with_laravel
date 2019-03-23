@extends('layouts.admin')
@section('title','contact')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Contacts
                <small>setting</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="javascript:void(0)">settings</a></li>
                <li class="active">about company</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="box box-default color-palette-box">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-calendar"></i> Updated at: {{now()}}</h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-6">

                            <div class="row">
                                {{--facebook--}}
                                <div class="form-group col-md-12">
                                    <label for="facebook">Facebook</label>
                                    <div class="input-group col-md-12">
                                        <span class="input-group-addon"><i class="fa fa-facebook"></i></span>
                                        <input type="text" class="form-control" name="facebook" id="facebook"
                                               placeholder="Facebool Field">
                                    </div>
                                    <span class="help-block"></span>
                                </div>
                                {{--facebook--}}

                                {{--twitter--}}
                                <div class="form-group col-md-12">
                                    <label for="twitter">Twitter</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-twitter"></i></span>
                                        <input type="text" class="form-control" name="twitter" id="twitter"
                                               placeholder="Twitter Field">
                                    </div>
                                    <span class="help-block"></span>
                                </div>
                                {{--twitter--}}

                                {{--instagram--}}
                                <div class="form-group col-md-12">
                                    <label for="instagram">Instagram</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-instagram"></i></span>
                                        <input type="text" class="form-control" name="instagram" id="instagram"
                                               placeholder="Instagram Field">
                                    </div>
                                    <span class="help-block"></span>
                                </div>
                                {{--instagram--}}

                                {{--linkedin--}}
                                <div class="form-group col-md-12">
                                    <label for="linkedin">Linkedin</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-linkedin"></i></span>
                                        <input type="text" class="form-control" name="linkedin" id="linkedin"
                                               placeholder="Linkedin Field">
                                    </div>
                                    <span class="help-block"></span>
                                </div>
                                {{--linkedin--}}

                                {{--pinterest--}}
                                <div class="form-group col-md-12">
                                    <label for="pinterest">Pinterest</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-pinterest"></i></span>
                                        <input type="text" class="form-control" name="pinterest" id="pinterest"
                                               placeholder="Pinterest Field">
                                    </div>
                                    <span class="help-block"></span>
                                </div>
                                {{--pinterest--}}

                                {{--google_plus--}}
                                <div class="form-group col-md-12">
                                    <label for="google_plus">Google Plus</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-google-plus"></i></span>
                                        <input type="text" class="form-control" name="google_plus" id="google_plus"
                                               placeholder="Google Plus Field">
                                    </div>
                                    <span class="help-block"></span>
                                </div>
                                {{--google_plus--}}

                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                {{--email--}}
                                <div class="form-group col-md-12">
                                    <label for="email">Email</label>
                                    <div class="input-group col-md-12">
                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                        <input type="email" class="form-control" name="email" id="email"
                                               placeholder="Email Field">
                                    </div>
                                    <span class="help-block"></span>
                                </div>
                                {{--email--}}

                                {{--phone--}}
                                <div class="form-group col-md-12">
                                    <label for="phone">Phone</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                        <input type="text" class="form-control" name="phone" id="phone"
                                               placeholder="Phone Number Field">
                                    </div>
                                    <span class="help-block"></span>
                                </div>
                                {{--phone--}}

                                {{--address--}}
                                <div class="form-group col-md-12">
                                    <label for="address">Address</label>
                                    <textarea name="address" id="address" cols="5" rows="5" class="form-control"
                                              placeholder="Address Field"></textarea>
                                    <span class="help-block"></span>
                                </div>
                                {{--address--}}

                            </div>

                        </div>

                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>

@endsection
