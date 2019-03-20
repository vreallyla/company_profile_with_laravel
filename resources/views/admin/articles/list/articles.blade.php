@extends('layouts.admin')
@section('title','Articles')
@push('style')
    <link rel='stylesheet' href='https://unpkg.com/skeleton-placeholder'>
    <style>
        .bone-img-card {
            width: 7em !important;
            height: 5.5em !important;
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

        .btn-card i:focus, .btn-card i:hover {
            color: #0b3e6f;
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
                <a href="{{route('mArticleAdmin')}}" class="btn btn-default btn-xs" style="">Add <i class="fa fa-plus"></i></a>

            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Tables</a></li>
                <li class="active">Simple</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                @for($x = 0; $x <= 7; $x++)
                    <div class="col-lg-4 col-md-6 col-sm-6">

                        <!-- Profile Image -->
                        <div class="box box-default skeleton skeleton-animation-pulse" style="max-height: 8em;">
                            <div class="box box-body">
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
    <script src="{{asset('admin/bower_components/moment/min/moment.min.js')}}"></script>
    <script>
        let query,
            category, pagination = 8,
            pagePrev = '&laquo; <span class="hidden-sm hidden-md hidden-lg">Previous</span>',
            pageNext = '<span class="hidden-sm hidden-md hidden-lg">Next</span> &raquo;',
            maxTable = 1, currentTable = 1;
        const elCard = $('<div class="col-lg-4 col-md-6 col-sm-6">\n' +
            '                    <!-- Profile Image -->\n' +
            '                    <div class="box box-default" style="max-height: 8em;">\n' +
            '                        <div class="box box-body">\n' +
            '                        <div class="img-left">\n' +
            '                            <img src="#" alt="">\n' +
            '                        </div>\n' +
            '                            <div class="content-card">\n' +
            '                                <h3>hello world</h3>\n' +
            '                                <span class="help-block" style="font-size: 12px;"></span>\n' +
            '                                <div class="btn-card">\n' +
            '                                    <i class="fa fa-edit fill">edit</i>\n' +
            '                                    <i class="fa fa-trash">delete</i>\n' +
            '                                </div>\n' +
            '                            </div>\n' +
            '\n' +
            '                        </div>\n' +
            '                        <!-- /.box-body -->\n' +
            '                    </div>\n' +
            '                </div>');
        const targetAppend = $('.row').eq(1);
        const loadCard = targetAppend.clone();
        const targetPaginate = $('.pagination');
        const getUrl = "{{route('articles.index')}}";
        const mUrl = "{{route('mArticleAdmin')}}";


        $('document').ready(function () {
            getItem();
        });


        function setPagination(obj, max, curr) {
            maxTable = max = parseInt(max);
            currentTable = curr = parseInt(curr);
            let nextPagination = '<li class="next"><a href="javascript:void(0);">' + pageNext + '</a></li>',
                prevPagination = '<li class="previous"><a href="javascript:void(0);">' + pagePrev + '</a></li>',
                subNextPagination = '<li class="sub-next-page"><a href="javascript:void(0);">\n' + '...' +
                    '</a></li>',
                subPrevPagination = '<li class="sub-prev-page"><a href="javascript:void(0);">\n' + '...' +
                    '</a></li>',
                maxPagination = '<li class="page"><a href="javascript:void(0);">\n' + max +
                    '</a></li>',
                minPagination = '<li class="page"><a href="javascript:void(0);">\n' + 1 +
                    '</a></li>', paginationFill = '';

            if (max === 1) {
                obj.hide();
            } else {
                if (7 > max) {
                    paginationFill = loopPaginate(1, max, curr);

                } else if (5 > curr) {
                    paginationFill += loopPaginate(1, 4, curr);
                    paginationFill += subNextPagination + maxPagination;

                } else if ((max - 3) < curr) {
                    paginationFill = minPagination + subPrevPagination;
                    paginationFill += loopPaginate((curr - 2), max, curr);
                } else if (5 <= curr) {
                    paginationFill = minPagination + subPrevPagination;
                    paginationFill += loopPaginate((curr - 2), (curr + 2), curr);
                    paginationFill += subNextPagination + maxPagination;
                }
                obj.fadeIn(500);
                obj.empty().append(prevPagination + paginationFill + nextPagination);
            }

        };

        function loopPaginate(start, end, curr) {
            let paginationFill = '';
            for (let i = start; i <= end; i++) {
                paginationFill += i === curr ? '<li class="active"><a href="javascript:void(0);">\n' + i +
                    '</a></li>' : '<li class="page"><a href="javascript:void(0);">\n' + i +
                    '</a></li>';
            }
            return paginationFill;
        };

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
                    $.each(res.data.data, function (i, val) {
                        let cloneEl = elCard.clone();
                        cloneEl.find('img').prop('src', val.img);
                        cloneEl.find('h3').text(val.title);
                        cloneEl.find('span').text(moment(val.date.created_at).format('lll'));
                        targetAppend.append(cloneEl);

                        targetAppend.children().eq(i).data('key', val.id).hide().fadeIn(500);

                        setPagination(targetPaginate, res.data.meta.last_page, res.data.meta.current_page);
                    });
                }).catch(err => {

            });
        }

        targetAppend.on('click', '.fa-edit', function () {
            location.href = mUrl +'?key='+ $(this).closest('.col-lg-4').data('key');
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
                            console.log(err);
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
                    Swal.fire(
                        'Notice',
                        "Some data changes",
                        'warning'
                    );
                    location.reload();
                }
                getItem(true);
            }
        });

    </script>
@endpush

