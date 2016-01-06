<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ trans('interface.adminTitle') }}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="/admin/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/admin/dist/css/AdminLTE.css">
    <link rel="stylesheet" href="/admin/dist/css/skins/skin-blue.min.css">
    <link rel="stylesheet" href="/admin/dist/css/style.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="skin-blue sidebar-mini fixed">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Header -->
        @include('admin.template.header')

        <!-- =============================================== -->

        <!-- Left side column. contains the sidebar -->
        @include('admin.template.side-bar')

        <!-- =============================================== -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            @yield('content', 'Page...')
        </div>

    </div>

    <!-- jQuery 2.1.4 -->
    <script src="/admin/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="/admin/bootstrap/js/bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="/admin/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="/admin/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/admin/dist/js/app.min.js"></script>


    <script>
        $(document).ready(function(){
            var CSRF_TOKEN = $(this).find('input[name=_token]').val();
            $.ajax({
                url: $('#ajax-path').attr('data-path'),
                type: 'POST',
                data: {_token: CSRF_TOKEN},
                beforeSend:function(){
                    $('tbody').append("<div class='loading'></div>");
                },
                success: function (data) {
                    $('#view-table').find('thead').after(data);
                }
            });

            $(document).on('click', '.pagination a', function(e){
                e.preventDefault();
                var page = $(this).attr('href').split('page=')[1];
                getProducts(page);
            });
            function getProducts(page){
                console.log('get page - ' + page);
                $.ajax({
                    url: $('#ajax-path').attr('data-path')+'?page='+page,
                    type: 'POST',
                    data: {_token: CSRF_TOKEN}
                }).done(function(data){
                    $('#view-table').find('tbody').remove();
                    $('#view-table').find('tfoot').remove();
                    $('#view-table').find('thead').after(data);
                    location.hash = page;
                });
            }
        });
    </script>
</body>
</html>