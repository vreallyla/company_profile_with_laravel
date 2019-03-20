@extends('layouts.admin')
@section('title','Categories Data')
@push('style')
    <link rel='stylesheet' href='https://unpkg.com/skeleton-placeholder'>
    <style>
        .box-body {
            height: 7em;
        }

        .icon-skeleton {
            width: 15px !important;
            height: auto !important;
            top: 11px !important;
            position: relative !important;
        }


    </style>
@endpush

@section('content')
    <div class="content-wrapper">

        <section class="content-header">
            <h1>
                Articles Categories
                <button class="btn btn-default btn-xs">Add <i class="fa fa-plus"></i></button>

            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Tables</a></li>
                <li class="active">Simple</li>
            </ol>
        </section>
        <section class="content">

            <div class="row margin-bottom">
                <div class="col-lg-12">
                    <div class="pull-right box-tools">
                        <form action="#">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control pull-right"
                                       placeholder="Search">

                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="box box-default skeleton skeleton-animation-pulse">
                        <div class="box-header">
                            <h3 class="box-title  with-border bone bone-type-heading width-quarter">Expandable</h3>

                            <div class="box-tools pull-right">
                                <button type="button" data-toggle="tooltip" title="edit" class="btn btn-box-tool"
                                        data-widget="collapse"><i
                                        class="fa fa-edit bone bone-type-image bone-style-round icon-skeleton"></i>
                                </button>
                                <button type="button" data-toggle="tooltip" title="hapus" class="btn btn-box-tool"
                                        data-widget="collapse"><i
                                        class="fa fa-trash bone bone-type-image bone-style-round icon-skeleton"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                        class="fa fa-minus bone bone-type-image bone-style-round icon-skeleton"></i>
                                </button>
                            </div>
                            <!-- /.box-tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body" style="">
                            <p class="bone bone-style-list bone-type-text">
                            </p>
                            <p class="bone bone-style-list bone-type-text">
                            </p>
                            <p class="bone bone-style-list bone-type-text width-quarter">
                            </p>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="box box-default skeleton skeleton-animation-pulse">
                        <div class="box-header">
                            <h3 class="box-title  with-border bone bone-type-heading width-quarter">Expandable</h3>

                            <div class="box-tools pull-right">
                                <button type="button" data-toggle="tooltip" title="edit" class="btn btn-box-tool"
                                        data-widget="collapse"><i
                                        class="fa fa-edit bone bone-type-image bone-style-round icon-skeleton"></i>
                                </button>
                                <button type="button" data-toggle="tooltip" title="hapus" class="btn btn-box-tool"
                                        data-widget="collapse"><i
                                        class="fa fa-trash bone bone-type-image bone-style-round icon-skeleton"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                        class="fa fa-minus bone bone-type-image bone-style-round icon-skeleton"></i>
                                </button>
                            </div>
                            <!-- /.box-tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body" style="">
                            <p class="bone bone-style-list bone-type-text">
                            </p>
                            <p class="bone bone-style-list bone-type-text">
                            </p>
                            <p class="bone bone-style-list bone-type-text width-quarter">
                            </p>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="box box-default skeleton skeleton-animation-pulse">
                        <div class="box-header">
                            <h3 class="box-title  with-border bone bone-type-heading width-quarter">Expandable</h3>

                            <div class="box-tools pull-right">
                                <button type="button" data-toggle="tooltip" title="edit" class="btn btn-box-tool"
                                        data-widget="collapse"><i
                                        class="fa fa-edit bone bone-type-image bone-style-round icon-skeleton"></i>
                                </button>
                                <button type="button" data-toggle="tooltip" title="hapus" class="btn btn-box-tool"
                                        data-widget="collapse"><i
                                        class="fa fa-trash bone bone-type-image bone-style-round icon-skeleton"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                        class="fa fa-minus bone bone-type-image bone-style-round icon-skeleton"></i>
                                </button>
                            </div>
                            <!-- /.box-tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body" style="">
                            <p class="bone bone-style-list bone-type-text">
                            </p>
                            <p class="bone bone-style-list bone-type-text">
                            </p>
                            <p class="bone bone-style-list bone-type-text width-quarter">
                            </p>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="box box-default skeleton skeleton-animation-pulse">
                        <div class="box-header">
                            <h3 class="box-title  with-border bone bone-type-heading width-quarter">Expandable</h3>

                            <div class="box-tools pull-right">
                                <button type="button" data-toggle="tooltip" title="edit" class="btn btn-box-tool"
                                        data-widget="collapse"><i
                                        class="fa fa-edit bone bone-type-image bone-style-round icon-skeleton"></i>
                                </button>
                                <button type="button" data-toggle="tooltip" title="hapus" class="btn btn-box-tool"
                                        data-widget="collapse"><i
                                        class="fa fa-trash bone bone-type-image bone-style-round icon-skeleton"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                        class="fa fa-minus bone bone-type-image bone-style-round icon-skeleton"></i>
                                </button>
                            </div>
                            <!-- /.box-tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body" style="">
                            <p class="bone bone-style-list bone-type-text">
                            </p>
                            <p class="bone bone-style-list bone-type-text">
                            </p>
                            <p class="bone bone-style-list bone-type-text width-quarter">
                            </p>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="box box-default skeleton skeleton-animation-pulse">
                        <div class="box-header">
                            <h3 class="box-title  with-border bone bone-type-heading width-quarter">Expandable</h3>

                            <div class="box-tools pull-right">
                                <button type="button" data-toggle="tooltip" title="edit" class="btn btn-box-tool"
                                        data-widget="collapse"><i
                                        class="fa fa-edit bone bone-type-image bone-style-round icon-skeleton"></i>
                                </button>
                                <button type="button" data-toggle="tooltip" title="hapus" class="btn btn-box-tool"
                                        data-widget="collapse"><i
                                        class="fa fa-trash bone bone-type-image bone-style-round icon-skeleton"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                        class="fa fa-minus bone bone-type-image bone-style-round icon-skeleton"></i>
                                </button>
                            </div>
                            <!-- /.box-tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body" style="">
                            <p class="bone bone-style-list bone-type-text">
                            </p>
                            <p class="bone bone-style-list bone-type-text">
                            </p>
                            <p class="bone bone-style-list bone-type-text width-quarter">
                            </p>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="box box-default skeleton skeleton-animation-pulse">
                        <div class="box-header">
                            <h3 class="box-title  with-border bone bone-type-heading width-quarter">Expandable</h3>

                            <div class="box-tools pull-right">
                                <button type="button" data-toggle="tooltip" title="edit" class="btn btn-box-tool"
                                        data-widget="collapse"><i
                                        class="fa fa-edit bone bone-type-image bone-style-round icon-skeleton"></i>
                                </button>
                                <button type="button" data-toggle="tooltip" title="hapus" class="btn btn-box-tool"
                                        data-widget="collapse"><i
                                        class="fa fa-trash bone bone-type-image bone-style-round icon-skeleton"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                        class="fa fa-minus bone bone-type-image bone-style-round icon-skeleton"></i>
                                </button>
                            </div>
                            <!-- /.box-tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body" style="">
                            <p class="bone bone-style-list bone-type-text">
                            </p>
                            <p class="bone bone-style-list bone-type-text">
                            </p>
                            <p class="bone bone-style-list bone-type-text width-quarter">
                            </p>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="box box-default skeleton skeleton-animation-pulse">
                        <div class="box-header">
                            <h3 class="box-title  with-border bone bone-type-heading width-quarter">Expandable</h3>

                            <div class="box-tools pull-right">
                                <button type="button" data-toggle="tooltip" title="edit" class="btn btn-box-tool"
                                        data-widget="collapse"><i
                                        class="fa fa-edit bone bone-type-image bone-style-round icon-skeleton"></i>
                                </button>
                                <button type="button" data-toggle="tooltip" title="hapus" class="btn btn-box-tool"
                                        data-widget="collapse"><i
                                        class="fa fa-trash bone bone-type-image bone-style-round icon-skeleton"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                        class="fa fa-minus bone bone-type-image bone-style-round icon-skeleton"></i>
                                </button>
                            </div>
                            <!-- /.box-tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body" style="">
                            <p class="bone bone-style-list bone-type-text">
                            </p>
                            <p class="bone bone-style-list bone-type-text">
                            </p>
                            <p class="bone bone-style-list bone-type-text width-quarter">
                            </p>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="box box-default skeleton skeleton-animation-pulse">
                        <div class="box-header">
                            <h3 class="box-title  with-border bone bone-type-heading width-quarter">Expandable</h3>

                            <div class="box-tools pull-right">
                                <button type="button" data-toggle="tooltip" title="edit" class="btn btn-box-tool"
                                        data-widget="collapse"><i
                                        class="fa fa-edit bone bone-type-image bone-style-round icon-skeleton"></i>
                                </button>
                                <button type="button" data-toggle="tooltip" title="hapus" class="btn btn-box-tool"
                                        data-widget="collapse"><i
                                        class="fa fa-trash bone bone-type-image bone-style-round icon-skeleton"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                        class="fa fa-minus bone bone-type-image bone-style-round icon-skeleton"></i>
                                </button>
                            </div>
                            <!-- /.box-tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body" style="">
                            <p class="bone bone-style-list bone-type-text">
                            </p>
                            <p class="bone bone-style-list bone-type-text">
                            </p>
                            <p class="bone bone-style-list bone-type-text width-quarter">
                            </p>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
            </div>
        </section>
    </div>
    @include('admin.articles.categories.categoriesModal')
@endsection
@push('js')
    <script>
        $(function () {
            const modali = $('.modal');
            const formManipulate = modali.find('form');
            const objAppend = $('.row').eq(2);
            const inputSearch = $('[name=table_search]');
            const formSearch = inputSearch.closest('form');
            const urlCat = "{{route('article-categories.index')}}";
            const cardTemp = $('                <div class="col-lg-4 col-sm-6 col-xs-12">\n' +
                '                    <div class="box box-default">\n' +
                '                        <div class="box-header">\n' +
                '                            <h3 class="box-title">Expandable</h3>\n' +
                '\n' +
                '                            <div class="box-tools pull-right">\n' +
                '                                <button type="button" data-toggle="tooltip" title="edit" class="btn btn-box-tool"\n' +
                '><i class="fa fa-edit"></i>\n' +
                '                                </button>\n' +
                '                                <button type="button" data-toggle="tooltip" title="hapus" class="btn btn-box-tool"\n' +
                '><i class="fa fa-trash"></i>\n' +
                '                                </button>\n' +
                '                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i\n' +
                '                                        class="fa fa-minus bone bone-type-image"></i>\n' +
                '                                </button>\n' +
                '                            </div>\n' +
                '                        </div>\n' +
                '                        <div class="box-body" style="">\n' +
                '                        </div>\n' +
                '                    </div>\n' +
                '                </div>\n');

            $('document').ready(function () {
                getItem();
            });

            function getItem(query) {
                axios.get(urlCat, {
                    params: {
                        state: query?true:false,
                        q: query
                    }
                })
                    .then((res) => {
                        objAppend.empty();
                        $.each(res.data.data, function (i, val) {
                            let fillWithCard = cardTemp.clone();
                            let headerCard = fillWithCard.find('.box-title');
                            let bodyCard = fillWithCard.find('.box-body');
                            formSearch.find('[type="submit"]').empty().append('<i class="fa fa-search"></i>')
                            headerCard.text(val.name);
                            bodyCard.text(val.description);
                            objAppend.append(fillWithCard);

                            objAppend.children().eq(i).data('key', val.id).hide().fadeIn(300);
                        })
                    }).catch((err) => {
                    formSearch.find('[type="submit"]').empty().append('<i class="fa fa-search"></i>')
                });
            }

            function createItem(data, load) {
                axios.post(urlCat, data)
                    .then(res => {
                        load.hide();
                        modali.modal('hide');
                        getItem();
                        Swal.fire(
                            'Created',
                            res.data.message,
                            'success'
                        );
                    }).catch(err => {

                    if (err.response.status === 422) {
                        // alert('a');
                        // console.log(err.response);
                        $.each(err.response.data.errors, function (i, val) {
                            $('.modal').find('[name=' + i + ']').next().text(val).parent().addClass('has-error');
                        })
                    }
                    load.hide();
                });
            }

            function updateItem(data, load) {
                axios.put(urlCat + '/' + formManipulate.data('key'), {
                    data: {
                        name: modali.find('[name=name]').val(),
                        description: modali.find('[name=description]').val(),
                    }
                })
                    .then(res => {
                        load.hide();
                        modali.modal('hide');
                        getItem();
                        Swal.fire(
                            'Updated!',
                            res.data.message,
                            'success'
                        );
                    }).catch(err => {

                    if (err.response.status === 422) {
                        // alert('a');
                        // console.log(err.response);
                        $.each(err.response.data.errors, function (i, val) {
                            console.log(val);
                            $('.modal').find('[name=' + i + ']').next().text(val).parent().addClass('has-error');
                        })
                    }
                    load.hide();
                });
            }

            formSearch.on('submit', function (e) {
                e.preventDefault();
                $(this).find('[type="submit"]').empty().append('<i class="fa fa-circle-o-notch fa-spin"></i>');
                getItem($(this).find('input').val());
            });

            $('.btn-xs').on('click', function () {
                $('.modal').modal('show');
                formManipulate[0].reset();
                modali.find('.btn-primary').text('Save');
                formManipulate.data('key', '');

            });

            objAppend.on('click', '.fa-edit', function () {
                const keyN = $(this).closest('.col-lg-4').data('key');
                modali.find('.btn-primary').text('Save Changes');
                axios.get(urlCat + '/' + keyN)
                    .then(res => {
                        $.each(res.data.data, function (i, val) {
                            modali.find('[name=' + i + ']').val(val);
                        });
                        modali.modal('show');
                        formManipulate.data('key', keyN);
                    })
                    .catch(err => {
                        console.log(err.response);
                    })
            });

            objAppend.on('click', '.fa-trash', function () {
                const keyCategory = $(this).closest('.col-lg-4').data('key');
                Swal.fire({
                    title: 'Are you sure?',
                    text: "all refrences would be removed!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.value) {
                        axios.delete(urlCat + '/' + keyCategory)
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

            inputSearch.on('keypress',function(e) {
                if(e.which == 13) {
                   formManipulate.submit();
                }
            });

            formManipulate.on('submit', (e) => {
                e.preventDefault();
                const loading = $(this).find('.overlay');
                const formFunc = new FormData();
                formFunc.append('name', modali.find('[name=name]').val());
                formFunc.append('description', modali.find('[name=description]').val());

                $(this).find('.help-block').empty().parent().removeClass('has-error');
                loading.show();

                if (formManipulate.data('key')) {
                    updateItem(formFunc, loading);
                } else {
                    createItem(formFunc, loading);
                }
            });


        })
    </script>
@endpush
