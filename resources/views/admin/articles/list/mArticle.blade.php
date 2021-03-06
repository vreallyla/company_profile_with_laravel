@extends('layouts.admin')
@section('title','Articles')
@push('style')

    <link rel="stylesheet" href="{{asset('admin/css/tinymceAnimate.css')}}">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.7/css/bootstrap-select.min.css">


    <style>
        .mce-fullscreen {
            z-index: 1030;
        }

        .form-group .bootstrap-select {
            display: block;
            width: 100% !important;
        }

        .btn-default {
            background-color: #ffffff;
            border-color: #d2d6de;
        }
    </style>
@endpush
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                {{$id?'Change Article':'Create Article'}}
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Tables</a></li>
                <li class="active">Simple</li>
            </ol>
        </section>
        <section class="content margin-bottom">
            <div class="row">
                <div class="col-md-offset-1 col-md-10">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Fill all field</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" enctype="multipart/form-data">
                            <div class="box-body">
                                @if($id)
                                    @method('PUT')
                                @endif
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="img">File input</label>
                                        <input type="file" class="form-control" id="img" name="img" accept="image/*">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="title">Title</label>
                                        <input type="text" name="title" class="form-control" id="title"
                                               {{$article?'value='.$article->title.'':''}} placeholder="Enter email">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="category">Category</label>
                                        <select class="selectpicker form-control" name="category" id="category"
                                                data-live-search="true" data-container="body">
                                            @foreach($cat as $row)
                                                <option data-tokens="{{$row->name}}"
                                                        {{$article?($article->id===$row->id?'selected':''):''}}
                                                        value="{{$row->id}}">{{$row->name}}</option>
                                            @endforeach
                                        </select>
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <textarea id="description" name="description" placeholder="Enter ...">
                                        {{$article?$article->description:''}}
                                    </textarea>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.7/js/bootstrap-select.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.7/js/i18n/defaults-id_ID.min.js"></script>

    <script src="{{asset('admin/js/tinymce.js')}}"></script>
    <script src="{{asset('admin/js/class/common.js')}}"></script>
    <script>
        $(function () {
            $('select').selectpicker();
            const key = "{{$id}}";
            const urlSite = "{{route('articles.index')}}";

            $('.box').on('submit', 'form', function (e) {
                e.preventDefault();
                const dataN = new FormData($(this)[0]);
                postItem(dataN);
            });

            function postItem(data) {
                axios.post(urlSite + (key ? '/' + key : ''), data)
                    .then(res => {
                        console.log(res.data);
                    }).catch(err => {
                    if (err.response.status === 422) {
                        showNotice(err.response.data.errors, 'form');
                    } else if (err.response.status === 400) {
                        location.href = "{{route('loginAdmin')}}";
                    } else {
                        noticeWrong();
                    }
                })
            }

        });
    </script>
@endpush
