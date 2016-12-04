<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="">
        <link href="{{Gen::genOpt('store_favicon')}}" rel="shortcut icon" type="image/x-icon" />
        <meta http-equiv="content-language" content="vi" />
        <title>{{$title or Gen::genOpt('store_title')}}</title>
        <meta name="description" content="{{Gen::genOpt('store_description')}}" />
        <meta name="keywords" content="{{Gen::genOpt('store_keywords')}}" />
        
        <link href="{{asset('front/bds/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('front/bds/font-awesome-4.6.3/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{asset('front/bds/bootstrap-select-1.11.0/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
        <link href="{{asset('front/bds/css/style.css')}}" rel="stylesheet">
        <link href="{{asset('front/bds/css/responsive.css')}}" rel="stylesheet">
        <script src="{{asset('front/bds/js/jquery.min.js')}}"></script>
        <script src="{{asset('front/bds/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('front/bds/bootstrap-select-1.11.0/dist/js/bootstrap-select.min.js')}}"></script>
        <script src="{{asset('front/bds/js/jquery-cookie-master/src/jquery.cookie.js')}}"></script>
        <script src="{{asset('front/bds/js/jssocials-1.3.1/dist/jssocials.min.js')}}"></script>
        <script src="{{asset('front/bds/js/main.js')}}"></script>
    </head>
    <body class="front-page">
        <div id="fb-root"></div>
        <script>
            window.fbAsyncInit = function(){
            FB.init({
                appId: '1205774589445826', status: true, cookie: true, xfbml: true }); 
            };
            (function(d, debug){var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
                if(d.getElementById(id)) {return;}
                js = d.createElement('script'); js.id = id; 
                js.async = true;js.src = "//connect.facebook.net/en_US/all" + (debug ? "/debug" : "") + ".js";
                ref.parentNode.insertBefore(js, ref);}(document, /*debug*/ false));
            function postToFeed(title, desc, url, image){
                var obj = {method: 'feed',link: url, picture: image,name: title,description: desc};
                function callback(response){}
                FB.ui(obj, callback);
            }
        </script>
        <div class="page-wrapper">
            @section('header')
            @include('front.bds.layouts.header')
            @show
            <div id="content">
                @yield('main')
            </div>
            @section('footer')
            @include('front.bds.layouts.footer')
            @show
        </div>
    </body>
</html>