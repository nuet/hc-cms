<!DOCTYPE html>
<html>
    <head>
        <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
        <meta content="utf-8" http-equiv="encoding">
        <title>Admin page</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Bootstrap 3.3.2 -->
        <link href="{{asset('backend/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />    
        <!-- FontAwesome 4.3.0 -->
        <link href="{{asset('backend/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Ionicons 2.0.0 -->
        <link href="{{asset('backend/plugins/ionicons/ionicons.min.css')}}" rel="stylesheet" type="text/css" />    
        <!-- Theme style -->
        <link href="{{asset('backend/dist/css/AdminLTE.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- AdminLTE Skins. Choose a skin from the css/skins 
             folder instead of downloading all of them to reduce the load. -->
        <link href="{{asset('backend/dist/css/skins/_all-skins.min.css')}}" rel="stylesheet" type="text/css" />
        @section('css')
        @show
        <!-- jQuery 2.1.3 -->
        <script src="{{asset('backend/plugins/jQuery/jQuery-2.1.3.min.js')}}"></script>
        <script src="{{asset('backend/plugins/jQueryUI/jquery-ui.min.js')}}"></script>
        <!-- Bootstrap 3.3.2 JS -->
        <script src="{{asset('backend/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>  
        <script src="{{asset('backend/plugins/blockui/jquery.blockUI.js')}}" type="text/javascript"></script>  
        <!-- iCheck -->
        <script src="{{asset('backend/plugins/iCheck/icheck.min.js')}}" type="text/javascript"></script>
        <!-- Slimscroll -->
        <script src="{{asset('backend/plugins/slimScroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
        <!-- FastClick -->
        <script src='{{asset('backend/plugins/fastclick/fastclick.min.js')}}'></script>
        <!-- CK editor -->
        <script src="{{asset('backend/plugins/ckeditor/ckeditor.js')}}" type="text/javascript"></script>
        <script src="{{asset('backend/plugins/ckfinder/ckfinder.js')}}" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="{{asset('backend/dist/js/app.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('backend/js/until.js')}}" type="text/javascript"></script>
    </head>
    <body class="skin-blue fixed">
        <div class="wrapper">
            @section('header')
            @include('backend.layouts.header')
            @show

            @section('sidebar')
            @include('backend.layouts.sidebar')
            @show
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                @yield('content')
            </div><!-- /.content-wrapper -->

            @section('footer')
            @include('backend.layouts.footer')
            @show
        </div><!-- ./wrapper -->
        <script>
            $(document).ajaxStart(function () {
                $.blockUI({ message: '<h1>Loading...</h1>' });
            });
            $(document).ajaxStop($.unblockUI);
        </script>
        @section('js')
        @show
    </body>
</html>