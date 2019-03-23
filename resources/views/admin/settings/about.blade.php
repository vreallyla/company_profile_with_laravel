@extends('layouts.admin')
@section('title','home')
@push('style')
    <link rel="stylesheet" href="{{asset('admin/css/tinymceAnimate.css')}}">


    <style>
        input[type="file"] {
            opacity: 0;
            cursor: pointer;
            z-index: 3;
        }

        .image-about input[type="file"] {
            position: absolute;
            width: 15em;
            height: 16em;
        }


        .image-about:hover img, .image-logo:hover img {
            -webkit-filter: hue-rotate(90deg);
            filter: hue-rotate(90deg);
            -webkit-transition: all .3s ease;
            transition: all .3s ease;
            transform: scale(1.1);
        }

        .image-about .img-overlay {
            top: 9em;
            left: 4em;
        }

        .image-logo .img-overlay {
            top: 3em;
            left: 4.8em;
        }

        .img:hover .img-overlay {
            transform: scale(1);
            z-index: 2;
        }

        .img .img-overlay {
            position: absolute;
            transform: scale(0);
            -webkit-transition: all .3s ease;
            transition: all .3s ease;
            color: #fff;
            border: 1px solid #eee;
            padding: 10px 8px;
            background: #3c8dbc;
        }

        .image-about input[type="file"] {
            width: 15em;
            height: 16.5em;
            position: absolute;
        }

        .image-about {
            width: 15em;
            height: 16.5em;
            overflow: hidden;
            left: 11px;
            top: 11px;
            -webkit-transition: all .3s ease;
            transition: all .3s ease;
        }

        .image-logo input[type="file"] {
            position: absolute;
            width: 14em;
            height: 5.5em;
        }

        .image-logo {
            width: 16em;
            height: 5.5em;
            overflow: hidden;
            left: 11px;
            top: 11px;
            -webkit-transition: all .3s ease;
            transition: all .3s ease;
        }
    </style>
@endpush
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Informations
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
            <div class="row">
                {{--other--}}
                <div class="col-md-12">
                    <div class="box box-default collapsed-box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Universal Informations</h3>

                            <div class="box-tools pull-right">
                                <button type="button" data-toggle="tooltip" title="Save" class="btn btn-box-tool" style="display: none;"><i
                                        class="fa fa-edit"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool cool" data-widget="collapse"><i
                                        class="fa fa-plus"></i>
                                </button>
                            </div>
                            <!-- /.box-tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body" style="display: none;">
                            <form role="form">
                                <div class="col-lg-3 col-md-4">
                                    <div class="form-group">
                                        <label for="img">Image</label>
                                        <div class="image-about img">
                                            <div class="img-overlay">
                                                Changes image
                                            </div>
                                            <input type="file" name="img" id="img" accept="image/*">
                                            <img
                                                src="{{\Illuminate\Support\Facades\File::exists($about->img) ? asset($about->img) : asset('/img/footages/250x300.png')}}"
                                                alt="" class="img-cover">
                                        </div>
                                        <span class="help-block"></span>
                                    </div>

                                </div>
                                <div class="col-lg-9 col-md-8">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="name">Logo</label>
                                                <div class="image-logo img">
                                                    <div class="img-overlay">
                                                        Changes Logo
                                                    </div>
                                                    <input type="file" name="img" id="img" accept="image/*">
                                                    <img
                                                        src="{{\Illuminate\Support\Facades\File::exists($about->logo) ? asset($about->logo) : asset('/img/footages/250x300.png')}}"
                                                        alt="" class="img-cover">
                                                </div>
                                                <span class="help-block"></span>
                                            </div>

                                        </div>
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <label for="name">Company Name</label>
                                                <input type="text" class="form-control" name="name" id="name"
                                                       value="{{$about->company_name}}"
                                                       placeholder="Enter Names">
                                                <span class="help-block"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="quote">Quotes</label>
                                                <input type="text" class="form-control" name="quote" id="quote"
                                                       value="{{$about->quote}}"
                                                       placeholder="Enter Quotes">
                                                <span class="help-block"></span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="short_info">Information Short</label>
                                            <textarea name="short_info" id="short_info" cols="5" rows="3"
                                                      class="form-control">{{$about->short_info}}</textarea>
                                            <span class="help-block"></span>
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.box-body -->


                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                {{--other--}}

                {{--history--}}
                <div class="col-md-12">
                    <div class="box box-default collapsed-box">
                        <div class="box-header with-border">
                            <h3 class="box-title">History</h3>

                            <div class="box-tools pull-right">
                                <button type="button" data-toggle="tooltip" title="Save" class="btn btn-box-tool" style="display: none;"><i
                                        class="fa fa-edit"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool cool" data-widget="collapse"><i
                                        class="fa fa-plus"></i>
                                </button>
                            </div>
                            <!-- /.box-tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body" style="display: none;">
                            <form role="form">
                                <div class="col-md-12">
                                    <div class="form-group ">
                                    <textarea class="editor-tiny" id="description" name="description"
                                              placeholder="Enter ..." readonly>
                                        {{$about->history}}
                                    </textarea>
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.box-body -->


                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                {{--history--}}

                {{--intro--}}
                <div class="col-md-12">
                    <div class="box box-default collapsed-box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Intro</h3>

                            <div class="box-tools pull-right">
                                <button type="button" data-toggle="tooltip" title="Save" class="btn btn-box-tool" style="display: none"><i
                                        class="fa fa-edit"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool cool" data-widget="collapse"><i
                                        class="fa fa-plus"></i>
                                </button>
                            </div>
                            <!-- /.box-tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body" style="display: none;">
                            <form role="form">
                                <div class="col-md-12">
                                    <div class="form-group ">
                                    <textarea class="editor-tiny" id="intro" name="intro" placeholder="Enter ..."
                                              readonly>
                                        {{$about->intro}}
                                    </textarea>
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.box-body -->


                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                {{--intro--}}

                {{--Vission--}}
                <div class="col-md-12">
                    <div class="box box-default collapsed-box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Vission</h3>

                            <div class="box-tools pull-right">
                                <button type="button" data-toggle="tooltip" title="Save" class="btn btn-box-tool" style="display: none;"><i
                                        class="fa fa-edit"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool cool" data-widget="collapse"><i
                                        class="fa fa-plus"></i>
                                </button>
                            </div>
                            <!-- /.box-tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body" style="display: none;">
                            <form role="form">
                                <div class="col-md-12">
                                    <div class="form-group ">
                                    <textarea class="editor-tiny" id="vission" name="vission" placeholder="Enter ..."
                                              >
                                        {{$about->vision}}
                                    </textarea>
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.box-body -->


                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                {{--Vission--}}

                {{--Mission--}}
                <div class="col-md-12">
                    <div class="box box-default collapsed-box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Mission</h3>

                            <div class="box-tools pull-right">
                                <button type="button" data-toggle="tooltip" title="Save" class="btn btn-box-tool" style="display: none;"><i
                                        class="fa fa-edit"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool cool" data-widget="collapse"><i
                                        class="fa fa-plus"></i>
                                </button>
                            </div>
                            <!-- /.box-tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body" style="display: none;">
                            <form role="form">
                                <div class="col-md-12">
                                    <div class="form-group ">
                                    <textarea class="editor-tiny" id="mission" name="mission" placeholder="Enter ..."
                                              >
                                        {{$about->mission}}
                                    </textarea>
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.box-body -->


                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                {{--Mission--}}


            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
@endsection
@push('js')
    <script src="{{asset('admin/js/tinymce.js')}}"></script>
    <script src="{{asset('admin/js/class/common.js')}}"></script>
    <script>

        $(function () {
            const imgAbout = $('#img,#logo');
            const imgLogo = $('#logo');
            const contentN=$('.content');
            const expand = contentN.find('.cool');

            imgAbout.change(function () {
                var input = this;
                var url = $(this).val();
                var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
                let targetChange = $(this).next();
                uploadImg(input, ext, targetChange);
            });

            expand.on('click',function () {
                if ($(this).children().hasClass('fa-minus'))
                $(this).prev().fadeOut(300);
                else
                    $(this).prev().fadeIn(300);

            });


            function uploadImg(input, ext, targetChange) {
                if (input.files && input.files[0] && (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg")) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        targetChange.prop('src', e.target.result);
                    };
                    reader.readAsDataURL(input.files[0]);
                } else {
                    msgWeird();
                }
            }


        });
    </script>
@endpush
