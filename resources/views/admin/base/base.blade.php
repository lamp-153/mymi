<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8">

<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
<link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">

<!-- Plugin Stylesheets first to ease overrides -->
<link rel="stylesheet" type="text/css" href="{{ asset('admin/plugins/colorpicker/colorpicker.css') }}" media="screen">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/custom-plugins/wizard/wizard.css') }}" media="screen">

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="{{ asset('admin/bootstrap/css/bootstrap.min.css') }}" media="screen">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/css/fonts/ptsans/stylesheet.css') }}" media="screen">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/css/fonts/icomoon/style.css') }}" media="screen">

<link rel="stylesheet" type="text/css" href="{{ asset('admin/css/mws-style.css') }}" media="screen">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/css/icons/icol16.css') }}" media="screen">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/css/icons/icol32.css') }}" media="screen">

<!-- Demo Stylesheet -->
<link rel="stylesheet" type="text/css" href="{{ asset('admin/css/demo.css') }}" media="screen">

<!-- jQuery-UI Stylesheet -->
<link rel="stylesheet" type="text/css" href="{{ asset('admin/jui/css/jquery.ui.all.css') }}" media="screen">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/jui/jquery-ui.custom.css') }}" media="screen">

<!-- Theme Stylesheet -->
<link rel="stylesheet" type="text/css" href="{{ asset('admin/css/mws-theme.css') }}" media="screen">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/css/themer.css') }}" media="screen">

<!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}" media="screen"> -->

<title>@yield('title')</title>
<link rel="icon" href="{{ asset('img/mi.jpg') }}"/>
</head>

<body>
	<!-- Header -->
	<div id="mws-header" class="clearfix">
    
    	<!-- Logo Container -->
    	<div id="mws-logo-container">
        
        	<!-- Logo Wrapper, images put within this wrapper will always be vertically centered -->
        	<div id="mws-logo-wrap">
            	<img src="{{ asset('admin/images/logo.png') }}" alt="mymi">
			</div>
        </div>
        
        <!-- User Tools (notifications, logout, profile, change password) -->
        <div id="mws-user-tools" class="clearfix">
            
            <!-- Notifications -->
            <div id="mws-user-notif" class="mws-dropdown-menu">
                <a href="{{ URL('/')}}"  class="mws-dropdown-trigger"><i class="icon-archive" title='前台首页'></i></a>
            </div>

        	<!-- Notifications -->
        	<div id="mws-user-notif" class="mws-dropdown-menu">
            	<a href="#" data-toggle="dropdown" class="mws-dropdown-trigger"><i class="icon-exclamation-sign"></i></a>
                
                <!-- Unread notification count -->
                <span class="mws-dropdown-notif">35</span>
                
                <!-- Notifications dropdown -->
                <div class="mws-dropdown-box">
                	<div class="mws-dropdown-content">
                        <ul class="mws-notifications">
                        	<li class="read">
                            	<a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="read">
                            	<a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="unread">
                            	<a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="unread">
                            	<a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="mws-dropdown-viewall">
	                        <a href="#">View All Notifications</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Messages -->
            <div id="mws-user-message" class="mws-dropdown-menu">
            	<a href="#" data-toggle="dropdown" class="mws-dropdown-trigger"><i class="icon-envelope"></i></a>
                
                <!-- Unred messages count -->
                <span class="mws-dropdown-notif">35</span>
                
                <!-- Messages dropdown -->
                <div class="mws-dropdown-box">
                	<div class="mws-dropdown-content">
                        <ul class="mws-messages">
                        	<li class="read">
                            	<a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="read">
                            	<a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="unread">
                            	<a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="unread">
                            	<a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="mws-dropdown-viewall">
	                        <a href="#">View All Messages</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- User Information and functions section -->
            <div id="mws-user-info" class="mws-inset">
            	<!-- User Photo -->
            	<div id="mws-user-photo">
                	<img src="{{ asset('uploads/user') }}/{{ session('adminuser')->user_avatar }}">
                </div>
                <!-- Username and Functions -->
                <div id="mws-user-functions">
                    <div id="mws-username">
                        hello : {{ session('adminuser')->user_name}}
                    </div>
                    <ul>
                    	<li><a href="#">个人中心</a></li>
                        <li><a href="{{ URL('admin/logout') }}">退出 </a></li> 
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Start Main Wrapper -->
    <div id="mws-wrapper">
    
    	<!-- Necessary markup, do not remove -->
		<div id="mws-sidebar-stitch"></div>
		<div id="mws-sidebar-bg"></div>
        
        <!-- Sidebar Wrapper -->
        <div id="mws-sidebar">
        
            <!-- Hidden Nav Collapse Button -->
            <div id="mws-nav-collapse">
                <span></span>
                <span></span>
                <span></span>
            </div>
            
            <!-- Main Navigation -->
            <div id="mws-navigation">
                <ul>
                    <li><a href="{{ URL('admin/index') }}"><i class="icon-home"></i> 首页</a></li>
                    <li>
                        <a href="#"><i class="icon-user"></i> 用户管理</a>
                        <ul>
                            <li><a href="{{ URL('admin/user') }}">用户列表</a></li>
                            <li><a href="{{ URL('admin/user/create') }}">添加用户</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-users"></i> 管理员管理</a>
                        <ul class='closed'>
                            <li><a href="{{ URL('admin/admin') }}">管理员列表</a></li>
                            <li><a href="{{ URL('admin/admin/create') }}">添加管理员</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-list"></i> 分类管理</a>
                        <ul class='closed'>
                            <li><a href="{{ URL('admin/category') }}">分类列表</a></li>
                            <li><a href="{{ URL('admin/category/create') }}">添加分类</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-tablet"></i> 商品管理</a>
                        <ul class='closed'>
                            <li><a href="{{ URL('admin/goods') }}">商品列表</a></li>
                            <li><a href="{{ URL('admin/goods/create') }}">添加商品</a></li>
                        </ul>
                    </li>
                    <li><a href="table.html"><i class="icon-table"></i> 统计管理</a></li>
                    <li><a href="widgets.html"><i class="icon-cogs"></i> 评论管理</a></li>
                    <li><a href="typography.html"><i class="icon-font"></i> 配送管理</a></li>
                    <li><a href="grids.html"><i class="icon-th"></i> 退货管理</a></li>
                    <li>
                        <a href="#"><i class="icon-cog"></i> 系统管理</a>
                        <ul class='closed'>
                            <li><a href="#">网站配置</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=''><i class="icon-network"></i> 友情链接</a>
                        <ul class='closed'>
                            <li><a href="{{ URL('admin/links') }}">友情链接</a></li>
                            <li><a href="{{ URL('admin/links/create') }}">添加链接</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ URL('admin/uplode') }}"><i class="icon-graph"></i> 上传头像</a></li>
                </ul>
            </div>         
        </div>
        
        <!-- Main Container Start -->
        <div id="mws-container" class="clearfix">
            <div class="container">
        	   @yield('content')
                       
            </div>
            <div id="mws-footer">
            	Copyright Your Website 2012. All Rights Reserved.
            </div>
            
        </div>
        <!-- Main Container End -->
        
    </div>

    <!-- JavaScript Plugins -->
    <script src="{{ asset('admin/js/libs/jquery-1.8.3.min.js') }}"></script>
    <script src="{{ asset('admin/js/libs/jquery.mousewheel.min.js') }}"></script>
    <script src="{{ asset('admin/js/libs/jquery.placeholder.min.js') }}"></script>
    <!--<script src="{{ asset('admin/custom-plugins/fileinput.js') }}"></script>-->
    
    <!-- jQuery-UI Dependent Scripts -->
    <script src="{{ asset('admin/jui/js/jquery-ui-1.9.2.min.js') }}"></script>
    <script src="{{ asset('admin/jui/jquery-ui.custom.min.js') }}"></script>
    <script src="{{ asset('admin/jui/js/jquery.ui.touch-punch.js') }}"></script>

    <!-- Plugin Scripts -->
    <script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/colorpicker/colorpicker-min.js') }}"></script>
    <!--[if lt IE 9]>
    <script src="js/libs/excanvas.min.js"></script>
    <![endif]-->
    <script src="{{ asset('admin/plugins/flot/jquery.flot.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/flot/plugins/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/flot/pluginassetquery.flot.pie.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/flot/plugins/jquery.flot.stack.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/flot/plugins/jquery.flot.resize.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/colorpicker/colorpicker-min.js') }}"></script>
    <script src="{{ asset('admin/plugins/validate/jquery.validate-min.js') }}"></script>
    <script src="{{ asset('admin/custom-plugins/wizard/wizard.min.js') }}"></script>

    <!-- Core Script -->
    <script src="{{ asset('admin/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/js/core/mws.js') }}"></script>

    <!-- Themer Script (Remove if not needed) -->
    <script src="{{ asset('admin/js/core/themer.js') }}"></script>

    <!-- Demo Scripts (remove if not needed) -->
    <script src="{{ asset('admin/js/demo/demo.table.js') }}"></script>
    <script src="{{ asset('admin/js/demo/demo.dashboard.js') }}"></script>

</body>
</html>