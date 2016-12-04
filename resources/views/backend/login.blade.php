<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE 2 | Log in</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Bootstrap 3.3.2 -->
        <link href="{{asset('backend/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Font Awesome Icons -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="{{asset('backend/dist/css/AdminLTE.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- iCheck -->
        <link href="{{asset('backend/plugins/iCheck/square/blue.css')}}" rel="stylesheet" type="text/css" />
    </head>
    <body class="login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="../../index2.html"><b>Admin</b></a>
            </div><!-- /.login-logo -->
                @if(count($errors))
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            <div class="login-box-body">
                <p class="login-box-msg">Sign in to start your session</p>
                <form class="form-login" method="post" action="{{route('do.login')}}" novalidate>
                    <input type="hidden" name="_token" value="{{ csrf_token()}}">
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" name="username" placeholder="username"/>
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" name="password" placeholder="Password"/>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-8">    
                            <div class="checkbox icheck">
                                <label>
                                    <input type="checkbox" name="remember"> Remember Me
                                </label>
                            </div>                        
                        </div><!-- /.col -->
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                        </div><!-- /.col -->
                    </div>
                </form>
                <a href="#">I forgot my password</a><br>

            </div><!-- /.login-box-body -->
        </div><!-- /.login-box -->

        <script src="{{asset('backend/plugins/jQuery/jQuery-2.1.3.min.js')}}"></script>
        <script src="//code.jquery.com/ui/1.10.4/jquery-ui.min.js"></script>
        <!-- Bootstrap 3.3.2 JS -->
        <script src="{{asset('backend/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>  
        <script src="{{asset('backend/plugins/blockui/jquery.blockUI.js')}}" type="text/javascript"></script>  
        <!-- iCheck -->
        <script src="{{asset('backend/plugins/iCheck/icheck.min.js')}}" type="text/javascript"></script>
        <script>
            $(function() {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' // optional
                });
            });
        </script>
    </body>
</html>