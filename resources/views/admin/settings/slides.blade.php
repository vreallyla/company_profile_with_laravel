@extends('layouts.admin')
@section('title','slides')
@push('style')
    <link rel='stylesheet' href='https://unpkg.com/skeleton-placeholder'>
    <style>
        .img-carousel{
            width: 100%;
            height: 17em;
            border: 1px solid #fff;
        }
        .content-carousel{
            position: absolute;
            max-width: 88%;
            top: 28%;
            color: #fff;
            left: 2em;
            font-size: 1.3em;
            font-weight: 600;
            text-transform: uppercase;
        }
        .btn-carousel{
            position: absolute;
            top: 72%;
            left: 2.5em;
        }

        .overlay-carousel a{
            color: #fff;
        }

        .overlay-carousel a:not(.last-ico):after{
            content: ' | ';
        }
        .overlay-carousel{
            position: absolute;
            bottom: 1em;
            right: 2em;
            color: #fff;
            font-size: 1.2em;
        }
    </style>
    @endpush
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Slides
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
                <div class="col-md-6">
                    <div class="img-carousel">
                        <div class="overlay-carousel">
                            <a href="#"><i class="fa fa-edit">Edit</i></a>
                            <a class="last-ico" href="#"><i class="fa fa-trash">Hapus</i></a>
                        </div>
                        <div class="content-carousel">
                            Lorem ipsum dolor sit amet, consectetur adipisic consectetur adipisic adipis consectetur adipis.
                        </div>
                        <div class="btn-carousel">
                            <div class="btn btn-success" style="margin-right: 5px;">Hello</div>
                            <div class="btn btn-warning">hai kamu</div>
                        </div>
                        <img class="img-cover" src="https://fd204d43461da5218393-0b3ca8ff9ad90f3780bc876f4d2d02ae.ssl.cf1.rackcdn.com/uploads/2018/07/AV_Landscape-Hero-Contour-2993-1276x800.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
