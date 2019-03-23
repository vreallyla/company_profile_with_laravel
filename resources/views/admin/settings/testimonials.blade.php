@extends('layouts.admin')
@section('title','Testimonials')
@push('style')
    <link rel='stylesheet' href='https://unpkg.com/skeleton-placeholder'>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.7/css/bootstrap-select.min.css">
    <style>
        .bone-img-card {
            width: 7em !important;
            height: 5.5em !important;
        }

        .btn-card i:focus, .btn-card i:hover {
            color: #337ab7;
            transition: all .5s;
            transform: scale(1.1);
        }


        .box-footer center {
            font-family: Source Sans Pro;
            font-weight: 600;
            font-size: 14px;
            cursor: pointer;
        }

        .img-left img {
            width: 100%;
            height: 100%;
            -o-object-fit: cover;
            object-fit: cover;
            border-radius: 50%;
        }

        .img-left {
            width: 4.5em;
            height: 4.5em;
            margin-left: 12px;
            overflow: hidden;
            left: 11px;
            top: 11px;
            -webkit-transition: all .3s ease;
            transition: all .3s ease;
        }

        .content-card h3 {
            font-size: 1.4em;
            width: 100%;
            margin: 7px 0px 0px 0px;
        }

        .content-card {
            position: absolute;
            top: 4px;
            left: 108px;
            width: 100%;
            padding-right: 10em;
        }

        .btn-card i {
            cursor: pointer;
        }


        .btn-card {
            color: #706363;
        }

        .btn-card .fill:after {
            content: ' | ';
            color: #706363 !important;
        }
    </style>
@endpush
@section('content')
    <div class="content-wrapper">

        <section class="content-header">
            <h1>
                Articles
                <a href="{{route('mArticleAdmin')}}" class="btn btn-default btn-xs" style="">Add <i
                        class="fa fa-plus"></i></a>

            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Tables</a></li>
                <li class="active">Simple</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="form-group col-md-offset-3 col-md-3">
                    <label for="entity">Entity</label>
                    <select class="selectpicker form-control" name="entity" id="entity"
                            data-container="body">
                        <option data-tokens="8"
                                value="8">8
                        </option>
                        <option data-tokens="16"
                                value="16">16
                        </option>
                        <option data-tokens="32"
                                value="32">32
                        </option>
                        <option data-tokens="64"
                                value="64">64
                        </option>
                    </select>
                    <span class="help-block"></span>
                </div>
                <div class="form-group col-md-3">
                    <label for="category">Category</label>
                    <select class="selectpicker form-control" name="category" id="category"
                            data-live-search="true" data-container="body">
                        <option data-tokens="All"
                                value="">All
                        </option>

                    </select>
                    <span class="help-block"></span>
                </div>

                <div class="form-group col-md-3"><label for="search">Search:</label>
                    <div class="input-group"><input class="form-control" name="search" id="search"
                                                    placeholder="Keyword..."> <span class="input-group-btn"> <button
                                class="btn btn-default btn-search" type="button"><i class="fa fa-search"></i></button> </span>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-4 col-md-6 col-sm-6">

                    <!-- Profile Image -->
                    <div class="box box-default skeleton skeleton-animation-pulse">
                        <div class="box-body" style="max-height: 7.8em; padding: 8px">
                            <div class="img-left">
                                <img class="bone bone-type-image bone-img-card" src="#"
                                     alt="">
                            </div>
                            <div class="content-card">
                                <h3 class="with-border bone bone-type-heading width-half">Agus</h3>
                                <span class="help-block bone bone-type-text">{{\Carbon\Carbon::now()}}</span>
                                <div class="btn-card bone bone-type-text">
                                    <i class="fa fa-edit fill">edit</i>
                                    <i class="fa fa-trash">delete</i>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>

                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="box box-default">
                        <div class="box-body">
                            <div class="img-left">
                                <img
                                    src="data:image/jpeg;base64,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"
                                    alt="">
                            </div>
                            <div class="content-card">
                                <h3>Agus Supriadi</h3>
                                <span class="help-block" style="font-size: 12px;margin-bottom: 0">Pengacara</span>
                                <div class="btn-card">
                                    <i class="fa fa-edit fill">edit</i>
                                    <i class="fa fa-trash">delete</i>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer" style="padding: 8px">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad alias aliquam amet aperiam aut
                            deleniti dolore dolores earum, facilis fugit hic maiores neque, perferendis quos recusandae
                            rerum saepe sed voluptate.
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="box box-default skeleton skeleton-animation-pulse">
                        <div class="box-body">
                            <div class="img-left bone bone-type-image bone-style-round">
                                <img
                                    src="data:image/jpeg;base64,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"
                                    alt="">
                            </div>
                            <div class="content-card">
                                <h3 class="bone bone-type-heading">Agus Supriadi</h3>
                                <span class="help-block bone bone-type-text width-half" style="font-size: 12px;margin-bottom: 0">Pengacara</span>
                                <div class="btn-card">
                                    <i class="fa fa-edit fill">edit</i>
                                    <i class="fa fa-trash">delete</i>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer " style="padding: 8px">
                            <p class="bone bone-type-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad alias aliquam amet aperiam aut
                            deleniti dolore dolores earum, facilis fugit hic maiores neque, perferendis quos recusandae
                            rerum saepe sed voluptate.
                            </p><p class="bone bone-type-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad alias aliquam amet aperiam aut
                            deleniti dolore dolores earum, facilis fugit hic maiores neque, perferendis quos recusandae
                            rerum saepe sed voluptate.
                            </p>
                            <p class="bone bone-type-text width-half">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad alias aliquam amet aperiam aut
                            deleniti dolore dolores earum, facilis fugit hic maiores neque, perferendis quos recusandae
                            rerum saepe sed voluptate.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">

                <div class="col-lg-offset-5 col-lg-7">
                    <div class="dataTables_paginate paging_simple_numbers pull-right" id="example1_paginate">
                        <ul class="pagination">
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.7/js/bootstrap-select.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.7/js/i18n/defaults-id_ID.min.js"></script>
    <script src="{{asset('admin/bower_components/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('admin/js/class/common.js')}}"></script>
@endpush

