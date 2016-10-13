<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8">

<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}" media="screen">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/css/fonts/ptsans/stylesheet.css') }}" media="screen">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/css/fonts/icomoon/style.css') }}" media="screen">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/css/login.css') }}" media="screen">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/css/mws-theme.css') }}" media="screen">

<title>小米后台 - 登录</title>
<link rel="icon" href="{{ asset('img/mi.jpg') }}"/>
</head>

<body>

    <div id="mws-login-wrapper">
        <div id="mws-login">
            <h1>管理员后台登录</h1>
            <div class="mws-login-lock"><i class="icon-lock"></i></div>
            <div id="mws-login-form">
                <form class="mws-form" action="{{ URL('admin/dologin') }}" method="post">
                    <input type='hidden' name='_token' value='{{ csrf_token() }}'>
                    <div class="mws-form-row">
                        <div class="mws-form-item">
                            <input type="text" name="user_name" class="mws-login-username" placeholder="用户名" autocomplete="off">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <div class="mws-form-item">
                            <input type="password" name="user_pass" class="mws-login-password required" placeholder="密码">
                        </div>
                    </div>
                    <div class="row mws-form-row">
                        <div class='col-xs-6'>
                            <input type="text" name="code" where='20' size='14' class="mws-login-password required" placeholder="验证码" autocomplete="off"/>
                        </div>
                        <div class='col-xs-6'>
                            <img src="{{ URL('admin/captcha/time()') }}" onclick="this.src='{{ URL('/admin/captcha') }}/'+Math.random()" alt="图片验证码" title="看不清换一张" class="icode_image code-image chkcode_img">
                        </div>
                    </div>
                    <div id="mws-login-remember" class="mws-form-row mws-inset">
                        <ul class="mws-form-list inline">
                            @if(session('msg'))
                                <li title='.icol-cross'>
                                    <li style='color:red' class="icol-cross">{{ session('msg') }}</li>
                                </li>
                            @else
                                <li>
                                    <input id="remember" type="checkbox" name='check' value='1'> 
                                    <label for="remember">记住密码</label>
                                </li>
                            @endif
                        </ul>
                    </div>
                    <div class="mws-form-row">
                        <input type="submit" value="登录" class="btn btn-success mws-login-button">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- JavaScript Plugins -->
    <script src="{{ URL('admin/js/libs/jquery-1.8.3.min.js') }}"></script>
    <script src="{{ URL('admin/js/libs/jquery.placeholder.min.js') }}"></script>
    <script src="{{ URL('admin/custom-plugins/fileinput.js') }}"></script>
    
    <!-- jQuery-UI Dependent Scripts -->
    <script src="{{ URL('admin/jui/js/jquery-ui-effects.min.js') }}"></script>

    <!-- Plugin Scripts -->
    <script src="{{ URL('admin/plugins/validate/jquery.validate-min.js') }}"></script>

    <!-- Login Script -->
    <script src="{{ URL('admin/js/core/login.js') }}"></script>
</body>
</html>
