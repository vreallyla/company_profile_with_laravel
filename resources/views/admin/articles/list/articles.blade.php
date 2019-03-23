@extends('layouts.admin')
@section('title','Articles')
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

        .box-footer:hover > center, .box-footer:focus > center {
            color: #fff;
            transition: all .5s;
            transform: scale(1.2);
        }

        .box-footer:hover, .box-footer:focus {
            background: #337ab7;
            transition: all .5s;

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
        }

        .img-left {
            width: 7em;
            height: 5.5em;
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
            top: 0px;
            left: 122px;
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
                        @foreach($cat as $row)
                            <option data-tokens="{{$row->name}}"
                                    value="{{$row->id}}">{{$row->name}}</option>
                        @endforeach
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

                @for($x = 0; $x <= 7; $x++)
                    <div class="col-lg-4 col-md-6 col-sm-6">

                        <!-- Profile Image -->
                        <div class="box box-default skeleton skeleton-animation-pulse">
                            <div class="box-body" style="max-height: 7.8em; padding: 8px">
                                <div class="img-left">
                                    <img class="bone bone-type-image bone-img-card" src="#"
                                         alt="">
                                </div>
                                <div class="content-card">
                                    <h3 class="with-border bone bone-type-heading width-half">hello world</h3>
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
                @endfor

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
    <script>
        let query,
            category, pagination = 8,
            maxTable = 1, currentTable = 1;
        const elCard = $('<div class="col-lg-4 col-md-6 col-sm-6">\n' +
            '                        <div class="box box-default">\n' +
            '                            <div class="box-body" >\n' +
            '                                <div class="img-left">\n' +
            '                                    <img src="#" alt="">\n' +
            '                                </div>\n' +
            '                                <div class="content-card">\n' +
            '                                    <h3>hello world</h3>\n' +
            '                                    <span class="help-block" style="font-size: 12px;"></span>\n' +
            '                                    <div class="btn-card">\n' +
            '                                        <i class="fa fa-edit fill">edit</i>\n' +
            '                                        <i class="fa fa-trash">delete</i>\n' +
            '                                    </div>\n' +
            '                                </div>\n' +
            '                            </div>\n' +
            '                            <div class="box-footer" style="padding: 8px">\n' +
            '                                <center></center>\n' +
            '                            </div>\n' +
            '                        </div>\n' +
            '                    </div>');
        const targetAppend = $('.row').eq(2);
        const loadCard = targetAppend.clone();
        const targetPaginate = $('.pagination');
        const getUrl = "{{route('articles.index')}}";
        const mUrl = "{{route('mArticleAdmin')}}";
        const sel = $('[name=category]');
        const entity = $('[name=entity]');
        const valSearch = $('[name=search]');
        const btnSearch = $('.btn-search');


        $('document').ready(function () {
            getItem();
            $('.selectpicker').selectpicker();
        });

        function getItem(other) {
            if (other) {
                targetAppend.empty().append(loadCard.html()).hide().fadeIn(500);
                targetPaginate.empty();
            }
            axios.get(getUrl, {
                params: {
                    state: (query || category ? true : false),
                    q: query,
                    cat: category,
                    paginate: pagination,
                    page: currentTable
                }
            })
                .then(res => {
                    targetAppend.empty();
                    if (res.data.data.length>0){
                        $.each(res.data.data, function (i, val) {
                            let cloneEl = elCard.clone();
                            cloneEl.find('img').prop('src', val.img);
                            cloneEl.find('h3').text(val.title);
                            cloneEl.find('span').text(moment(val.date.created_at).format('lll'));
                            cloneEl.find('center').text(val.category.name);
                            targetAppend.append(cloneEl);

                            targetAppend.children().eq(i).data('key', val.id).hide().fadeIn(500).find('center');
                            targetAppend.children().eq(i).find('.box-footer').data('key', val.category.id);

                            setPagination(targetPaginate, res.data.meta.last_page, res.data.meta.current_page);
                        });
                    } else{
                        targetAppend.html(notFoundIt());
                    }
                }).catch(err => {
                if (err.response.status === 400) {
                    redirectLogin();
                } else {
                    msgWeird();
                }
            });
        }

        targetAppend.on('click', '.fa-edit', function () {
            location.href = mUrl + '?key=' + $(this).closest('.col-lg-4').data('key');
        });
        targetAppend.on('click', '.fa-trash', function () {
            const keyArticle = $(this).closest('.col-lg-4').data('key');
            Swal.fire({
                title: 'Are you sure?',
                text: "The data would be removed!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {
                    axios.delete(getUrl + '/' + keyArticle)
                        .then(res => {
                            Swal.fire(
                                'Deleted!',
                                res.data.message,
                                'success'
                            );
                            getItem();
                        })
                        .catch(err => {
                            if (err.response.status === 400) {
                                redirectLogin();
                            } else {
                                msgWeird();
                            }
                        });

                }
            })
        });


        targetPaginate.on('click', 'li', function () {
            if (!$(this).hasClass('active')) {
                if ($(this).hasClass('previous')) {
                    currentTable = currentTable === 1 ? maxTable : (currentTable - 1);
                } else if ($(this).hasClass('page')) {
                    currentTable = $(this).children().text();
                } else if ($(this).hasClass('next')) {
                    currentTable = currentTable === maxTable ? 1 : currentTable + 1;
                } else if ($(this).hasClass('sub-next-page')) {
                    currentTable = parseInt($(this).prev().children().text()) + 1;
                } else if ($(this).hasClass('sub-prev-page')) {
                    currentTable = parseInt($(this).next().children().text()) - 1;
                } else {
                    msgChangeData();
                    location.reload();
                }
                getItem(true);
            }
        });

        sel.on('change', function () {
            changeCat(sel.val())
        });

        targetAppend.on('click', '.box-footer', function () {
            sel.selectpicker('val', $(this).data('key'));
            changeCat(sel.val())
        });

        entity.on('change', function () {
            const val = $(this).val();
            if (pagination === val) {
                msgDoble('entity');
            } else {
                pagination = val;
                getItem(true);
            }
        });

        function changeCat(key) {
            if (category === key) {
                msgDoble('category');
            } else {
                category = key;
                getItem(true);
            }

        }

        btnSearch.on('click', function () {
            searchSome(valSearch.val());
        });

        valSearch.on('keypress',function (e) {
            if(e.which == 13) {
                searchSome($(this).val());
            }
        });

        function searchSome(val) {
            if (query === val) {
                msgDoble('keyword');
            } else {
                query = val;
                getItem(true);
            }
        }

    </script>
@endpush

