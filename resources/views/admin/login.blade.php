<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('admin/css/fontawesome/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('admin/bower_components/Ionicons/css/ionicons.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('admin/css/AdminLTE.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('admin/plugins/iCheck/square/blue.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="#"><img src="{{asset('/img/core-img/logo.png')}}"
                                         style="width: 4.5em"
                                         alt="{{env('APP_NAME')}}"></a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form action="#" method="post">
            <div class="form-group has-feedback">
                <input type="email" name="email" class="form-control" placeholder="Email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" name="password" class="form-control" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>

            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox"> Remember Me
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
                </div>
                <!-- /.col -->
            </div>
        </form>


        <a href="#">I forgot my password</a><br>

    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="{{asset('admin/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('admin/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- iCheck -->
<script src="{{asset('admin/plugins/iCheck/icheck.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script src="{{asset('admin/js/axios.js')}}"></script>


<script>
    $(function () {
        const errorAlert = '<span class="help-block" style="color: #ee150d;"> The email or password wrong\n' +
            '                </span>';

        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' /* optional */
        });

        $('form').on('submit', function (e) {
            e.preventDefault();
            const formAtt = $('<form action="{{route('reAdmin')}}" class="sub-re" method="POST" style=""></form>');
            const inputAtt = $('<input type="hidden">');
            const objAdd = $('.login-box');
            const noticeWrong = $(this).find('.help-block');
            const formFunc = new FormData($(this)[0]);

            const fieldForm = $(this).find('input');
            const btnForm = $(this).find('[type=submit]');

            fieldForm.prop('readonly', true);
            btnForm.html('<i class="fa fa-circle-o-notch loading-spin"></i>');

            noticeWrong.remove();

            axios.post('{{route('loginApi')}}', formFunc)
                .then((data) => {
                    objAdd.append(
                        formAtt.append(
                            inputAtt.prop('name', 'name').prop('outerHTML') +
                            inputAtt.prop('name', 'ava').prop('outerHTML') +
                            inputAtt.prop('name', 'token').prop('outerHTML') +
                            '{{csrf_field()}}'
                        )
                    );
                    objAdd.find('[name=name]').val(data.data.data.name);
                    objAdd.find('[name=ava]').val(data.data.data.name);
                    objAdd.find('[name=token]').val(data.data.access_token);

                    objAdd.children('.sub-re').submit();
                }).catch((er) => {
                fieldForm.prop('readonly', false);
                btnForm.text('Login');
                if (er.response.status === 401) {
                    $('.has-feedback').eq(1).append(errorAlert);
                } else {
                    Swal.fire({
                        type: 'warning',
                        title: 'Server not response',
                        showConfirmButton: false,
                        timer: 1500
                    })
                }

            });
        });
    });

</script>
</body>
</html>
