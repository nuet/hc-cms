<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="">
    <link href="{{Gen::genOpt('store_favicon')}}" rel="shortcut icon" type="image/x-icon"/>
    <meta http-equiv="content-language" content="vi"/>
    <title>{{$title or Gen::genOpt('store_title')}}</title>
    <meta name="description" content="{{Gen::genOpt('store_description')}}"/>
    <meta name="keywords" content="{{Gen::genOpt('store_keywords')}}"/>

    <link href="{{asset('frontend/recreation-center/plugins/bootstrap-3.3.4/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/recreation-center/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}"
          rel="stylesheet">
    <link href="{{asset('frontend/recreation-center/theme/css/style.css')}}" rel="stylesheet">

    <script src="{{asset('frontend/recreation-center/plugins/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('frontend/recreation-center/plugins/bootstrap-3.3.4/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/recreation-center/theme/js/floatads.js')}}"></script>
    <script src="{{asset('frontend/recreation-center/theme/js/app.js')}}"></script>
</head>
<body class="home page page-id-31 page-template page-template-home-ban-hang page-template-home-ban-hang-php">
<div id="page" class="hfeed site">
    @section('header')
        @include('frontend.recreation-center.layouts.header')
    @show
    <div id="content">
        {{--@yield('main')--}}
    </div>
    @section('footer')
        @include('frontend.recreation-center.layouts.footer')
    @show
</div>
<script type="text/javascript">
    var clientWidth = window.screen.width;
    if (clientWidth >= 1024) {
        document.write('<div id="divAdRight" style="position: absolute; top: 0px; width:160px; height:600px; overflow:hidden;"> <a href="http://dongamruou.vn/gioi-thieu/" target="_blank"><img src="http://dongamruou.vn/wp-content/uploads/2016/03/vector-banner-trai-ok.jpg" alt="ruou-ngam-ha-noi"/> </a></div><div id="divAdLeft" style="position: absolute; top: 0px; width:160px; height:600px; overflow:hidden;"><a href="http://dongamruou.vn/gioi-thieu/" target="_blank"><img src="http://dongamruou.vn/wp-content/uploads/2015/11/vector-banner-phai2.gif" alt="ruou-ngam-ha-noi"/> </a></div>');

        var MainContentW = 1000;
        var LeftBannerW = 160;
        var RightBannerW = 160;
        var LeftAdjust = 10;
        var RightAdjust = 10;
        var TopAdjust = 80;
        ShowAdDiv();
        window.onresize = ShowAdDiv;
    }
</script>
</body>
</html>